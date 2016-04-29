<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name = $_REQUEST['name']; //@trim(stripslashes($_POST['name'])); 
    $email = $_REQUEST['email']; //@trim(stripslashes($_POST['email'])); 
    $subject = $_REQUEST['subject']; //@trim(stripslashes($_POST['subject'])); 
    $phone = $_REQUEST['phone'];
    $company = $_REQUEST['company'];
    $message = $_REQUEST['message']; //@trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'info@tncglobal.com.au';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Company: ' . $company . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;