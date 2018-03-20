@extends('layouts.layoutMenu')

@section('content')

    <div id="show-car" class="container-fluid no-padding">

        <section id="info-car" class=" container-fluid pt-5">
            <div class="row pt-0 pt-md-5 mt-4">
                <div class=" col-1"></div>
                <div class="col-1 text-right">
                    <i class="fa fa-car fa-3x text-black pt-5"></i>
                </div>
                <div class="col-10 pt-5 pb-3">
                    <h2 class="text-blue">@{{ carYear }} @{{ carName }} @{{ carModel }}</h2>
                </div>
            </div>
        </section>

        <section id="showed-car" class="container-fluid pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div id="gallery" >
                            <div id="main" class="row text-center">
                                <div class="col-1 pt-5 pt-lg-5 mt-lg-4 no-padding">
                                    <i id="izq" class="fa fa-arrow-circle-left fa-2x" aria-hidden="true" @click="next"></i>
                                </div>
                                <div class="col-10">
                                        <img id="demo" :src="mainImg"  :data-zoom-image="mainImg" class="img-fluid"/>
                                </div>
                                <div class="col-1 pt-5 pt-lg-5 mt-lg-4 no-padding">
                                    <i id="der" class="fa fa-arrow-circle-right fa-2x" aria-hidden="true" @click="next"></i>
                                </div>
                            </div>

                            <div id="slide" class="row">

                                    <div class="col-1 ml-3"></div>
                                    <div class="col-10">
                                        <div id="secundary">
                                            <a href="#" v-for="img in secondaryImg" :data-image="img" :data-zoom-image="img"  @click="changeMainImage(img)">
                                                <img :src="img" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>


                            </div>
                        </div>

                        <div class="row pt-4">
                            <div class="col-12">
                                <h2 class="text-blue">Full Review</h2>
                            </div>
                            <div class="col-12">
                                <hr class="hr-black">
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <ul>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Body: </strong>@{{ cars.body }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Trim: </strong>@{{ cars.trim }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Exterior: </strong>@{{ cars.exterior }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Interior: </strong>@{{ cars.interior }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Fuel: </strong>@{{ cars.fuel }}</h6></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <ul>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Doors: </strong>@{{ cars.doors }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Mileage: </strong>@{{ mileageFormat }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>MPG: </strong>@{{ cars.mpg }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Engine: </strong>@{{ cars .engine }}</h6></li>
                                            <li class="py-1"><h6 class="text-oswald"><strong>Drive: </strong>@{{ cars.drive }}</h6></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4 pb-3">
                            <div class="col-12">
                                <h2 class="text-blue ">Description</h2>
                            </div>
                            <div class="col-12">
                                <hr class="hr-black">
                            </div>
                            <div class="col-12">
                                @{{ cars.comments }}
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="side-bar-car col-12 col-md-4">
                        <div class="top-side-bar ">
                            <div class="row pt-3 pl-3">
                                <div class="col-12">
                                    <h4 class="text-oswald text-white">Detailed Pricing</h4>
                                </div>
                            </div>
                            <div class="row pt-1 pb-5">
                                <div class="col-6">
                                    <div class="hr-yellow"></div>
                                </div>
                            </div>
                            <div class="row pl-3 pb-5">
                                <div class="col-6">
                                    <h6 class="text-oswald text-white">Asking Price</h6>
                                </div>
                                <div class="col-6">
                                    <h3 class="text-oswald text-white">$@{{ priceFormat }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="hr-white"></div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-11">
                                    <a data-toggle="modal" data-target=".bd-example-modal-lg"><h4 class="text-oswald text-yellow pull-right pointer">Schedule your appointment</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="bot-side-bar mt-3 px-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-oswald text-blue py-2">Are you interested?</h4>
                                    <p class="text-black">Maybe you’ll like to schedule a test drive to reinforce your interest. If you feel quite sure, you can always call us and we’ll give you further detail about how to proceed and what financing options we offer.</p>
                                </div>
                                <div class="row pl-3 pt-4">
                                    <div class="col-12 d-flex flex-row ">
                                        <i class="fa fa-phone fa-1x text-black"></i>
                                        <p class="pl-2"><strong>Call Us</strong></p>
                                    </div>
                                    <div class="col-12">
                                        <p>774-330- 9044</p>
                                    </div>
                                    <div class="col-12">
                                        <p>774-239- 5286</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bot-side-bar mt-3 px-4">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-oswald text-blue py-2">Share This Vehicle </h4>
                                </div>
                                <div class="row pl-3 pt-2">
                                    <div class="col-2">
                                        <a :href="urlForFacebook" target="_blank">
                                            <i class="fa fa-facebook fa-2x pr-3  text-black"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a :href="urlForTwitter" target="_blank">
                                            <i class="fa fa-twitter fa-2x pr-3 text-black"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-4">
                                <h2 class="text-blue">New Arrivals</h2>
                            </div>
                            <div class="col-12">
                                <hr class="hr-black">
                            </div>
                            <div class="col-12 pb-5">
                                <div v-for="arrival in newArrivals" class="row">
                                    <div class="col-12 hoverNewArrivals">
                                        <a :href="arrivalUrl(arrival)" >
                                            <div class="row">
                                                <div class="col-12 col-md-7">
                                                    <img :src="arrival.mainImg" class="newArrivals py-2">
                                                </div>
                                                <div class="col-12 col-md-5 pt-2">
                                                    <h6 class="text-oswald text-blue">@{{ arrival.year }} @{{ arrival.name }} @{{ arrival.model }}</h6>
                                                    <h5 class="text-oswald text-yellow">$@{{ arrival.price.toLocaleString() }}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                    <div class="row py-2">
                        <div class="col-12">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close pr-4"><span aria-hidden="true">×</span></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <h2>Schedule your appointment</h2>
                    <p>Please fill in your desired test date and your contact info. We’ll call/email you as soon as possible to give you further details about your appointment. And don’t worry about your information, it’ll be safe and we’ll share it with no one.</p>

                    <form method="POST" v-on:submit.prevent="sendEmail">
                        <div class="row pt-4">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="name" class="form-control" id="name" placeholder="Name..." v-model="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="name" class="form-control" id="name" placeholder="Last name..." v-model="lastName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="name" class="form-control" id="name" placeholder="Cellphone..." v-model="cellphone">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="name" class="form-control" id="name" placeholder="Email..." v-model="email">
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row pt-2">
                            <div class="col-12">
                                <h5 class="text-oswald pb-2">Schedule your Date</h5>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control datepicker" id="date" placeholder="Select value" v-model="date">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary text-oswald">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <script>

        var id = {{ $data->id }};

        var vm5 = new Vue({
            el: '#show-car',
            data: {
                //para slider
                act:0,
                offset:0,
                //fin slider
                id: id,
                cars: [],
                carName: '',
                carModel: '',
                carYear: 0,
                mileageFormat:"",
                priceFormat:"",
                secondaryImg: [],
                mainImg:"/spinner.gif",//"/img/car-icon.png",
                carsCode: '',
                newArrivals: [],
                date:'',
                name: '',
                lastName: '',
                cellphone: '',
                email: '',
                carsCode: ''
            },
            created: function() {
                this.getCars();
                this.getNewArrivals();
            },
            mounted:function(){
                this.$nextTick(function(){
                     $("#demo").ezPlus({
                        gallery: 'secundary',
                        cursor: 'pointer',
                        galleryActiveClass: "foco",
                        gallerySelector: true,
                        loadingIcon: '/spinner.gif',
                        zIndex:1999,
                    });
                });
            },
            methods:{
                 arrivalUrl:function(car){
                    var make=car.name.replace(" ", "-");
                    var model=car.model.replace(" ", "-");

                    return car.year+"-"+make+"-"+model+"-"+car.id;

                },
                sendEmail: function () {
                    this.date = datePicker.datepicker('getDate');
                    var date = new Date(datePicker.datepicker('getDate'));

                    var url = 'vehicleRoute/route';
                    axios.post(url, {
                        name: this.name,
                        lastName: this.lastName,
                        cellphone: this.cellphone,
                        email: this.email,
                        date: (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear(),
                        code: this.carCode
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
                getNewArrivals: function(){
                    var url = 'vehicleRoute/route';
                    axios.get(url).then(response => {
                        this.newArrivals = response.data
                    });
                },
                getCars: function() {
                    var url = 'vehicleRoute/route/'+this.id;
                    var ez;
                    axios.get(url).then(response => {
                        this.cars = response.data;
                        this.carName = response.data.name;
                        this.carModel = response.data.model;
                        this.carYear = response.data.year;
                        this.carCode = response.data.code;
                        this.secondaryImg = (response.data.secondaryImg=="") ? [] : response.data.secondaryImg.split('%%%%');
                        this.mainImg=response.data.mainImg;
                        this.secondaryImg.unshift(response.data.mainImg);

                        this.mileageFormat=response.data.mileage.toLocaleString();
                        this.priceFormat=response.data.price.toLocaleString();

                        ez = $("#demo").data('ezPlus');
                        ez.swaptheimage(this.mainImg,this.mainImg);

                    });
                },
                changeMainImage: function(img){

                    this.act=this.secondaryImg.indexOf(img);
                },
                next:function(e){

                    var ws,wi,ant,limIS, limDS,limIF,limDF,error,n;
                    n=this.secondaryImg.length;
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
                    $("#secundary a img[src='"+this.secondaryImg[this.act]+"']").parent().addClass("foco");
                    var ez = $("#demo").data('ezPlus');
                    ez.swaptheimage(this.secondaryImg[this.act], this.secondaryImg[this.act]);

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
            computed: {
                groupedImages: function () {
                    return _.chunk(this.secondaryImg, 6)
                    // returns a nested array:
                    // [[article, article, article], [article, article, article], ...]
                },
                urlForFacebook:function(){
                    var make=this.carName.replace(" ", "-");
                    var model=this.carModel.replace(" ", "-");
                    return "http://www.facebook.com/sharer.php?u=http://veneautosales.com/vehicle-information/" + this.cars.year+"-"+make+"-"+model+"-"+this.cars.id;

                },
                urlForTwitter:function(){
                    var make=this.carName.replace(" ", "-");
                    var model=this.carModel.replace(" ", "-");
                    return "https://twitter.com/share?url=http://www.veneautosales.com/vehicle-information/" + this.cars.year+"-"+make+"-"+model+"-"+this.cars.id;

                }
            }

        });

    </script>
@endsection


