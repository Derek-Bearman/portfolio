<?php
session_start();

if(filter_has_var(INPUT_POST, 'emailSubmit')) {
    # Put SignUp form values into globals
    $_SESSION['senderFirstName'] = (filter_has_var(INPUT_POST, 'senderFirstName')) ? $_POST['senderFirstName'] : '';
    $_SESSION['senderLastName'] = (filter_has_var(INPUT_POST, 'senderLastName')) ? $_POST['senderLastName'] : '';
    $_SESSION['senderEmail'] = (filter_has_var(INPUT_POST, 'senderEmail')) ? $_POST['senderEmail'] : '';
    $_SESSION['emailMessage'] = (filter_has_var(INPUT_POST, 'emailMessage')) ? $_POST['emailMessage'] : '';
    
    $firstName = $_SESSION['senderFirstName'];
    $lastName = $_SESSION['senderLastName'];
    $sender = $_SESSION['senderFirstName'] . ' ' . $_SESSION['senderLastName'];
    $senderEmail = $_SESSION['senderEmail'];
    $subject = "Online Photography Inquiry from $sender";
    $recipient = "jwhayland@gmail.com";
    $emailMessage = $_SESSION['emailMessage'];

    # Check if all fields are filled in properly
    if(empty($_SESSION['senderFirstName']) || empty($_SESSION['senderLastName']) || empty($senderEmail) || empty($emailMessage)){

        # Send back to contact page with error message
        $_SESSION['alert'] = 'Please fill in all fields.';
        $_SESSION['alertClass'] = 'alert-bad';
        header ('Location: '.URLROOT.'/pages/contact.php?error=emptyFields');

         # Check if the email address is invalid:
        } else if(!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
            # Send back to login page with error message
            $_SESSION['alert'] = 'Email address is invalid.';
            $_SESSION['alertClass'] = 'alert-bad';
            header ('Location: '.URLROOT.'/pages/contact.php?error=invalidEmail');

        # Check if the first and last name are valid:
        } else if(!preg_match("/^[a-zA-Z0-9]*$/", $firstName)){
            # Send back to login page with error message
            $_SESSION['alert'] = 'First name contains invalid characters.';
            $_SESSION['alertClass'] = 'alert-bad';
            header ('Location: '.URLROOT.'/pages/contact.php?error=invalidFirstName');

        } else if(!preg_match("/^[a-zA-Z0-9]*$/", $lastName)){
            # Send back to login page with error message
            $_SESSION['alert'] = 'Last name contains invalid characters.';
            $_SESSION['alertClass'] = 'alert-bad';
            header ('Location: '.URLROOT.'/pages/contact.php?error=invalidLastName');

        # Send email
        } else {
            $mailBody = "Name: $sender\nEmail: $senderEmail\n\n$emailMessage";

            mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
        
            unset($_SESSION['senderFirstName'], $_SESSION['senderLastName'], $_SESSION['senderEmail'], $_SESSION['emailMessage']);

            $_SESSION['alert'] = 'Your message has been sent. Thank you!';
            $_SESSION['alertClass'] = 'alert-good';

            header ('Location: '.URLROOT.'/pages/contact.php?alert=emailSent');
        }

    } else {
        header ('Location: '.URLROOT.'/pages/contact.php');
    }