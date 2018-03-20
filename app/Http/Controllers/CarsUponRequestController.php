<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsUponRequestController extends Controller
{
    public function index(){
        return view('cars-upon-request');
    }

    public function store(Request $request)
    {
        $name = $request[0];
        $cellphone = $request[1];
        $email= $request[2];
        $make = $request[3];
        $model = $request[4];
        $color = $request[5];
        $year = $request[6];
        $mileage = $request[7];
        $budget = $request[8];

        $vlbla_db1 = "contactos";
        $email_to="info@smart4youdesign.com";
        $email_corporativ="Smart4U Informacion <info@smart4youdesign.com>";
        $email_subject="Support dashboard S4U";
        $email_message="Support dashboard S4U.\n\n";
        $email_message .= "Name: " . $name . "\n";
        $email_message .= "Cellphone: " . $cellphone . "\n";
        $email_message .= "Email: " . $email . "\n";
        $email_message .= "Make: " . $make . "\n";
        $email_message .= "Model: " . $model . "\n";
        $email_message .= "Color: " . $color . "\n";
        $email_message .= "Year: " . $year . "\n";
        $email_message .= "Mileage: " . $mileage . "\n";
        $email_message .= "Budget: " . $budget . "\n";

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
