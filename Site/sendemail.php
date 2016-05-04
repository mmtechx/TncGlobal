<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $phone = @trim(stripslashes($_POST['phone']));
    $company = @trim(stripslashes($_POST['company']));
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'info@tncglobal.com.au';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Company: ' . $company . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);

    die;