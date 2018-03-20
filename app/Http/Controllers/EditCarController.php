<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Statistics;
use Illuminate\Support\Facades\Storage;

class EditCarController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::get();
        return $cars;
    }

    public function indexEditCar()
    {
        return view('editCar');
    }

    public function store(Request $request)
    {
           
            $exploded = explode(',', $request['newImg']);
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

            $secondaryImg='';
            $primer=true;
            foreach ($request['secondaryImg'] as $imagen) {
                 if($primer){
                    $secondaryImg.=$imagen;
                    $primer=false;
                 }else{
                    $secondaryImg.='%%%%'.$imagen;
                 }
                    
            }
            $request['secondaryImg']=$secondaryImg.'%%%%'.$path;
            Car::find($request['id'])->update($request->all());


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
            'price' => 'required'
        ]);        
        
        
        if($request->auxMainImg != ''){

             $car = Car::findOrFail($id);
             //inicio de borrar las imagenes de imgCars
             unlink( public_path($car['mainImg']));
            // fin borrar Imagen
            $exploded = explode(',', $request->auxMainImg);
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
            //ARREGLAR
            Storage::delete($request->mainImg);
            $request['mainImg'] = $path;

        }

        if(!empty($request['auxSecundaryImg']))
        {

             foreach ($request['auxSecundaryImg'] as $imagen) {
                unlink( public_path($imagen) );
            }
        }

        if(!empty($request['secondaryImg']))
        {
            $secondaryImg='';
            $primer=true;
            foreach ($request['secondaryImg'] as $imagen) {
                 if($primer){
                    $secondaryImg.=$imagen;
                    $primer=false;
                 }else{
                    $secondaryImg.='%%%%'.$imagen;
                 }
                    
            }
            $request['secondaryImg']=$secondaryImg;
        }else{
            $request['secondaryImg']=null;
        }

        if(!empty($request['newImg']))
        {
              
            $secondaryImg = '';
            for($i=0 ; $i < count( $request['newImg']) ; $i++) {
                $exploded = explode(',', $request['newImg'][$i]);
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
            if(!empty($request['secondaryImg']))
                $request['secondaryImg']=$request['secondaryImg'].'%%%%'.$secondaryImg;
            else
                $request['secondaryImg']=$secondaryImg;


        }


        Car::find($id)->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d=explode('-', $id);
        $id=$d[0];
        $d=$d[1]; // si es 1 fue eliminado si es 0 fue vendido

        $car = Car::findOrFail($id);
        //inicio de borrar las imagenes de imgCars
        if(!empty($car['mainImg']))
        {
            unlink( public_path($car['mainImg']));
        }
        
        if(!empty($car['secondaryImg'])){

            $imagenes= explode('%%%%', $car['secondaryImg']);
            foreach ($imagenes as $imagen) {
                unlink( public_path($imagen));
            }
        }
        //fin
        $stat=Statistics::find(1);
        
        if(empty($stat)){
            $stat=array('sales'=>0,'eliminated'=>0);
            if($d=='0'){
                $stat['sales']+=1;
            }
            else{
                $stat['eliminated']+=1;
            }
            Statistics::create($stat);
        }
        else{
            if($d=='0'){
                $stat['sales']+=1;
            }
            else{
                $stat['eliminated']+=1;
            }
            $stat->save();
        }
        

        $car->delete();
    }
}
