<?php
session_start();

include_once "../swift/lib/swift_required.php";
include "mysql_connect.php";

$name =  mysqli_real_escape_string($conn, $_POST["name"]);
$startup = mysqli_real_escape_string($conn, $_POST["startup"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$msg = mysqli_real_escape_string($conn, $_POST["msg"]);

// echo "reached somewhere";
	    $subject = 'Contact from SSP - '. $name;
	    $from = array('ssp@ecell.in' =>"SSP 2018");
	    $to = array(
	     'akash@ecell.in'  => 'Akash, E-Cell IITB','harshjain@ecell.in'  => 'Harsh, E-Cell IITB',
	    );
	    // $to = array(
	    //  'akash@ecell.in'  => 'Akash, E-Cell IITB',
	    // );	    


	    $text = "Please update your browser to view this message";
	    $html =  "Startup-Name: ".$startup.". <br> Co-Founder: ".$name." <br> E-mail : ".$email."<br> <br> Desc of Services Needed : ".$msg;
	    // echo $html;
	    $transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
	    $transport->setUsername('E-Cell');
	    $transport->setPassword('9DK0vadGxCj4u3Jhh_YMlw');
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

