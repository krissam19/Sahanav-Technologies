
<?php

require("class.phpmailer.php");

   // $mail->Host = "ssl://smtp.gmail.com"; // sets GMAIL as the SMTP server
	//$mail->Port = 465; 
    $mail = new PHPMailer();
    $mail->IsSMTP(); // send via SMTP
    $mail->SMTPSecure = "tls";
		$mail->Host = 'smtp.gmail.com';
		$mail->port = '587';
		$mail->SMTPDebug = 1;
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "sasroot@gmail.com"; // SMTP username
    $mail->Password = "antillo123"; // SMTP password
    $webmaster_email = "sasroot@gmail.com"; //Reply to this email ID
    $email="jeysinghanbu@gmail.com"; // Recipients email ID
    $name="Staff Administration"; // Recipient's name
    $mail->From = $webmaster_email;
    $mail->FromName = "STAFF ADMINISTRATION";
    $mail->AddAddress($email,$name);
    $mail->AddReplyTo($webmaster_email,"STAFF ADMINISTRATION");
    $mail->WordWrap = 50; // set word wrap
    $mail->IsHTML(true); // send as HTML
    $mail->Subject = "Your Activation Link";
    $mail->Body = "<html></html>"; //HTML Body
    $mail->AltBody = "This is the body when user views in plain text format"; //Text Body
	$file_to_attach = '../../../Users/Victor/Desktop/Antillo Consulting Service.docx';
    $mail->AddAttachment( $file_to_attach , 'Antillo Consulting Service.docx' );

     if(!$mail->Send())
    {
   echo "msg not send";
    }
    else
    {
    echo " msg has been send";
    }
	
	
	?>