@extends('layouts.layoutMenu')

<?php
    if(!isset($makes)){
        $makes='all';
    }
    if (!isset($models)) {
        $models='all';
    }
    if (!isset($prices)) {
        $prices='all';
    }
?>

@section('content')

    <div id="inventory">
        <section id="banner-inventory" class="container-fluid pt-1 pt-5 pb-4">
            <div class="container">
                <div class="row pt-md-4 pt-lg-2">
                    <div class="col-12">
                        <h2 class="display-4 text-yellow">INVENTORY</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12  d-flex flex-row">
                        <a href="/" class="text-black font-weight-bold ">Home </a><p> / Inventory</p>
                    </div>
                    <div class="col-12 col-md-5  col-lg-10 d-flex justify-content-start justify-content-lg-end pt-2 pt-lg-0">
                        <h4 class="col-lg-4 no-padding">@{{nCar}} Vehicles matching</h4>
                    </div>
                    <div class="col-12 col-md-2 pt-2 pt-lg-0">
                        <div class="dropdown">
                            <button class="btn btn-search dropdown-toggle px-5 pointer" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @{{sort}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" @click='sortProp("price","Price (low to high)")'>Price (low to high)</a>
                                <a class="dropdown-item" href="#" @click='rsortProp("price","Price (high to low)")'>Price (high to low)</a>
                                <a class="dropdown-item" href="#" @click='sortProp("year","Year (low to high)")'>Year (low to high)</a>
                                <a class="dropdown-item" href="#" @click='rsortProp("year","Year (high to low)")'>Year (high to low)</a>
                                <a class="dropdown-item" href="#" @click='sortProp("mileage","Mileage (low to high)")'>Mileage (low to high)</a>
                                <a class="dropdown-item" href="#" @click='rsortProp("mileage","Mileage (high to low)")'>Mileage (high to low)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="show-cars" class="container-fluid d-flex flex-row">
            <div class="side-bar mb-5">
                <div class="row pl-4 pt-5 pb-3">
                    <h3 class="text-yellow">FILTER</h3>
                </div>
                <div class="side-bar-wrapper pl-4 pt-4">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="pb-3 text-oswald">Keyword</h5>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Search..." v-model="search">
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex flex-row">
                            <h5 class="text-oswald pb-2">Year: </h5>
                            <input class=" pl-3 input-range text-yellow" type="text" id="amount" readonly >
                        </div>
                        <div class="col-10">
                            <div id="slider-range" ></div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex flex-row">
                            <h5 class="text-oswald pb-2">Price: </h5>
                            <input class=" pl-3 input-range text-yellow" type="text" id="amount-price" readonly>
                        </div>
                        <div class="col-10">
                            <div id="slider-range-price"></div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex flex-row">
                            <h5 class="text-oswald pb-2">Max Mileage: </h5>
                            <input class=" pl-3 input-range text-yellow" type="text" id="amount-mileage" readonly>
                        </div>
                        <div class="col-10">
                            <div id="slider-range-mileage" ></div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <button class="btn-drop d-flex align-content-center pointer" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <h5 class="text-oswald ">Make </h5>
                                <i class="fa fa-caret-down pl-3 fa-2x " aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="collapse" id="collapseExample">
                                <div class="col-12 pl-5" id="name">
                                    <div class="row" v-for="make in propList('name',cars)">
                                        <input class="form-check-input" type="checkbox" :class="make" :value="delSpace(make)" v-model="makes" > @{{delSpace(make)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <button class="btn-drop d-flex align-content-cente pointer" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                <h5 class="text-oswald ">Model </h5>
                                <i class="fa fa-caret-down pl-3 fa-2x " aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="collapse" id="collapseExample1">
                                <div class="col-12 pl-5" id="model">
                                    <div class="row" v-for="model in propList('model',cars)">
                                        <input class="form-check-input" type="checkbox" :class="model" :value="delSpace(model)" v-model="models"> @{{delSpace(model)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <button class="btn-drop d-flex align-content-center pointer" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                <h5 class="text-oswald ">Trim </h5>
                                <i class="fa fa-caret-down pl-3 fa-2x " aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="collapse" id="collapseExample2">
                                <div class="col-12 pl-5" id="trim">
                                   <div class="row" v-for="trim in propList('trim',cars)">
                                        <input class="form-check-input" type="checkbox" :class="trim" :value="delSpace(trim)" v-model="trims"> @{{delSpace(trim)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <button class="btn-drop d-flex align-content-center pointer" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                <h5 class="text-oswald ">Body Style </h5>
                                <i class="fa fa-caret-down pl-3 fa-2x " aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="collapse" id="collapseExample3">
                                <div class="col-12 pl-5" id="body">
                                    <div class="row" v-for="body in propList('body',cars)">
                                        <input class="form-check-input" type="checkbox" :class="body" :value="delSpace(body)" v-model="bodyStyles"> @{{delSpace(body)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <button class="btn-drop d-flex align-content-center pointer" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                                <h5 class="text-oswald ">Exterior Color </h5>
                                <i class="fa fa-caret-down pl-3 fa-2x " aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="collapse" id="collapseExample4">
                                <div class="col-12 pl-5" id="exterior">
                                    <div class="row" v-for="ecolor in propList('exterior',cars)">
                                        <input class="form-check-input" type="checkbox" :class="ecolor" :value="delSpace(ecolor)" v-model="extColors"> @{{delSpace(ecolor)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <button class="btn-drop d-flex align-content-center pointer" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                                <h5 class="text-oswald ">Interior Color </h5>
                                <i class="fa fa-caret-down pl-3 fa-2x " aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="collapse" id="collapseExample5">
                                <div class="col-12 pl-5" id="interior">
                                    <div class="row" v-for="icolor in propList('interior',cars)">
                                        <input class="form-check-input" type="checkbox" :class="icolor" :value="delSpace(icolor)" v-model="intColors"> @{{delSpace(icolor)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <hr class="hr-side-bar">

                        </div>
                    </div>
                    <div class="col-12">
                        <a  href="{{route('inventory')}}"><h5 class="text-oswald text-yellow pb-4">Clear all</h5></a>
                    </div>

                </div>
            </div>
            <div class="cars pt-5 mt-5">
                <div v-for="cars in groupedArticles" class="row pl-3 pt-2">
                    <div v-for="car in cars" class="col-lg-3">
                        <div class="container-image pb-3">
                            <div class="overlay">
                                <a id="viewCar" class="viewCar" data-toggle="modal" @click="quickView(car)">
                                    <img id="zoom2" v-lazy="car.mainImg"  class="image" :data-zoom-image="car.mainImg">
                                    <div class="middle">
                                        <div class="text">
                                            <i class="fa fa-search fa-1x text-center text-white pr-2"></i>Quick View</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h6 class="title-car text-yellow">@{{ car.year }} @{{ car.name }}</h6>
                        <h6 class="title-mileage">Mileage: @{{ car.mileage.toLocaleString() }}</h6>
                        <h6 class="title-mileage">Model: @{{ car.model }}</h6>
                        <h6 class="text-oswald">Price: <strong>$ @{{ car.price.toLocaleString() }}</strong></h6>
                    </div>
                    <div class="col-12">
                        <hr class="hr-side-bar">
                    </div>
                </div>


            </div>
        </section>
        <section id="cars-invisible">
            <div class="cars-2 pt-1 mt-1">
                
                <div v-for="cars in groupedArticles" class="row pl-3 pt-2">
                    <div v-for="car in cars" class="col-lg-3">
                        <div class="container-image pb-3">
                            <div class="overlay">
                                <a id="viewCar" class="viewCar" data-toggle="modal" @click="quickView(car)">
                                    <img id="zoom2" :src="car.mainImg"  class="image" :data-zoom-image="car.mainImg">
                                    <div class="middle">
                                        <div class="text">
                                            <i class="fa fa-search fa-1x text-center text-white pr-2"></i>Quick View</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h6 class="title-car text-yellow">@{{ car.year }} @{{ car.name }}</h6>
                        <h6 class="title-mileage">Mileage: @{{ car.mileage }}</h6>
                        <h6 class="title-mileage">Model: @{{ car.model }}</h6>
                        <h6>Price: <strong>$ @{{ car.price }}</strong></h6>
                    </div>
                    <div class="col-12">
                        <hr class="hr-side-bar">
                    </div>
                </div>


            </div>
        </section>


        @include('inventoryQuickView')


    </div>


    <script>
        var estiloTooltip={
              "text-align": "center",
              "background-color": "black",
              "padding": "7px",
              "position": "absolute",
              "bottom": "180%",
              "left": "50%",
              "color":"white",
              "display": "flex",
              "justify-content": "center",
              "border-radius":"5px",
        };
        var estiloArrow={
          "background-color": "black",
          "width": "10px",
          "height": "10px",
          "transform": "rotate(45deg)",
          "position":"absolute",
          "left": "20%",
          "top":"80%",
        };
        var tooltipP=$('<div id="tooltipP" />').css(estiloTooltip);
        var tooltipY=$('<div id="tooltipY" />').css(estiloTooltip);
        var tooltipM=$('<div id="tooltipM" />').css(estiloTooltip);

        var rangoP=$('<div id="rangoP" />');
        var rangoY=$('<div id="rangoY" />');
        var rangoM=$('<div id="rangoM" />');

        var arrowP=$('<div id="arrowP" />').css(estiloArrow);
        var arrowY=$('<div id="arrowY" />').css(estiloArrow);
        var arrowM=$('<div id="arrowM" />').css(estiloArrow);

        Vue.use(VueLazyload);
        var vm4 = new Vue({
            el: '#inventory',
            data: {
                 //para slider
                act:0,
                offset:0,
                //fin slider
                listaPrices: [0],
                listaMileage: [0],
                listaYear: [],
                nCar: 0,
                sort:'Sort By',
                years:'',
                search:'',
                paraMakes:"{{$makes}}",
                paraModels:"{{$models}}",
                paraPrices:"{{$prices}}",
                precio:"",
                year:"",
                mileage:"",
                makes:[],
                models:[],
                trims:[],
                bodyStyles:[],
                extColors:[],
                intColors:[],
                x:[],
                cars: [],
                fillCar: {'id': '', 'code': '' , 'name': '', 'type': '','model': '', 'trim': '','body': '', 'exterior': '','interior': '', 'doors': '','vin': '', 'mileage': '',
                    'engine': '', 'fuel': '','drive': '', 'mpg': '','year': '', 'price': '','comments': '', 'imgMain': '','secondaryImg': [],'auxMainImg': '','auxSecundaryImg':[], 'newImg': [], 'actuallyImg': '/spinner.gif'},
                fillSecondary: [],
                date:'',
                name: '',
                lastName: '',
                cellphone: '',
                email: '',
                carsCode: ''

            },
            created: function() {
                this.getCars();
            },
            updated: function () {
              this.$nextTick(function () {
                this.disabledProp(this.x);

              });
            },
            mounted: function () {
              this.$nextTick(function () {
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
            methods: {
                sendEmail:function (code) {
                    this.date = datePicker.datepicker('getDate');
                    var date = new Date(datePicker.datepicker('getDate'));

                    var url = 'inventoryRoute';
                    axios.post(url, {
                        name: this.name,
                        lastName: this.lastName,
                        cellphone: this.cellphone,
                        email: this.email,
                        date: (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear(),
                        code: code
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
                slug: function (year,name,model,id) {
                    return '/vehicle-information/'+year+'-'+name+'-'+model+'-'+id;
                },
                getCars: function() {
                    var url = '{{url('inventoryRoute')}}';

                    axios.get(url).then(response => {

                        this.cars = response.data
                        this.nCar=this.cars.length;
                        this.iniciarSliders(this.cars);


                });
                },
                iniciarSliders: function(cars){

                   var n=cars.length;
                    for(var i=0; i<n; i++){
                        this.listaYear.push(parseInt(cars[i].year));
                        this.listaMileage.push(parseInt(cars[i].mileage));
                        this.listaPrices.push(parseInt(cars[i].price));
                    }

                    this.listaYear.sort(function(a, b){return a-b});
                    this.listaMileage.sort(function(a, b){return a-b});
                    this.listaPrices.sort(function(a, b){return a-b});
                    this.listaYear=this.listaYear.filter( function onlyUnique(value, index, self){ return self.indexOf(value) === index;} );
                    this.listaMileage=this.listaMileage.filter( function onlyUnique(value, index, self){ return self.indexOf(value) === index;} );
                    this.listaPrices=this.listaPrices.filter( function onlyUnique(value, index, self){ return self.indexOf(value) === index;} );

                    var maxY=this.listaYear[this.listaYear.length-1];
                    var minY=this.listaYear[0];
                    var maxM=this.listaMileage[this.listaMileage.length-1];
                    if(this.paraPrices!='all'){
                        var lim=this.paraPrices.split(' - ');
                        lim[0]=parseInt(lim[0]);
                        lim[1]=parseInt(lim[1]);
                        this.precio='$'+lim[0]+' - $'+lim[1];
                        var i=0,j=0;
                        while(this.listaPrices[i]<=lim[1]){
                            i++;
                        }

                        while(this.listaPrices[j]<lim[0]){
                            j++;
                        }
                        j++;
                        sliderPrice(i,j);
                    }else{
                        this.precio="$"+this.listaPrices[0]+" - $"+this.listaPrices[this.listaPrices.length-1];
                        sliderPrice(this.listaPrices.length);
                    }
                    this.year=minY+" - "+maxY;
                    this.mileage=maxM+"k";
                    sliderYear();
                    sliderMileage();
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
                getWidth: function(){
                    return $( window ).width();
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

                },
                sortProp: function(prop,text){
                    this.sort=text;
                    this.cars.sort(function (a, b) {
                      if (a[prop] > b[prop]) {
                        return 1;
                      }
                      if (a[prop] < b[prop]) {
                        return -1;
                      }
                      // a must be equal to b
                      return 0;
                    });
                },
                 rsortProp: function(prop,text){
                    this.sort=text;
                    this.cars.sort(function (a, b) {
                      if (a[prop] < b[prop]) {
                        return 1;
                      }
                      if (a[prop] > b[prop]) {
                        return -1;
                      }
                      // a must be equal to b
                      return 0;
                    });
                 },
                 filterProp: function(carros,filt,prop ){
                     if(filt.length > 0 ){
                         carros=carros.filter(function(cari){
                                return !!this.find(function(f){
                                    return this==f;
                                },cari[prop]);
                            },filt);
                     }
                     return carros;
                 },
                 filterDualSlider: function(carros,filt,prop){
                    carros=carros.filter(function(cari){
                        return (parseInt(cari[prop])>=this[0] && parseInt(cari[prop])<=this[1]);
                    },filt);

                    return carros;
                 },
                  filterSlider: function(carros,filt,prop){

                    carros=carros.filter(function(cari){
                        return (parseInt(cari[prop])<=this);
                    },filt);

                    return carros;
                 },
                 filterSearch: function(x){
                     if(this.search!=''){
                         x=x.filter(function(cari){
                             for( var p in cari ){
                                 if( cari[p].toString().toUpperCase().indexOf(this.toUpperCase()) >-1){
                                    return true;
                                }
                            }
                            return false;
                        },this.search);
                    }
                     return x;
                 },
                  propList: function(prop,cars){
                    var x=[];
                    var n=cars.length;
                    for(var i=0; i<n; i++){
                        x.push(cars[i][prop]);
                    }

                    var y=x.filter( function onlyUnique(value, index, self){ return self.indexOf(value) === index;} );
                    for(var i=0; i<y.length; i++){
                        y[i]=y[i].split(" ").join("_");
                    }
                    return y;
                },

                disabledProp: function(Dcars){

                    $("#show-cars input[type='checkbox']").prop('disabled', true);
                    $("#show-cars input[type='checkbox']").parent().css('color','#ACA7A3');


                    // color habilitado #212529 color desabilitado. color desabilitado #ACA7A3

                    var checks={
                        name:this.propList('name',Dcars),
                        model:this.propList('model',Dcars),
                        trim:this.propList('trim',Dcars),
                        body:this.propList('body',Dcars),
                        exterior:this.propList('exterior',Dcars),
                        interior:this.propList('interior',Dcars)
                    };

                    for(p in checks){
                        for(var i=0; i<checks[p].length; i++){

                            $("#"+p+" ."+checks[p][i]).prop('disabled', false);
                            $("#"+p+" ."+checks[p][i]).parent().css('color','#212529');
                        }
                    }
                },
                delSpace: function(elem){
                    return elem.split("_").join(" ");

                }


            },
            computed: {
                 groupedArticles: function() {
                    this.x=this.cars;
                    if(this.paraMakes!='all'){
                        this.makes.push(this.paraMakes);
                        this.paraMakes='all';

                    }
                    if(this.paraModels!='all'){
                        this.models.push(this.paraModels);
                        this.paraModels='all';
                    }


                    if(this.precio!="" &&  this.precio!="$0 - $0"){
                        var min,max;
                        min=this.precio.split(" - ");
                        max=parseInt(min[1].substr(1));
                        min=parseInt(min[0].substr(1));

                        this.x=this.filterDualSlider(this.x,[min,max],'price');

                    }
                    if(this.year!="" &&  this.year!="0 - 0"){
                        var min,max;
                        min=this.year.split(" - ");
                        max=parseInt(min[1]);
                        min=parseInt(min[0]);

                        this.x=this.filterDualSlider(this.x,[min,max],'year');

                    }
                    if(this.mileage!=""){
                        var valorM;
                        valorM=parseInt(this.mileage.split('k')[0]);

                        this.x=this.filterSlider(this.x,valorM,'mileage');

                    }
                    this.x=this.filterProp(this.x,this.makes,"name");// Filtrar Makes
                    this.x=this.filterProp(this.x,this.models,"model");//Filtrar model
                    this.x=this.filterProp(this.x,this.trims,"trim");//Filtrar trim
                    this.x=this.filterProp(this.x,this.bodyStyles,"body");//filtrar body style
                    this.x=this.filterProp(this.x,this.extColors,"exterior");// filtrar extColors
                    this.x=this.filterProp(this.x,this.intColors,"interior");// filtrar intColors

                    this.x=this.filterSearch(this.x);//filtrar search



                    this.disabledProp(this.x);

                    this.nCar=this.x.length;


                    return _.chunk(this.x, 4);
                    // returns a nested array:
                    // [[article, article, article], [article, article, article], ...]
                },
                groupedImages: function() {
                    return _.chunk(this.fillSecondary, 6);
                    // returns a nested array:
                    // [[article, article, article], [article, article, article], ...]
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

                },
            }


        });
        function sliderYear(){
            $( function() {
                $( "#slider-range" ).slider({
                    range: true,
                    min: 1,
                    max: vm4.$data.listaYear.length,
                    values: [ 1, vm4.$data.listaYear.length ],
                    slide: function( event, ui ) {

                        ui.values[ 0 ]=vm4.$data.listaYear[ui.values[ 0 ]-1];
                        ui.values[ 1 ]=vm4.$data.listaYear[ui.values[ 1 ]-1];

                        if(ui.values[0]==ui.values[1])
                        {
                            $("#slider-range .ui-slider-range #tooltipY #rangoY").text(ui.values[0]);


                        }else{
                            $("#slider-range .ui-slider-range #tooltipY #rangoY").text(ui.values[0]+"-"+ui.values[1]);
                        }
                    },
                    create: function( event, ui ) {

                      rangoY.text(vm4.$data.listaYear[0] + "-" + vm4.$data.listaYear[vm4.$data.listaYear.length-1]);

                      $("#slider-range .ui-slider-range").append(tooltipY);
                      $("#slider-range .ui-slider-range #tooltipY").append(rangoY);
                      $("#slider-range .ui-slider-range #tooltipY").append(arrowY);
                    }


                });

            } );
        }
        function sliderPrice(max,min=1){
            $( function() {
                $( "#slider-range-price" ).slider({
                    range: true,
                    min: 1,
                    max: vm4.$data.listaPrices.length,
                    values: [ min, max ],
                    slide: function( event, ui ) {
                        ui.values[ 0 ]=vm4.$data.listaPrices[ui.values[ 0 ]-1];
                        ui.values[ 1 ]=vm4.$data.listaPrices[ui.values[ 1 ]-1];

                        if(ui.values[0]==ui.values[1])
                        {
                            $("#slider-range-price .ui-slider-range #tooltipP #rangoP").text("$"+ui.values[0]);


                        }else{
                            $("#slider-range-price .ui-slider-range #tooltipP #rangoP").text("$" +ui.values[0]+"-$"+ui.values[1]);
                        }
                    },
                    create: function( event, ui ) {

                      rangoP.text("$" + vm4.$data.listaPrices[min-1] + "-$" + vm4.$data.listaPrices[max-1]);

                      $("#slider-range-price .ui-slider-range").append(tooltipP);
                      $("#slider-range-price .ui-slider-range #tooltipP").append(rangoP);
                      $("#slider-range-price .ui-slider-range #tooltipP").append(arrowP);
                    }
                });

            } );
        }
        function sliderMileage(){
            $( function() {
                $( "#slider-range-mileage" ).slider({
                    range: "min",
                    value: vm4.$data.listaMileage.length,
                    min: 1,
                    max: vm4.$data.listaMileage.length,
                    slide: function( event, ui ) {

                        $("#slider-range-mileage .ui-slider-range #tooltipM #rangoM").text(vm4.$data.listaMileage[ui.value-1] + "k");

                    },
                    create: function( event, ui ) {

                      rangoM.text(vm4.$data.listaMileage[vm4.$data.listaMileage.length-1] + "K");

                      $("#slider-range-mileage .ui-slider-range").append(tooltipM);
                      $("#slider-range-mileage .ui-slider-range #tooltipM").append(rangoM);
                      $("#slider-range-mileage .ui-slider-range #tooltipM").append(arrowM);
                    }
                });

            } );
         }
          $( "#slider-range" ).on( "slidechange", function( event, ui ) {vm4.$data.year=vm4.$data.listaYear[ui.values[ 0 ]-1] + " - " + vm4.$data.listaYear[ui.values[ 1 ]-1];} );
          $( "#slider-range-price" ).on( "slidechange", function( event, ui ) {vm4.$data.precio="$" + vm4.$data.listaPrices[ui.values[ 0 ]-1] + " - $" + vm4.$data.listaPrices[ui.values[ 1 ]-1];} );
          $( "#slider-range-mileage" ).on( "slidechange", function( event, ui ) {vm4.$data.mileage=vm4.$data.listaMileage[ui.value-1] + "k";} );
        var datePicker = $('.datepicker').datepicker({
            format: 'mm/dd/yyyy'
        });

    </script>
    <script>

    </script>


@endsection
