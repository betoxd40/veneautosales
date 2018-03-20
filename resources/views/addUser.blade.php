@extends('layouts.layout')

@section('content')
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add User</h2>
        </div>
    </div>
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Add User</li>
        </div>
    </ul>
    <div id="add-user" class="container-fluid">

        <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-12">
                <div class="block">

                    <div class="block-body">
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" v-on:submit.prevent="addUser">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" v-model="name" required autofocus>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="last_name" class="col-md-4 control-label">Last name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control" name="last_name" v-model="last_name" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group" >
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" v-model="email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" v-model="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" v-model="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        <div class="row">
                                            <div class="col-12 text-white">
                                                @{{ name }}
                                                @{{ last_name }}
                                                @{{ email }}
                                                @{{ password }}
                                                @{{ password_confirmation }}
                                            </div>
                                        </div>
                                    </div>
                                    <span v-for="error in errors" class="text-danger">@{{ errors }}</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection