<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * view/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{title}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "f55eefeb-1892-4a18-830d-6e06c989853f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
			<h1>Lab 8</h1>
			<br/>
            </div>
            <div class="alone"></div>
            <div>
                <div class="{alerting}">
                    {errormessages}
                </div>
                <div id="content">                    
                    {content}
                </div>
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2014,  <a href="mailto:someone@somewhere.com">Me</a>.
            </div>
        </div>
    </body>
</html>
