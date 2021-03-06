<?php

//print_r($_REQUEST);
//die;


/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtpout.secureserver.net";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPSecure  = 'ssl';
$mail->DKIM_domain = '127.0.0.1';

$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "events@palsglobalsolutions.in";

//Password to use for SMTP authentication
$mail->Password = "P@ls2016";
//Set who the message is to be sent from
$mail->setFrom('events@palsglobalsolutions.in', 'PluralSight Round Table');
//Set an alternative reply-to address
$mail->addReplyTo('events@palsglobalsolutions.in', 'PluralSight Round Table');

//Set who the message is to be sent to
$mail->addAddress($_POST['Email'], $_POST['FirstName']." ".$_POST['LastName']);
$mail->addBCC('events@palsglobalsolutions.in', 'PluralSight Round Table');
$mail->addBCC('uday@palsglobalsolutions.com', 'PluralSight Round Table');
$mail->addBCC('sriya@palsglobalsolutions.com', 'PluralSight Round Table');
//Set the subject line
$mail->Subject = 'PluralSight - Join us for the Round Table Event';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

if(isset($_POST['FirstName'])) {
   $fname = $_POST['FirstName'];
} else {
    $fname = "Participant";
}

		$eventDate = "24th August 2016";


$bodycontent = <<<EOD
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>PluralSight - Join us for the Round Table Event on 24th August</title>
</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif;">
  <div >

Dear {$fname},
  <p>
   <br>
Thank you for registering!
 <br>
 <br>
We will get back to you in 48Hrs to confirm your registration for the Round Table on Nimbler Delivery Capability with Smarter Learning on 24th August 2016. If you do not receive a confirmation mail, please email us at events@palsglobalsolutions.com. 
 <br>
 <br>
You can also call +91-9515050829 for any queries / assistance regarding the same. We look forward to see you!
 <br>
 <br>
Thank you and we look forward to see you!
 </p>
 <br>
  </div>
Warm Regards , <br>
PALS Event Team | PALS Global Solutions Pvt. Ltd. |<br>
Address: 2nd Floor, Plot no : 122, Kavuri Hills<br>
Phase -1, Jubilee Hills, Hyderabad - 500033, Telangana, INDIA<br>
+91-40-40202507, +91-40-40201779<br>
http://www.palsglobalsolutions.com<br>

</div>
</body>
</html>


EOD;

$mail->msgHTML($bodycontent);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
   // echo "Mailer Error: " . $mail->ErrorInfo;
	

		$updatesql = "update pluralsight set user_status=1 where id=".$conn->insert_id;

		if ($conn->query($updatesql) === TRUE) {
		//	echo "New record created successfully Message sent!";
		//	die();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			die();
		}

		$conn->close();

} else {
   // echo "Message sent!";
}

