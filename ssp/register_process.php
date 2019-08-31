<?php
session_start();

include_once "../fcof/swift/lib/swift_required.php";
include "mysql_connect.php";

$co_founders = mysqli_real_escape_string($conn, $_POST["co_founders"]);
$startup_name = mysqli_real_escape_string($conn, $_POST["startup_name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
$msg = mysqli_real_escape_string($conn, $_POST["msg"]);
// echo $co_founders;	
	    $subject = 'Registration from SSP - '. $startup_name;
	    $from = array('ssp@ecell.in' =>"SSP 2018");
	    $to = array(
	     'akash@ecell.in'  => 'Akash, E-Cell IITB','harshjain@ecell.in'  => 'Harsh, E-Cell IITB','kushal@ecell.in'  => 'Kushal, E-Cell IITB',
	    );
	    // $to = array(
	    //  'akash@ecell.in'  => 'Akash, E-Cell IITB',
	    // );


	    $text = "Please update your browser to view this message";
	    $html =  "Startup-Name: ".$startup_name.". <br> Co-Founders: ".$co_founders." <br> E-mail : ".$email." <br> Mobile : ".$mobile."<br> <br> Desc of Services Needed : ".$msg;

	    $transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 2525);
	    $transport->setUsername('THE ENTREPRENEURSHIP CELL, IIT BOMBAY');
	    $transport->setPassword('lXYcHl52RFJaElGCKzMpLw');
	    $swift = Swift_Mailer::newInstance($transport);

	    $message = new Swift_Message($subject);
	    $message->setFrom($from);
	    $message->setBody($html, 'text/html');
	    $message->setTo($to);
	    $message->addPart($text, 'text/plain');

	    if ($recipients = $swift->send($message, $failures))
	    {

				session_unset();
				session_destroy();
	     echo '<script>alert("Thank you! You have successfully registered.");</script><script>window.location = "index.php";</script>';
	    } else {
	     echo "Mailing error:\n";
	     //print_r($failures);
	    }

?>