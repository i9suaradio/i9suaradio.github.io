<?php
session_start();

if ($_POST["palavra"] == $_SESSION["palavra"]){
    
    $to = 'kroket.kroket@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message =''.$name.'
    Email: '.$email.'
    Text: '.$text.'';

    if (@mail($to, $message, $headers))
    {
        echo 'The message has been sent.';
        echo "<br/><a href='javascript:history.go(1)'>GO Back</a>";

        $subject = "My subject";
        $headers = "From: webmaster@example.com" . "\r\n";

        mail($to,$subject,$message,$headers);

    }else{
        echo 'Failed';
    }
        
    }else{
        echo "<h1>Error!</h1>";
        echo "<a href='/'>Try again</a>";
    }

