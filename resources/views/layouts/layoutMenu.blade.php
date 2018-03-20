
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Veneauto Sales and Services</title>

    <link rel="stylesheet" href="\css\bootstrap.min.css">
    <link rel="stylesheet" href="\css\font-awesome.min.css">
    <link rel="stylesheet" href="\css\jquery-ui.css">
    <link rel="stylesheet" href="\css\customIndex.css">
    <link rel="stylesheet" href="\css\bootstrap-slider.css">
    <link rel="stylesheet" href="\css\bootstrap-datepicker.css">
    <link rel="stylesheet" href="\css\slidePropio.css">
    <link rel="stylesheet" href="\css\fresco.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">

        <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<body>

<div class="nav-main-menu">
    <header>
        <div class="container info-header">
            <!--BARRA INFO-->
            <div class="row">
                <div class=" col-sm-12 col-md-4">
                    <a href="https://twitter.com/Veneautosales?lang=es" target="_blank"><span class="fa fa-facebook fa-2x pr-3"></span></a>
                    <a href="https://www.instagram.com/veneautosales/" target="_blank"><span class="fa fa-twitter fa-2x pr-3"></span></a>
                    <a href="https://twitter.com/Veneautosales?lang=es" target="_blank"><span class="fa fa-instagram fa-2x"></span></a>
                </div>

                <div class="col-sm-12 col-md-8 d-flex justify-content-end text-dir">
                    <ul class="list-inline text-dir">
                        <li class="list-inline-item">
                            <span class="fa fa-phone align-middle text-white text-menu-top"> 774-239-5286</span>
                        </li>
                        <li class="list-inline-item">
                            <span class="fa fa-phone align-middle text-white text-menu-top"> 774-330-9044 </span>
                        </li>
                        <li class="list-inline-item">
                            <span class="fa fa-map-marker align-middle text-white text-menu-top"> 230 SW Cutoff, Worcester 01604</span>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <nav class="nav-main">
        <div class="container">
            <!--Nav inicio-->
            <div class="row pb-3">
                <div class="col-12 col-sm-3 col-md-3 col-lg-2 img-logo">
                    <a href="{{route('index')}}"><img src="/img/logo-grande.png" class="img-fluid"></a>
                </div>
                <div class="col-12 col-sm-9 col-md-9 col-lg-10 pt-3">
                    <ul class="list-inline">
                        <li class="list-inline-item px-sm-1 px-md-2 size-menu">
                            <a href="{{route('index')}}" class="text-oswald">Home</a>
                        </li>
                        <li class="list-inline-item px-sm-1 px-md-2  size-menu text-oswald">
                            <a href="{{route('inventory')}}" class="text-sub-menu">Inventory</a>
                        </li>
                        <li class="list-inline-item px-sm-1 px-md-2  size-menu text-oswald">
                            <a href="{{route('about-us')}}" class="text-sub-menu">About us</a>
                        </li>
                        <li class="list-inline-item px-sm-1 px-md-2  size-menu text-oswald">
                            <a href="{{route('contact')}}" class="text-sub-menu">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

    <script src="/js/jquery.min.js"></script>//
    <script src="/js/jquery-ui.js"></script>//
    <script src="/js/vue.js"></script>//
    <script src="/js/axios.js"></script>--
    <script src="/js/lodash.js"></script>--
    <script src="/vendor/popper/popper.min.js"></script>
    <script src="/js/jquery.ez-plus.js"></script>
    <script src="/js/bootstrap-slider.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/fresco.js"></script>}
    <script src="https://unpkg.com/vue-lazyload/vue-lazyload.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>

    <script>
        _.chunk = function(array,chunkSize) {
            return _.reduce(array,function(reducer,item,index) {
                reducer.current.push(item);
                if(reducer.current.length === chunkSize || index + 1 === array.length) {
                    reducer.chunks.push(reducer.current);
                    reducer.current = [];
                }
                return reducer;
            },{current:[],chunks: []}).chunks
        };
    </script>
    @yield('content')


    <section id="footer" class="container-fluid">
        <div class="row py-3 py-md-5 px-1 px-md-5">
            <div class="col-12 col-md-3 copyright">
                <p class="text-yellow">Copyright © Veneauto Sales and Services</p>
                <p class="text-yellow">Powered by Smart4U</p>
            </div>
            <div class="col-12 col-md-9">
                <a href="{{route('index')}}" class="text-white px-2">Home</a>
                <a href="{{route('inventory')}}" class="text-white px-2">Inventory</a>
                <a href="{{route('about-us')}}" class="text-white px-2">About us</a>
                <a href="{{route('contact')}}" class="text-white px-2">Contact</a>
                <a href="#" class="text-white px-2">Privacy Policy</a>
            </div>
        </div>
    </section>



    <!-- Javascript files-->



</body>
</html>
