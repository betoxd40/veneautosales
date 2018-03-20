@extends('layouts.layout')

@section('content')
    <div id="modifyCar">
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Modify Car</h2>
            </div>
        </div>
        <ul class="breadcrumb">
            <div class="container-fluid">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">Modify Car</li>
            </div>
        </ul>
        <div class="container-fluid">
            <div class="row d-flex justify-content-end">
                <div class="col-5 pb-3">
                    <div class="input-group"><span class="input-group-btn">
                            <button type="button" class="btn btn-primary" >Search!</button></span>
                        <input type="text" class="form-control" v-model="search">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="350px">Image</th>
                                <th class="pl-5">Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="car in filteredCars">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <td><img :src="car.mainImg" class="img-fluid"></td>
                                        </div>
                                        <div class="col-md-4" >
                                            <td class="pl-5">
                                                <div class="row">
                                                    Make: @{{car.name}}
                                                </div>
                                                <div class="row">
                                                    Type: @{{car.type}}
                                                </div>
                                                <div class="row">
                                                    Model: @{{car.model}}
                                                </div>
                                                <div class="row">
                                                    Trim: @{{car.trim}}
                                                </div>
                                                <div class="row">
                                                    Body: @{{car.body}}
                                                </div>
                                                <div class="row">
                                                    Exterior: @{{car.exterior}}
                                                </div>
                                                <div class="row">
                                                    Interior: @{{car.interior}}
                                                </div>
                                                <div class="row">
                                                    Doors: @{{car.doors}}
                                                </div>
                                                <div class="row">
                                                    Vin: @{{car.vin}}
                                                </div>
                                                <div class="row">
                                                    .
                                                    .
                                                    .
                                                </div>
                                            </td>
                                        </div>
                                        <div class="col-md-2">
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" @click="editCar(car)">Modify </button>
                                                <button type="button" data-toggle="modal" class="btn btn-secondary" @click="selectId(car,true)">Delete </button>
                                                <button type="button" data-toggle="modal" class="btn btn-secondary" @click="selectId(car,false)">Sales </button>
                                               
                                            </td>
                                        </div>

                                    </div>
                                </div>


                            </tr>

                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
        @include('deleteCar')
        @include('editCarForm')



        
    </div>




@endsection