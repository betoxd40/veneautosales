@extends('layouts.layout')

@section('content')
    <div id="dashboardHome">
        <div>
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <section class="pt-4 no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-info"></i></div><strong>Cars in inventory</strong>
                                    </div>
                                    <div class="number dashtext-1">@{{ nroCars }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-chart"></i></div><strong>Sales</strong>
                                    </div>
                                    <div class="number dashtext-2">@{{ sales }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-chart"></i></div><strong>Eliminated</strong>
                                    </div>
                                    <div class="number dashtext-3">@{{ eliminated }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="statistic-block block">
                                <div class="progress-details d-flex align-items-end justify-content-between">
                                    <div class="title">
                                        <div class="icon"><i class="icon-mail"></i></div><strong>Car requests</strong>
                                    </div>
                                    <div class="number dashtext-4">@{{ cars_requests }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="administer-cars" class="pl-4">
                <div class="row">
                    <div class="col-12">
                        <h4 class="">Administer cars</h4>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <a href="/dashboard/add-car">
                                    <div class="box-gray text-center">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="icon mt-5"><i class="icon-new-file"></i></div>
                                                <h5 class="pt-2">Add Car</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="col-3">
                                <a href="/dashboard/modify-car">
                                    <div class="box-gray text-center">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="icon mt-5"><i class="icon-new-file"></i></div>
                                                <h5 class="pt-2">Modify Car</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section id="administer-cars" class="pl-4 pt-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="">Users</h4>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <a href="/dashboard/add-user">
                                    <div class="box-gray text-center">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="icon mt-5"><i class="icon-new-file"></i></div>
                                                <h5 class="pt-2">Add User</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section id="administer-cars" class="pl-4 pt-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="">Support</h4>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <a href="/dashboard/support">
                                    <div class="box-gray text-center">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="icon mt-5"><i class="icon-mail"></i></div>
                                                <h5 class="pt-2">Send email</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        </div>

@endsection