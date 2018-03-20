<?php

$department = $_POST["department"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$vlbla_db1 = "contactos";
$email_to="info@smart4youdesign.com";
$email_corporativ="Smart4U Informacion <info@smart4youdesign.com>";
$email_subject="Support dashboard S4U";
$email_message="Support dashboard S4U.\n\n";
$email_message .= "Department: " . $_POST['department'] . "\n";
$email_message .= "Subject: " . $_POST['subject'] . "\n";
$email_message .= "Message: " . $_POST['message'] . "\n";

$bcc="info@smart4youdesign.com";

?><p>
    Thank you. The information has been sent correctly!</p><?php

//Notificaciones
$headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'BCC: '.$bcc."\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

$email_subj="Informacion Smart4U";
$email_mess="Thank you for contacting Smart4U. Soon we will contact you as soon as possible .";
$WEBSITE="smart4youdesign.com";
//Envio email a cliente
$headers ="From: ".$email_corporativ."\r\n".
    'Reply-To: '.$email_corporativ."\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($email, $email_subj, $email_mess, $headers);
?>
