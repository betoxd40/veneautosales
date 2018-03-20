<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class IndexController extends Controller
{

    public function index()
    {
        $cars = Car::get();
        return $cars;
    }

    public function indexHome()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        if( ($request->type) == 'contact'){
            print('contact');
            $name = $request->name;
            $cellphone = $request->cellphone;
            $email = $request->email;
            $message = $request->message;

            $vlbla_db1 = "contactos";
            $email_to="info@smart4youdesign.com";
            $email_corporativ="Smart4U Informacion <info@smart4youdesign.com>";
            $email_subject="Support dashboard S4U";
            $email_message="Support dashboard S4U.\n\n";
            $email_message .= "Name: " . $name . "\n";
            $email_message .= "Cellphone: " . $cellphone . "\n";
            $email_message .= "Email: " . $email . "\n";
            $email_message .= "Message: " . $message . "\n";

            $bcc="info@smart4youdesign.com";

//Notificaciones
            $headers = 'From: '.$email."\r\n".
                'Reply-To: '.$email."\r\n" .
                'BCC: '.$bcc."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);

            $email_subj="Info Veneautosales";
            $email_mess="Thank you for contacting Veneautosales. Soon we will contact you as soon as possible .";


            $WEBSITE="smart4youdesign.com";
//Envio email a cliente
            $headers ="From: ".$email_corporativ."\r\n".
                'Reply-To: '.$email_corporativ."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            @mail($email, $email_subj, $email_mess, $headers);
        }else if( $request->type == 'car-vehicle'){
            print('cars upon');
            $name = $request->name2;
            $cellphone = $request->cellphone2;
            $email = $request->email2;
            $make = $request->make2;
            $model = $request->model2;
            $color = $request->color2;
            $year = $request->year2;
            $mileage = $request->mileage2;
            $budget = $request->budget2;

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
            $email_message .= "Year Initial: " . $year[0] . " Year End: " . $year[1] . "\n";
            $email_message .= "Year Initial: " . $mileage[0] . " Year End: " . $mileage[1] . "\n";
            $email_message .= "Year Initial: " . $budget[0] . " Year End: " . $budget[1] . "\n";

            $bcc="info@smart4youdesign.com";

//Notificaciones
            $headers = 'From: '.$email."\r\n".
                'Reply-To: '.$email."\r\n" .
                'BCC: '.$bcc."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);

            $email_subj="Info Veneautosales";
            $email_mess="Thank you for contacting Veneautosales. Soon we will contact you as soon as possible .";

//Envio email a cliente
            $headers ="From: ".$email_corporativ."\r\n".
                'Reply-To: '.$email_corporativ."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            @mail($email, $email_subj, $email_mess, $headers);
        }else{
            print('Schedule');
            $name = $request->name;
            $lastName = $request->lastName;
            $cellphone = $request->cellphone;
            $email = $request->email;
            $date = $request->date;
            $code = $request->code;

            $vlbla_db1 = "contactos";
            $email_to = "info@smart4youdesign.com";
            $email_corporativ = "Smart4U Informacion <info@smart4youdesign.com>";
            $email_subject = "Support dashboard S4U";
            $email_message = "Support dashboard S4U.\n\n";
            $email_message .= "Name: " . $name . "\n";
            $email_message .= "Last Name: " . $lastName . "\n";
            $email_message .= "Cellphone: " . $cellphone . "\n";
            $email_message .= "Email: " . $email . "\n";
            $email_message .= "Date: " . $date . "\n";
            $email_message .= "Vehicle CODE: " . $code . "\n";

            $bcc = "info@smart4youdesign.com";

//Notificaciones
            $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'BCC: ' . $bcc . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);

            $email_subj = "Info Veneautosales";
            $email_mess = "Thank you for contacting Veneautosales. Soon we will contact you as soon as possible .";


            $WEBSITE = "smart4youdesign.com";
//Envio email a cliente
            $headers = "From: " . $email_corporativ . "\r\n" .
                'Reply-To: ' . $email_corporativ . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            @mail($email, $email_subj, $email_mess, $headers);
        }

    }

}
