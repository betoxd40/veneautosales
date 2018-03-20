<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard | Veneauto Sales and Services</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Google Analytics -->
    <!-- End Google Analytics -->

</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header"><a href="/" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Smart</strong><strong>Admin</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">4</strong><strong>U</strong></div></a>
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <ul class="right-menu list-inline no-margin-bottom">
                <li class="list-inline-item logout"><a id="logout" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="nav-link">Logout <i class="icon-logout"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

        </div>
    </nav>
</header>
<div class="d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center justify-content-center">
            <div class="title text-center">
                <h1 class="h5">Administrator</h1>
            </div>
        </div><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}""><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Administer cars</a>
                <ul id="dashvariants" class="collapse list-unstyled">
                    <li><a href="{{route('add-car')}}">Add cars</a></li>
                    <li><a href={{route('modify-car')}}>Modfify cars</a></li>
                </ul>
            </li>
            <li><a href="{{route('add-user')}}""><i class="icon-user-1"></i>Add User</a></li>
            <li><a href="{{route('support')}}""><i class="icon-mail"></i>Support</a></li>
        </ul>
    </nav>
    <div class="page-content form-page">

        @yield('content');

        <footer class="footer">
            <div class="footer__block block no-margin-bottom">
                <div class="container-fluid text-center">
                    <p class="no-margin-bottom">Design by <a href="https://smart4youdesign.com">Smart4U</a>.</p>
                </div>
            </div>
        </footer>


    </div>
</div>
<!-- Javascript files-->
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(function() {
        $("#envio").hide();

        $("#mensajeform").validate({
            rules: {

                department: { required: true},
                subject: { required: true},
                message: {  required: true, email: true},
            },
            messages: {
                department: "You must select your department.",
                subject: "You must put a subject.",
                message: "You must put a message."
            },
            submitHandler: function(form){
                var dataString = $('#department').val()+$('#subject').val()+$('#message').val();
                $.ajax({
                    type: "POST",
                    url:"inc/support_email.php",
                    data: $(form).serialize(),
                    success: function(data){
                        $("#envio").html(data);
                        $("#envio").show();
                        $( 'input' ).val( '' );
                        $( 'textarea' ).val( '' );
                    }
                });
            }
        });

    });
</script>


</body>
</html>
