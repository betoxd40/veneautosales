<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request)
    {
        $name = $request[0];
        $last_name = $request[1];
        $country = $request[2];
        $state = $request[3];
        $email = $request[4];
        $cellphone = $request[5];
        $message = $request[6];

        $vlbla_db1 = "contactos";
        $email_to="info@smart4youdesign.com";
        $email_corporativ="Smart4U Informacion <info@smart4youdesign.com>";
        $email_subject="Support dashboard S4U";
        $email_message="Support dashboard S4U.\n\n";
        $email_message .= "Name: " . $name . "\n";
        $email_message .= "Last Name: " . $last_name . "\n";
        $email_message .= "Country: " . $country . "\n";
        $email_message .= "State: " . $state . "\n";
        $email_message .= "Email: " . $email . "\n";
        $email_message .= "Cellphone: " . $cellphone . "\n";
        $email_message .= "Message: " . $message . "\n";

        $bcc="info@smart4youdesign.com";

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
    }
}
