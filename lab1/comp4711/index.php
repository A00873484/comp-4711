<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Hello world! My first PHP webapp?!?!?!?"; // Hello world
        
        include('student.php');  // Include Student class
        $first = new Student();  // Create a student object
        $first->surname = "Doe"; // Set the surname for the student
        $first->first_name = "John";  // Set the first name for the student
        $first->add_email('home','john@doe.com'); // Add an email for the student 
        $first->add_email('work','jdoe@mcdonalds.com'); // Add an email for the student
        $first->add_grade(65);  // Add a grade for the student
        $first->add_grade(75);  // Add a grade for the student
        $first->add_grade(55);  // Add a grade for the student
        $students['j123'] = $first; // Add the student object to the students array
        $second = new Student();  // Create a student object
        $second->surname = "Einstein"; // Set the surname for the student
        $second->first_name = "Albert";  // Set the first name for the student
        $second->add_email('home','albert@braniacs.com'); // Add an email for the student 
        $second->add_email('work1','a_einstein@bcit.ca'); // Add an email for the student 
        $second->add_email('work2','albert@physics.mit.edu'); // Add an email for the student 
        $second->add_grade(95);  // Add a grade for the student
        $second->add_grade(80);  // Add a grade for the student
        $second->add_grade(50);  // Add a grade for the student
        $students['a456'] = $second;  // Add the student object to the students array
        $third = new Student();  // Create a student object
        $third->surname = "Huang"; // Set the surname for the student
        $third->first_name = "Jay";  // Set the first name for the student
        $third->add_email('home','example@example.com'); // Add an email for the student 
        $third->add_grade(0);  // Add a grade for the student
        $third->add_grade(0);  // Add a grade for the student
        $third->add_grade(0);  // Add a grade for the student
        $students['j789'] = $third;  // Add the student object to the students array
        
        ksort($students); // Sort the students in the students array
        
        foreach($students as $student) // For each student in the student array
            echo $student->toString(); // Print out the student
        ?>
    </body>
</html>
