<?php

namespace App\Http\Controllers;

use App\Statistics;
use Illuminate\Http\Request;
use App\Car;
use App\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDash()
    {
        return view('home');
    }

    public function index()
    {
        $data = [];
        $data[0] =  Car::count();
        $data[1] = Statistics::get();
        if (Statistics::count() == 0) {
            $data[1] = 0;
        }
        $data[2] =  Requests::count();
        return $data;
    }
}
