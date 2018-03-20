<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

class addCarController2 extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function indexAddCar()
    {
        return view('agregarcarro');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
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
            'price' => 'required',
            'code' => 'required'
        ]);

        $exploded = explode(',', $request->mainImg);
        $decoded = base64_decode($exploded[1]);
        if (str_contains($exploded[0], 'jpeg')){
            $extension = 'jpg';
        }else{
            $extension = 'png';
        }

        $fileName = str_random(10) . '.' . $extension;
        $path = public_path() . '\\imgCars\\' . $fileName;
        file_put_contents($path, $decoded);
        $path = '/imgCars/' . $fileName;
        $request['mainImg'] = $path;

        $secondaryImg = '';
        for($i=0 ; $i < count( $request->secondaryImg) ; $i++) {
            $exploded = explode(',', $request->secondaryImg[$i]);
            $decoded = base64_decode($exploded[1]);
            if (str_contains($exploded[0], 'jpeg')) {
                $extension = 'jpg';
            } else {
                $extension = 'png';
            }

            $fileName = str_random(10) . '.' . $extension;
            $path = public_path() . '\\imgCars\\' . $fileName;
            file_put_contents($path, $decoded);
            $path = '/imgCars/' . $fileName;

            if ($i == 0) {
                $secondaryImg = $path;
            } else {
                $secondaryImg = $path . '%%%%' . $secondaryImg;

            }
        }
        $request['secondaryImg'] = $secondaryImg;
        $car = Car::create($request->all());

    }



    public function update(Request $request, $id)
    {
        $this->validate($request, [
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
            'price' => 'required',
            'code' => 'required'
        ]);
        Car::find($id)->update($request->all());
        return;
    }

}
