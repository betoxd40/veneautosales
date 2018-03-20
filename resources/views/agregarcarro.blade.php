@extends('layouts.layout')

@section('content')
          <div class="page-header no-margin-bottom">
            <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">Add Car</h2>
            </div>
          </div>
          <ul class="breadcrumb">
            <div class="container-fluid">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Car</li>
            </div>
          </ul>
          <div id="car" class="container-fluid">

            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-12">
                <div class="block">

                  <div class="block-body">
                    <form method="POST" v-on:submit.prevent="createCar"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Name" class="form-control" name="name" v-model="newName" required>
                        </div>
                        <div class="form-group col-6">
                          <input  type="text" placeholder="Type" class="form-control" name="type" v-model="newType" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Model" class="form-control" name="model" v-model="newModel" required>
                        </div>
                        <div class="form-group col-6">
                          <input type="text" placeholder="Trim" class="form-control" name="trim" v-model="newTrim" required>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Body" class="form-control" name="body" v-model="newBody" required>
                        </div>
                        <div class="form-group col-6">
                          <input type="text" placeholder="Exterior" class="form-control" name="exterior" v-model="newExterior" required>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Interior" class="form-control" name="interior" v-model="newInterior" required>
                        </div>
                        <div class="form-group col-6">
                          <input type="text" placeholder="Doors" class="form-control" name="doors" v-model="newDoors" title="Enter the number of doors of the vehicle. for example: 1, 2, 4, 6" pattern="[0-9]+" required>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Vin" class="form-control" name="vin" v-model="newVin" required>
                        </div>
                        <div class="form-group col-6">
                          <input type="text" placeholder="Mileage" class="form-control" name="mileage" v-model="newMileage" title="Enter the correct vehicle mileage. for example: 0, 342453, 212343" pattern="[0-9]+" required>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Engine" class="form-control" name="engine" v-model="newEngine" required>
                        </div>
                        <div class="form-group col-6">
                          <select class="form-control" name="fuel" v-model="newFuel" required>
                            <option value="" disabled selected>Fuel</option>
                            <option >Gas</option>
                            <option>Hybrid</option>
                            <option>Electric</option>
                          </select>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Drive" class="form-control" name="drive" v-model="newDrive" required>
                        </div>
                        <div class="form-group col-6">
                          <input type="text" placeholder="Mpg" class="form-control" name="mpg" v-model="newMpg" required>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Year" class="form-control" name="year" v-model="newYear" title="Enter the year of the vehicle. for example: 1983, 1999, 2012, 2017" pattern="[0-9]+" required>
                        </div>
                        <div class="form-group col-6">
                          <input type="text" placeholder="Price" class="form-control" name="price" v-model="newPrice" title="Enter the price of the vehicle. for example: 500$, 10000.00$, 20000.5$" pattern="^[0-9]*\.?[0-9]*$" required>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="form-group col-6">
                          <input type="text" placeholder="Code" class="form-control" name="code" v-model="newCode" required>
                          <small class="help-block-none">Code to identify a car as unique.</small>
                        </div>

                        <div class="form-group col-12">
                          <textarea placeholder="Comments" class="form-control" name="comments" v-model="newComments"></textarea>
                        </div>
                       
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Main image</label>
                        <input type="file" placeholder="Main Image" class="form-control" id="main_image" name="main_image" accept="image/png,image/jpeg" title="load a jpg / png image"  required @change="imageChanged">
                        <small class="help-block-none">This image will be the main one that is displayed on the website.</small>
                        <div class="showImage pt-2">

                        </div>
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Secondary images</label>
                        <input type="file" name="secundary_images[]" id="secundary_images" accept="image/png,image/jpeg" class="form-control" title="load images jpg / png" @change="imageChangedMultiply" multiple>
                        <div class="showImage pt-2">

                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-4">
                          <button type="submit" class="btn btn-block btn-primary">Save</button>
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
           
            </div>
    @endsection