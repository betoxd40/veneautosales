@extends('layouts.layoutMenu')

@section('content')

    <div id="banner-about-us" class="container-fluid"></div>

    <div id="about-us-sec" class="container-fluid mt-5">
        <div class="row pb-5">
            <div class="borde-col col-12 col-md-8 ">

                <h2 class="pl-4 pt-5">Our purpose</h2>
                <p class="p-4 ">To bring your car buying experience to a whole other level. We focus on simplicity, honesty, transparency and efficiency.</p>
                <h2 class="pl-4 pt-2">Who we are</h2>
                <p class="p-4">We are a revolutionary used car dealership started by two young entrepreneurs originally from Venezuela. We started our business strictly online in 2016, and opened our first location in Worcester, MA in 2017.</p>
                <h2 class="pl-4 pt-2">The Veneauto Sales and Services Difference </h2>
                <p class="p-4 mb-1 mb-md-5">Owning a car in the U.S. is a necessity, not a privilege. Therefore, we offer consulting services to everyone regardless of whether or not they are buying a car from us. We know how busy life is, so we take care of everything you need to get your vehicle on the road: financing, insurance, registration, inspection, and even delivery.</p>

            </div>
            <div class="col-md-4 text-center">
                <h2 class="text-center pt-2  pl-4 pt-4">Hours</h2>
                <h6 class="text-center pt-3 ">Monday 9:00AM-8:00PM</h6>
                <h6 class="text-center pt-3 ">Tuesday 9:00AM-8:00PM</h6>
                <h6 class="text-center pt-3 ">Wednesday 9:00AM-8:00PM</h6>
                <h6 class="text-center pt-3 ">Thursday 9:00AM-8:00PM</h6>
                <h6 class="text-center pt-3 ">Friday 9:00AM-8:00PM</h6>
                <h6 class="text-center pt-3 pb-5">Saturday 9:00AM-8:00PM.</h6>
                <a href="{{route('contact')}}" class="btn btn-contact">Contact us</a>
            </div>

        </div>
    </div>

@endsection

