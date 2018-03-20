<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleTestDriveController extends Controller
{
    public function index(){
        return view('schedule-test-drive');
    }
}
