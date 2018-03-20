@extends('layouts.layout')

@section('content')
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Support</h2>
        </div>
    </div>
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Support</li>
        </div>
    </ul>
    <div class="container-fluid">

        <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-12">
                <div class="block">

                    <div class="block-body">
                        <h3>Submit a verified ticket to Billing or Technical Support</h3>
                        <p>
                            Provide as detailed information as possible. Indicate step by step what we must do to reproduce the problem.
                            Be patient. Rain, shine or flashing your ticket will receive attention as soon as possible. You are our priority.</p>
                        <div class="panel-body">
                            <form method="post" id="mensajeform" target="hidden">
                                <div class="form-group row pt-5">
                                    <label class="col-sm-2 form-control-label">Select Department</label>
                                    <div class="col-sm-5 select">
                                        <select name="department" id="department" class="form-control mb-3">
                                            <option>Billing</option>
                                            <option>Technical Support</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Subject</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="subject" id="subject" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Support Request Detail:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="message" id="message" rows="7"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="form-group col-4">
                                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="envio" class="text-white"></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection