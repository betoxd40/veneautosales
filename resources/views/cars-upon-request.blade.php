@extends('layouts.layoutMenu')

@section('content')

    <section id="encabezado" class="container-fluid pt-5">
        <div class="row pt-5">
            <div class="col-12 pt-1 pt-md-5 mt-5 text-center">
                <h2>Cars Upon Request</h2>
            </div>
        </div>
        <div class="row pt-3 justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit enim, ornare vitae odio eu, sagittis mollis magna. Etiam magna nisl, hendrerit nec euismod aliquet, condimentum eget erat.
                    Mauris auctor eros non sapien congue interdum. Sed sodales quis sapien tincidunt pellentesque.
                </p>
            </div>
        </div>
    </section>
    <section id="formulario" class="container pt-5 mt-3 pb-5">
            <form class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Contact info</h2>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="form-group">
                                <input type="name" class="form-control" id="name" v-model="name" placeholder="Name...">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="cellphone" class="form-control" id="cellphone" v-model="cellphone" placeholder="Cellphone...">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" v-model="email" placeholder="Email...">
                            </div>
                        </div>
                        <div class="col-12 button-on">
                            <button type="submit" class="btn btn-primary">SEND</button>
                        </div>
                        <div class="col-12">
                            <div id="mensaje-email"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Vehicle Info</h2>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="form-group">
                                <input type="make" class="form-control" id="make" v-model="make" placeholder="Make...">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="model" class="form-control" id="model" v-model="model" placeholder="Model...">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <select class="form-control" v-model="color" >
                                    <option disabled value="">Choose a color...</option>
                                    <option>Any</option>
                                    <option>White</option>
                                    <option>Black</option>
                                    <option>Red</option>
                                    <option>Yellow</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <label class="pr-3">Year</label>
                            <input id="ex1" type="text" class="span2" value="" data-slider-min="1988" data-slider-max="2018" data-slider-step="1" data-slider-value="[1988,2018]"/>
                        </div>
                        <div class="col-12 mt-4">
                            <label class="pr-3">Mileage</label>
                            <input id="ex2" type="text" class="span2" value="" data-slider-min="100" data-slider-max="500000" data-slider-step="1000" data-slider-value="[100,100]"/>
                        </div>
                        <div class="col-12 mt-4">
                            <label class="pr-3">Budget</label>
                            <input id="ex3" type="text" class="span2" value="" data-slider-min="100" data-slider-max="500000" data-slider-step="1000" data-slider-value="[100,100]"/>
                        </div>
                        <div class="col-12 button-invisible pt-2">
                            <button type="submit" class="btn btn-primary">SEND</button>
                        </div>
                    </div>

                </div>
            </form>

    </section>
    <script>
        new Vue({
            el: '#formulario',
            data: {
                name: '',
                cellphone: '',
                email: '',
                make: '',
                model: '',
                color: '',
                year: '',
                mileage: '',
                budget: ''
            },
            methods: {

            }
        });
        $("#ex1").bootstrapSlider({});
        $("#ex2").bootstrapSlider({});
        $("#ex3").bootstrapSlider({});
    </script>
@endsection