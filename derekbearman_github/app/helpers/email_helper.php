<?php
session_start();


// Define Message Variables
$msg = '';
$msgClass = '';
$formClass = '';

// Check For Submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Pop up Alert
    $_SESSION['formClass'] = 'formAlert';

    // Get Form Data
    $sender = htmlspecialchars($_POST['sender']);
    $senderEmail = htmlspecialchars($_POST['senderEmail']);
    $message = htmlspecialchars($_POST['message']);
    $_SESSION['sender'] = htmlspecialchars($_POST['sender']);
    $_SESSION['senderEmail'] = htmlspecialchars($_POST['senderEmail']);
    $_SESSION['message'] = htmlspecialchars($_POST['message']);

    // Check required fields
    if(!empty($sender) && !empty($senderEmail) && !empty($message)){
        // Passed
        // Check Email
        if(filter_var($senderEmail, FILTER_VALIDATE_EMAIL) === false){
            // Failed
            $_SESSION['msg'] = 'Please use a valid email address!';
            $_SESSION['msgClass'] = 'alert alert-danger';
        } else {
            // Passed
            $recipient = "hellothere@derekbearman.com";
            $subject = "WebDev Inquiry from ".$sender;
            $mailBody = "<h2>Form Request</h2>
                        <h4>Name:</h4> <p>".$sender."</p>
                        <h4>Email:</h4> <p>".$senderEmail."</p>
                        <h4>Message:</h4> <p>".$message."</p>";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: ".$sender. "<".$senderEmail.">" . "\r\n";
            if (mail($recipient, $subject, $mailBody, $headers)) {
                // Email Sent
                $_SESSION['msg'] = 'Your message has been sent!';
                $_SESSION['msgClass'] = 'alert alert-success';
                unset($_POST['sender']);
                unset($_POST['senderEmail']);
                unset($_POST['message']);
                unset($_SESSION['sender']);
                unset($_SESSION['senderEmail']);
                unset($_SESSION['message']);
            } else {
                // Failed
                $_SESSION['msg'] = 'Your message was not sent!';
                $_SESSION['msgClass'] = 'alert alert-danger';				
            }
        }
    } else {
        // Failed
        $_SESSION['msg'] = 'Please fill in all fields!';
        $_SESSION['msgClass'] = 'alert alert-danger';		
    }
header('Location:' . URLROOT .  '/portfolios/developer');
}

