@extends('layouts.layoutMenu')

@section('content')
    <div id="index">
        <div id="index-banner" class="carusel container-fluid ">

        </div>
        <!-- Contenido 4 columnas <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>-->

        <div id="filter" class="container-fluid pl-sm-0 pl-md-4 pt-4 pr-sm-0 pr-md-5 pb-2">
            <div class="row dropdowns mx-0 mx-sm-5 ">

                <div class="col-sm-12 col-md-3">
                    <select class="boton size-menu d-flex align-content-center py-2  mx-sm-0 mx-md-3 px-3 text-oswald" v-model="makes">
                        <option value=""><h3>Any Make</h3></option>
                        <option v-for="car in propList('name',cars)" :value="car.name" >@{{car.name}} [@{{car.cantidad}}]</option>
                    </select>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="row">
                        <select class="boton size-menu d-flex align-content-center py-2 mx-3 px-3 text-oswald" v-model="models">
                            <option value=""><h3>Any Model</h3></option>
                            <option v-for="car in propList('model',cars)" :value="car.model">@{{car.model}} [@{{car.cantidad}}]</option>
                        </select>

                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="row">
                        <select class="boton size-menu d-flex align-content-center py-2 mx-3 px-3 text-oswald" v-model="prices">
                            <option value=""><h3>Any Price</h3></option>
                            <option v-for="p in listPrecios" :value="p.sptos">@{{p.cptos}}</option>
                        </select>

                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="row">
                        <a :href="url" class="btn btn-primary-filter py-2 px-5 size-menu text-oswald  mt-2 mt-md-0">FIND MATCHES</a>
                    </div>
                </div>

            </div>

            <div class="row class pt-4 ml-0 ml-sm-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <a href="#"  class="text-yellow can-not down"><h5 class="text-oswald">Can not find your vehicle?</h5></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">

            <hr class="hr-black">

        </div>


        <div id="cars-show" class="container-fluid pt-5">

            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div v-for="grupo3 in groupedCar" class="carousel-item  col-12">{{-- primer grupo --}}
                                <div class="row justify-content-center">
                                    <carousel-tag v-for="car in grupo3" :car="car" :quick-view="quickView"></carousel-tag>
                                </div>
                            </div>{{-- fin primer grupo --}}

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fa fa-caret-left fa-5x fa-pull-right text-black" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fa fa-caret-right fa-5x text-black" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="cars-show-responsive" class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div v-for="grupo3 in groupedCarPrueba" class="carousel-item  col-12">{{-- primer grupo --}}
                                <div class="row justify-content-center">
                                    <carousel-tag-responsive v-for="car in grupo3" :car="car" :quick-view="quickView"></carousel-tag-responsive>
                                </div>
                            </div>{{-- fin primer grupo --}}

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                            <i class="fa fa-caret-left fa-5x fa-pull-right text-black" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                            <i class="fa fa-caret-right fa-5x text-black" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-3 pt-sm-5">
            <div class="row text-center">
                <div class="col-12">
                    <a href="/inventory" class="btn btn-primary"><h4 class="text-oswald">VIEW INVENTORY</h4></a>
                </div>
            </div>
        </div>

        <div id="schedule-appointment" class="container pb-5 pt-0 pt-sm-3 mb-5 ">
            <div class="row">
                <div class="col-12">
                    <h2 class=" pt-4 pt-sm-5 mt-2 display-4 text-center text-md-left">Schedule your appointment and test drive</h2>
                </div>
                <div class="col-12">
                    <p class="pt-2 text-center text-md-left">Did you see a car that seems too good to be true? Or maybe you’re interested in a special model, but not quite sure if it fits you; no need to worry about it, you can always schedule a free appointment and test drive any car you might love! No commitments, we promise!</p>
                </div>
                
                
            </div>
            <div class="row py-4">
                <div class="col-12 d-flex justify-content-end">
                    <a href="/schedule-test-drive" class="btn btn-primary"><h4 class="text-oswald">Shedule your appoitment!</h4></a>
                </div>
            </div>
        </div>

        <section id="services" class="container-fluid">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="display-4 text-yellow text-center text-md-left">SERVICES</h2>
                    </div>
                </div>
                <div class="row pt-sm-1 pt-md-5">
                    <div class="col-12 col-md-6">
                        <h4>Cars Upon Request</h4>
                        <p class="pt-2"> Are you looking for a specific car that is not in our inventory? Don’t Worry! If we don’t have it, we’ll find it for you!</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h4>Insurance</h4>
                        <p class="pt-2"> We work with a wide variety of insurance agencies that offer very competitive rates regardless of your immigration status.</p>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12 col-md-6">
                        <h4>Consulting</h4>
                        <p class="py-2"> Owning a vehicle is a necessary but yet very risky move. If something goes wrong with your car, it can affect you professionally, personally and/or financially. That’s why we offer consulting services for anyone in need of guidance through the car-buying process. Oh, and you don’t even have to buy a car from us to benefit from this service! </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <h4>Registration, Inspection and Delivery</h4>
                        <p class="py-2">We take care of the registration process, state inspection, and even delivering your car to you preferred location!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="specials" class="container pt-1 pt-md-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="display-4 text-yellow">SPECIALS</h2>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 text-center">
                    <p>
                        One of our main goals is making a difference. Therefore, we aim to become experts in many different branches, one of them being hybrid vehicles. In addition to being environmentally-friendly, hybrids can help your finances by saving you thousands of dollars a year on gas. Also, you are able to turn these vehicles into money-making machines by joining ride-sharing services.
                    </p>
                </div>
            </div>
            <div class="row pt-1 pt-md-5 pb-3 pb-md-0">
                <div class="col-12">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="img/specials.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </section>


        <section id="financing-warranty" class="container-fluid pt-0 mt-1 pt-sm-2 mt-sm-2 pt-md-5 mt-md-5">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2 class="text-right display-4 text-yellow">FINANCING</h2>
                    <hr>
                    <p class="text-right pt-4">No credit? Don’t Worry! We offer financing through a wide variety of banks that will approve everyone and offer very competitive rates. We will make your financing process as transparent and simple as possible, offering you a lot of options and affordable monthly payments.</p>
                </div>
                <div class="col-12 col-sm-6 text-left pl-0 pl-sm-5">
                    <img src="img/financing.png" alt="" class="img-financing-warranty-x">
                </div>

            </div>
            <div class="row my-5">
                <div class="col-12 col-sm-6 text-right pr-5">
                    <img src="img/warranty.png" alt="" class="img-financing-warranty-x">
                </div>
                <div class="col-12 col-sm-6">
                    <h2 class="text-left display-4 text-yellow">WARRANTY</h2>
                    <hr>
                    <p class="text-left pt-4">One of our main concerns is customer satisfaction. Therefore, all our vehicles are guaranteed to pass state inspection and we offer a 30-day warranty on engine and transmission. We also offer extended warranty packages that vary depending on the vehicle’s mileage/year.</p>
                </div>


            </div>
        </section>

        <section id="cars-upon-request-2" class="container-fluid">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-12 col-md-7 text-center text-md-right">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-yellow pt-1 pt-sm-5 mt-0 mt-md-5 pr-1 pr-md-5">FIND THE CAR OF YOUR DREAMS!</h2>
                            <p class="text-white pr-1 pr-md-5">In order to excel in customer satisfaction, we can’t just limit ourselves to what we already have in stock. We need to be able to find exactly what our client wants. That’s why we set up a special team to track and find perfect matches for you, so just tells us what you want and we’ll find it as soon as possible.</p>
                        </div>
                    </div>
                    <form class="row pr-0 pr-sm-5" method="POST" v-on:submit.prevent="sendEmailCars">
                        <div class="col-12 col-sm-6 mt-3">
                            <div class="row">
                        <div class="col-12">
                            <h4 class="text-center text-white text-oswald">Contact info</h4>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <input type="name" class="form-control" id="name2" v-model="name2" placeholder="Name..." required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="cellphone" class="form-control" id="cellphone2" v-model="cellphone2" placeholder="Cellphone..." required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email2" v-model="email2" placeholder="Email..." required>
                            </div>
                        </div>
                        <div class="col-12 button-on">
                            <button type="submit" class="btn btn-primary text-oswald text-white cursor-pointer">SEND</button>
                        </div>
                        <div class="col-12">
                            <div id="mensaje-email"></div>
                        </div>
                    </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-1 mt-sm-3">
                            <div class="row">
                        <div class="col-12">
                            <h4 class="text-center text-white text-oswald">Vehicle Info</h4>
                        </div>
                        <div class="col-12 mt-1 mt-sm-3">
                            <div class="form-group">
                                <input type="make" class="form-control" id="make2" v-model="make2" placeholder="Make..." required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="model" class="form-control" id="model2" v-model="model2" placeholder="Model..." required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <select class="form-control" id="color2" v-model="color2"  required>
                                    <option disabled value="">Choose a color...</option>
                                    <option>Any</option>
                                    <option>White</option>
                                    <option>Black</option>
                                    <option>Red</option>
                                    <option>Yellow</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mt-1 mt-sm-4">
                            <label class="pr-3 text-white">Year</label>
                            <input id="year2" type="text" class="span2" value="" data-slider-min="1988" data-slider-max="2018" data-slider-step="1" data-slider-value="[1988,2018]" required v-model="year2">
                        </div>
                        <div class="col-12 mt-1 mt-sm-4">
                            <label class="pr-3 text-white">Mileage</label>
                            <input id="mileage2" type="text" class="span2" value="" data-slider-min="100" data-slider-max="500000" data-slider-step="1000" data-slider-value="[100,100]" required v-model="mileage2">
                        </div>
                        <div class="col-12 mt-1 mt-sm-4">
                            <label class="pr-3 text-white">Budget</label>
                            <input id="budget2" type="text" class="span2" value="" data-slider-min="100" data-slider-max="500000" data-slider-step="1000" data-slider-value="[100,100]" required v-model="budget2">
                        </div>
                        <div class="col-12 button-invisible pt-2">
                            <button type="submit" class="btn btn-primary text-oswald text-white cursor-pointer">SEND</button>
                        </div>
                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="wrapper container-fluid">
            <div id="contact"></div>
            <div id="over_map" class="col-12 col-md-4">

                <h2 class="text-yellow text-center py-2 py-sm-5">CONTACT US!</h2>
                <form method="POST" v-on:submit.prevent="sendEmailContact">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" id="name" v-model="name" placeholder="Name..." required>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="form-control" id="cellphone" v-model="cellphone" placeholder="Cellphone..." required>
                    </div>
                    <div class="form-group col-12">
                        <input type="email" class="form-control" id="email" v-model="email" placeholder="Email..." required>
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control" id="message" v-model="message" rows="5" placeholder="Message..." required></textarea>
                    </div>
                    <div class="form-group col-12 pb-3 text-center">
                        <button type="submit" class="btn btn-secundary py-2 px-5 cursor-pointer">SEND</button>
                    </div>
                    <div class="col-12">
                        <div id="mensaje-email"></div>
                    </div>
                </form>
            </div>
        </div>

        @include('inventoryQuickView')
    <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="img/promo.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="/contact" type="button" class="btn btn-primary text-center">Contact</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>





    <script>
        $(document).ready(function() {
        $(".down").click(function() {
             $('html, body').animate({
                 scrollTop: $("#cars-upon-request-2").offset().top
             }, 700);
         });
            //setTimeout(function(){$("#exampleModalCenter").modal("show");},5000);
            //var element_position = $('#services').offset().top;
      });
    </script>

    <script>


        Vue.component('carousel-tag', {
            props: [ 'car','quickView'],
            template: '<div class=" col-12 col-sm-8 col-md-3 mt-2 mt-md-0"><div class="card-modific"><div class="card-body"><div class="row"><div class="col-12"><p class="card-text"><b>Make:</b>&nbsp; @{{ car.name }}</p></div></div><div class="row"><div class="col-12"><p class="card-text"><b>Model:</b>&nbsp;</b>@{{ car.model }}</p></div></div><div class="row"><div class="col-12"><p class="card-text"><b>Price:&nbsp;</b> $ @{{ car.price.toLocaleString() }}</p></p></div></div></div><div class="container-image"><div class="overlay"><a data-toggle="modal" @click="quickView(car)"><img :src="car.mainImg" class="image card-img-bottom" width="350px" height="220px"><div class="middle"><div class="text"><i class="fa fa-search fa-1x text-center text-white pr-2"></i>Quick View</div></div></a></div></div></div></div>',
            mounted: function() {
                $('#carouselExampleControls').find('.carousel-item').first().addClass('active');
            }
        });
        Vue.component('carousel-tag-responsive', {
            props: [ 'car','quickView'],
            template: '<div class=" col-12 col-sm-8 col-md-3 mt-2 mt-md-0"><div class="card-modific"><div class="card-body"><div class="row"><div class="col-12"><p class="card-text"><b>Make:</b>&nbsp; @{{ car.name }}</p></div></div><div class="row"><div class="col-12"><p class="card-text"><b>Model:</b>&nbsp;</b>@{{ car.model }}</p></div></div><div class="row"><div class="col-12"><p class="card-text"><b>Price:&nbsp;</b> $ @{{ car.price.toLocaleString() }}</p></p></div></div></div><div class="container-image"><div class="overlay"><a data-toggle="modal" @click="quickView(car)"><img :src="car.mainImg" class="image card-img-bottom" width="350px" height="220px"><div class="middle"><div class="text"><i class="fa fa-search fa-1x text-center text-white pr-2"></i>Quick View</div></div></a></div></div></div></div>',
            mounted: function() {
                $('#carouselExampleControls2').find('.carousel-item').first().addClass('active');
            }
        });




        var vm3 = new Vue({
            el: '#index',
            created: function() {
                this.getCars();
                this.setPrecios(this.cars);
            },
            mounted: function () {
                this.$nextTick(function () {
                    $("#demo").ezPlus({
                        gallery: 'secundary',
                        cursor: 'pointer',
                        galleryActiveClass: "foco",
                        gallerySelector: true,
                        loadingIcon: '/spinner.gif',
                        zIndex:1999
                    });

                });

            },
            data: {
                 //para slider
                act:0,
                offset:0,
                //fin slider
                models:"",
                makes:"",
                prices:"",
                listP:[],
                cars: [],
                fillCar: {'id': '', 'code': '' , 'name': '', 'type': '','model': '', 'trim': '','body': '', 'exterior': '','interior': '', 'doors': '','vin': '', 'mileage': '',
                    'engine': '', 'fuel': '','drive': '', 'mpg': '','year': '', 'price': '','comments': '', 'imgMain': '','secondaryImg': [],'auxMainImg': '','auxSecundaryImg':[], 'newImg': [], 'actuallyImg': '/spinner.gif'},
                fillSecondary: [],
                name: '',
                cellphone: '',
                email: '',
                message: '',
                name2: '',
                cellphone2: '',
                email2: '',
                make2: '',
                model2: '',
                color2: '',
                year2: '',
                mileage2: '',
                budget2: '',
                date:'',
                name: '',
                lastName: '',
                cellphone: '',
                email: '',
                carsCode: ''

            },
            methods: {
                sendEmail:function (code) {
                    this.date = datePicker.datepicker('getDate');
                    var date = new Date(datePicker.datepicker('getDate'));
                    var url = 'index';
                    axios.post(url, {
                        name: this.name,
                        lastName: this.lastName,
                        cellphone: this.cellphone,
                        email: this.email,
                        date: (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear(),
                        code: code,
                        type:'schedule'
                    }).then(response => {
                        this.name = '';
                    this.lastName ='';
                    this.cellphone = '';
                    this.email = '';
                    this.date = '';
                    $("input").val('');
                    swal("Thank you for contacting Veneautosales.", "Soon we will contact you as soon as possible.", "success");
                }).catch(error => {
                        document.getElementById('mensaje-email').innerHTML = '<p>ERROR</p>';
                });
                },
                sendEmailContact: function() {
                    var url = 'index';
                    axios.post(url, {
                        name: this.name,
                        cellphone: this.cellphone,
                        email: this.email,
                        message: this.message,
                        type:'contact'
                    }).then(response => {
                        this.name = '';
                        this.cellphone ='';
                        this.email = '';
                        this.message = '';
                        $("input").val('');
                        swal("Thank you for contacting Veneautosales.", "Soon we will contact you as soon as possible.", "success");
                }).catch(error => {
                        document.getElementById('mensaje-email').innerHTML = '<p>ERROR</p>';
                });
                },
                sendEmailCars: function() {
                    var url = 'index';
                    axios.post(url, {
                        name2: this.name2,
                        cellphone2: this.cellphone2,
                        email2: this.email2,
                        make2: this.make2,
                        model2: this.model2,
                        color2: this.color2,
                        year2: year2.bootstrapSlider('getValue'),
                        mileage2: mileage2.bootstrapSlider('getValue'),
                        budget2: budget2.bootstrapSlider('getValue'),
                        type:'car-vehicle'
                    }).then(response => {
                        this.name2 = '';
                        this.cellphone2 = '';
                        this.email2 = '';
                        this.make2 = '';
                        this.model2 = '';
                        this.color2 = '';
                        $("input").val('');
                        swal("Thank you for contacting Veneautosales.", "Soon we will contact you as soon as possible.", "success");
                }).catch(error => {
                        document.getElementById('mensaje-email').innerHTML = '<p>ERROR</p>';
                });

                },
                getCars: function() {
                    var url = 'index';
                    axios.get(url).then(response => {
                        this.cars = response.data;
                    this.listP=this.setPrecios(this.cars);

                });
                },
                filterPrice: function(carros,filt){
                    if(filt != '' ){
                        var lim=filt.split(' - ');
                        lim[0]=parseInt(lim[0]);
                        lim[1]=parseInt(lim[1]);
                        carros=carros.filter(function(cari){
                            return cari.price>=this[0] && cari.price<=this[1];
                        },lim);
                    }
                    return carros;
                },
                filterProp: function(carros,filt,prop ){
                    if(filt != '' ){
                        carros=carros.filter(function(cari){
                            return this==cari[prop];
                        },filt);
                    }
                    return carros;
                },
                propList: function(prop,cars){
                    var rep=[];
                    var result=[];
                    var x=[];


                    rep=this.filterProp(cars,this.makes,"name");// Filtrar Makes
                    rep=this.filterProp(rep,this.models,"model");// Filtrar models
                    rep=this.filterPrice(rep,this.prices); // Filtrar prices


                    for(var i=0;i<rep.length; i++){
                        x.push(rep[i][prop]);
                    }
                    var sinRep= x.filter( function onlyUnique(value, index, self){ return self.indexOf(value) === index;} );

                    for(var i=0; i<sinRep.length; i++){
                        var cont=0;
                        for(var j=0; j<x.length; j++){
                            if(sinRep[i]==x[j]){
                                cont++;
                            }
                        }
                        var json={};
                        json[prop]=sinRep[i];
                        json['cantidad']=cont;
                        result.push(json);
                    }
                    return result;

                },
                techo: function(n){
                    var nd;
                    n=parseInt(n);
                    n=n.toString();
                    nd=n.length;
                    n=parseInt(n);
                    if((n/Math.pow(10, (nd-1)) )>5){
                        return Math.pow(10, nd);
                    }else{
                        return 5*Math.pow(10, (nd-1));
                    }

                },
                setPrecios: function(c){
                    var listPR=[],listP=[],s;
                    var pre=[0];

                    for(var i=0; i<c.length; i++){
                        listPR.push(c[i].price);
                    }
                    listP=listPR.filter( function onlyUnique(value, index, self){ return self.indexOf(value) === index;} );
                    listP=listP.sort(function(a, b){return a - b;});

                    s=0;
                    for(var i=0; i<listP.length; i++){
                        if(s<listP[i]){
                            s=this.techo(listP[i]);
                            pre.push(s);
                        }
                    }
                    return pre;
                },
                quickView: function(car) {
                    this.fillCar.id= car.id;
                    this.fillCar.code= car.code;
                    this.fillCar.name= car.name;
                    this.fillCar.type= car.type;
                    this.fillCar.model= car.model;
                    this.fillCar.trim= car.trim;
                    this.fillCar.body= car.body;
                    this.fillCar.exterior= car.exterior;
                    this.fillCar.interior= car.interior;
                    this.fillCar.doors= car.doors;
                    this.fillCar.vin= car.vin;
                    this.fillCar.mileage= car.mileage;
                    this.fillCar.engine= car.engine;
                    this.fillCar.fuel= car.fuel;
                    this.fillCar.drive= car.drive;
                    this.fillCar.mpg= car.mpg;
                    this.fillCar.year= car.year;
                    this.fillCar.price= car.price;
                    this.fillCar.comments=car.comments;
                    this.fillCar.mainImg = car.mainImg;
                    this.fillCar.actuallyImg = car.mainImg;
                    this.fillCar.secondaryImg = (car.secondaryImg=="") ? [] : car.secondaryImg.split('%%%%');
                    this.fillSecondary = this.fillCar.secondaryImg;
                    this.fillSecondary.unshift(car.mainImg);

                    $('#quickViewModal').modal('show');

                    $("#secundary a").removeClass("foco");
                    
                    this.act=0;
                    this.offset=0;
                    var ez = $("#demo").data('ezPlus');
                    ez.swaptheimage(this.fillSecondary[0], this.fillSecondary[0]);

                },
                changeMainImage: function(img){
                    this.act=this.fillSecondary.indexOf(img);
                },
                next:function(e){
                        
                 var ws,wi,ant,limIS, limDS,limIF,limDF,error,n;
                    n=this.fillSecondary.length;
                    wi=wi=$("#secundary a").outerWidth();
                    ws=$("#slide").width();
                    ant=this.act;                        

                    if(e.target.getAttribute("id")=="der"){
                        this.act++;
                        if(this.act==n){this.act=0;}

                    }else{
                         this.act--;
                         if(this.act<0){this.act=n-1;}
                    }
                               
                    $("#secundary .foco").removeClass("foco");
                    $("#secundary a img[src='"+this.fillSecondary[this.act]+"']").parent().addClass("foco");
                    var ez = $("#demo").data('ezPlus');
                    ez.swaptheimage(this.fillSecondary[this.act], this.fillSecondary[this.act]);
                    
                    //Movimiento del slider
                    limIS=$("#slide").offset().left;
                    limDS=limIS+ws;
                    limIF=$(".foco").offset().left;
                    limDF=limIF+wi;


                    if(n*wi>ws){ //la cantidad de imagenes debe sobrepasar las dimensiones del slide
                        if(limDS<limDF){
                            error=parseFloat(limDF-limDS);       
                            if(this.act==(n-1)){
                                if(ant==0){
                                    this.offset=-1*(wi*n-ws);//341
                                }else{
                                    this.offset=this.offset-error
                                }
                                            
                            }else{
                                this.offset=this.offset-wi-error;
                            }
                            $("#secundary").css("transform","translateX("+this.offset+"px)");                
                                    
                        }else if(limIS>limIF){
                            error=parseFloat(limIS-limIF);
                                    
                            if(this.act==0){
                                if(ant==(n-1)){
                                    this.offset=0;
                                }else{
                                    this.offset=this.offset+error;
                                }                       
                                                            
                            }else{
                                this.offset=this.offset+wi+error;
                            }               
                            $("#secundary").css("transform","translateX("+this.offset+"px)");
            
                        }
                    }

                }
            },
            computed:{
                url:function(){
                    var u="inventory";
                    if(this.makes==''){
                        u=u+"/all";
                    }else{
                        u=u+"/"+this.makes;
                    }
                    if(this.models==''){
                        u=u+"/all";
                    }else{
                        u=u+"/"+this.models;
                    }
                    if(this.prices==''){
                        u=u+"/all";
                    }else{
                        u=u+"/"+this.prices;
                    }


                    return u;
                },
                listPrecios: function(){
                    var preciosCarros=[];
                    var rangoP=[];
                    for(var i=0; i<this.cars.length; i++){
                        if(this.models=='' && this.makes==''){
                            preciosCarros.push(this.cars[i].price);
                        }else if(this.models!='' && this.makes==''){
                            if(this.models==this.cars[i].model){
                                preciosCarros.push(this.cars[i].price);
                            }

                        }else if(this.models=='' && this.makes!=''){
                            if(this.makes==this.cars[i].name){
                                preciosCarros.push(this.cars[i].price);
                            }

                        }else{
                            if(this.models==this.cars[i].model && this.makes==this.cars[i].name){
                                preciosCarros.push(this.cars[i].price);
                            }

                        }
                    }

                    preciosCarros=preciosCarros.filter( function onlyUnique(value, index, self){ return self.indexOf(value) === index;} ).sort(function(a, b){return a - b;});

                    var j=0;
                    for(var i=0; i<preciosCarros.length && this.listP[j+1]!=undefined; i++){
                        if(preciosCarros[i]>this.listP[j] && preciosCarros[i]<=this.listP[j+1]){
                            var json={cptos:"",sptos:""};
                            if(this.listP[j+2]==undefined){
                                json.sptos= '$' + this.listP[j]+' - $'+(this.listP[j+1]);
                                json.cptos='$' + this.listP[j].toLocaleString()+' - $'+(this.listP[j+1].toLocaleString());
                            }else{
                               json.sptos='$' + this.listP[j]+' - $'+(this.listP[j+1]-1);
                                json.cptos='$' + this.listP[j].toLocaleString()+' - $'+(this.listP[j+1]-1).toLocaleString();
                            }
                            rangoP.push(json);
                            j++;

                        }else if(preciosCarros[i]>this.listP[j+1]){
                            j++;
                            i--;
                        }
                    }

                    return rangoP;
                },
                groupedImages: function() {
                    return _.chunk(this.fillSecondary, 6);
                    // returns a nested array:
                    // [[article, article, article], [article, article, article], ...]
                },
                groupedCar:function(){
                    var aux=_.chunk(this.cars.reverse(),3);
                    var carrosNuevos=[];
                    for(var i=0; i<aux.length && aux[i].length==3 && i<5; i++){
                        carrosNuevos.push(aux[i]);
                    }
                    return carrosNuevos;

                },
                groupedCarPrueba:function(){
                    var aux=_.chunk(this.cars.reverse(),1);
                    var carrosNuevos=[];
                    for(var i=0; i<aux.length && aux[i].length==1 && i<5; i++){
                        carrosNuevos.push(aux[i]);
                    }
                    return carrosNuevos;

                },
                fullViewsUrl:function(){
                    var make=this.fillCar.name.replace(" ", "-");
                    var model=this.fillCar.model.replace(" ", "-");
                    return this.fillCar.year+"-"+make+"-"+model+"-"+this.fillCar.id;
                },
                urlForFacebook:function(){
                    var make=this.fillCar.name.replace(" ", "-");
                    var model=this.fillCar.model.replace(" ", "-");
                    return "http://www.facebook.com/sharer.php?u=http://veneautosales.com/vehicle-information/" + this.fillCar.year+"-"+make+"-"+model+"-"+this.fillCar.id;

                },
                urlForTwitter:function(){
                    var make=this.fillCar.name.replace(" ", "-");
                    var model=this.fillCar.model.replace(" ", "-");
                    return "https://twitter.com/share?url=http://www.veneautosales.com/vehicle-information/" + this.fillCar.year+"-"+make+"-"+model+"-"+this.fillCar.id;

                }
            }
        });

        var datePicker = $('.datepicker').datepicker({
            format: 'mm/dd/yyyy'
        });

        var year2 = $("#year2").bootstrapSlider({});
        var mileage2 = $("#mileage2").bootstrapSlider({});
        var budget2 = $("#budget2").bootstrapSlider({});

        function initMap() {
            var uluru = {lat: 42.22861049999999, lng: -71.7575885};
            var map = new google.maps.Map(document.getElementById('contact'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });

        }

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVxjMn-hci5Wf5FhePcDBNgm96-eYBzY &callback=initMap">
    </script>

@endsection

