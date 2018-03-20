<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

class AddCarController extends Controller
{
    public function show(){
    	return view('agregarcarro');
    }

    function addImagen($imagen, $newName){
        //obtenemos el nombre del archivo
        $nombre = $imagen->getClientOriginalName();
        $ext = explode(".", $nombre);
        $ext=end($ext);
        $newName=$newName.'.'.$ext;
        //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($imagen)); // Guardo el archivo
       \File::move(storage_path('app/imgCars/').$nombre,storage_path('app/imgCars/').$newName); //Renombro el archivo
    }

     public function save(Request $request){

       $this->validate($request,[

            'name' => 'required',
            'type' => 'required',
            'model' => 'required',
            'trim' => 'required',
            'body' => 'required',
            'exterior' => 'required',
            'interior' => 'required',
            'doors' => 'required',
            'vin' => 'required',
            'mileage' => 'required',
            'engine' => 'required',
            'fuel' => 'required',
            'drive' => 'required',
            'mpg' => 'required',
            'year' => 'required',
            'price' => 'required'
            
       ]);
       Car::create($request->all());
       $id = Car::find(DB::table('cars')->max('id'));
       $id = $id['id'];
     
       $imagenes=$request->file('secundary_images');
       
       $i=1;
       foreach ($imagenes as $imagen) {
          $newName=''.$id.'-'.$i;
          $this->addImagen($imagen,$newName);
          $i++;
       }

     	 $file = $request->file('main_image');
       $this->addImagen($file,$id);
       return $id;
    }

     


}


