<?php

class Schedule extends CI_Model {
    
    // Store the SimpleXml Object
    var $xml;
    /*
     * The constructor for the model.
     * Load the xml file and store it into $xml. 
     */
    function __construct() {
        $this->xml = simplexml_load_file("./data/ferryschedule.xml");
    }
    
    /*
     * Get all the port in the xml file with codes and names.
     */
    function retrieve_ports() {
        $ports = array();
        foreach ($this->xml->ports->port as $port) {
            $temp = array(
                'code' => (string) $port['code'],
                'name' => (string) $port
            );
            $ports[] = $temp;
        }
        return $ports;
    }   
    
    /*
     * Format the time to be nicer
     * @param $time the string of the time that will be formatted.
     * @return the string after formatting.
     */
    function format_time($time) {
        $result = "";
        $hour = (int) substr($time, 0, 2);
        if ($hour < 12) {
            $result = $hour . ":" . substr($time, 2, 2) . " A.M";
        } else
            $result = ($hour % 12) . ":" . substr($time, 2, 2) . " P.M";
        return $result;
    }
    /*
     * The main function of the model.
     * Get the origin and destination location.
     * Find the depart and arrival time with all the stops along the way.
     * @param $from the origin location
     * @param $to the destination location
     * @return the array of all the row which contains the information 
     * for schedule.
     */
    function retrieve_sailings($from, $to) {
        $result = array();
        foreach ($this->xml->sailing as $sailing) {
            $departure_time = "";
            $arrival_time = "";
            $stops_on_the_way = array();
            if ($sailing['origin'] == $from) {
                $departure_time = (string) $sailing['depart'];
            }
            foreach ($sailing->stop as $stop) {
                if (empty($departure_time)) {
                    if ($stop['port'] == $from) {
                        $departure_time = (string) $stop['departure'];
                    }
                } else if ($stop['port'] == $to) {
                    $arrival_time = (string) $stop['arrive'];
                    break;
                }
                if (!empty($departure_time)) {
                    $stops_on_the_way[] = (string) $stop['port'];
                }
            }
            if (empty($departure_time) || empty($arrival_time)) {
                continue;
            } else {
                $stop = "";
                if (count($stops_on_the_way) == 0) {
                    $stops = "non-stop";
                } else {
                    $stops = implode(",", $stops_on_the_way);
                }
                $row = array(
                    'sailson' => $sailing['days'],
                    'departure_time' => $this->format_time($departure_time),
                    'arrival_time' => $this->format_time($arrival_time),
                    'stops_on_the_way' => $stops
                );
            }
            $result[] = $row;
        }
        return $result;
    }  

}
