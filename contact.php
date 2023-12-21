<?php
    $to = "m.boelcz@gmail.com";
    $subject = "Anfrage von Portfolio-Webseite";
    
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $nummer = $_POST["number"];
    $betreff = $_POST["betreff"];
    $textarea = $_POST["textarea"];
    
    $msg = "Vorname: $vorname\n";
    $msg .= "Nachname: $nachname\n";
    $msg .= "E-Mail: $email\n";
    $msg .= "Telefonnummer: $nummer\n";
    $msg .= "Betreff: $betreff\n";
    $msg .= "Textarea: $textarea";

    mail($to, $subject, $msg);
    header('Location: main.html');
?>