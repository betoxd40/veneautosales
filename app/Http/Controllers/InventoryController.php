<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class InventoryController extends Controller
{

    public function indexInventory()
    {
        return view('inventory');
    }

    public function indexInventoryFiltro($makes, $models, $prices)
    {
        return view('inventory',compact('makes','models','prices'));
    }

    public function index()
    {
        $cars = Car::get();
        return $cars;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getCar($id)
    {
        $car = Car::find($id);
        return view('vehicle-information', ['id' => $car->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return $car;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
