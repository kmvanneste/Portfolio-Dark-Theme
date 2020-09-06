<?php
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "kmvanneste17@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}


    
    // $visitor_email = $_POST['mail'];
    // $message = $_POST['message'];

    // $email_from = 'kmvanneste17@gmail.com';

    // $email_subject = "New Form Submission";

    // $email_body = "User Name: $name.\n";
    //                 "User Email: $visitor_email\n";
    //                 "User Message: $message.\n";

    // $to = "kmvanneste17@gmail.com";

    // $headers = "From: $email_from \r\n";

    // $headers .= "Reply-to: $visitor_email \r\n";

    // mail($to, $email_body, $headers);

    // header("Location: contact.html");
?>
