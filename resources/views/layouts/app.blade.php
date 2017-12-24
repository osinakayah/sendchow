<html lang="{{ app()->getLocale() }}">
    <head>
        <title>SendChow | @yield('title')</title>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200,300" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('assets/css/now-ui-kit.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/icomoon/styles.css')}}">
    </head>

    @section('body')
        <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent" color-on-scroll="500">
            <div class="container">
                <div class="navbar-translate">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="/" rel="tooltip" title="Send Food to Anyone Anywhere." data-placement="bottom">
                        <img src="{{URL::asset('assets/img/logo.png')}}" width="120px" alt="SendChaw">
                    </a>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{URL::asset('assets/img/blurred-image-1.jpg')}}">
                    <ul class="navbar-nav">

                        <li class="nav-item gone">
                            <a class="nav-link" rel="tooltip" title="Discover Restaurants" data-placement="bottom" href="restaurants">
                                <i class="fa fa-cutlery"></i>
                                <p>Restaurants</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="How it works" data-placement="bottom" href="#">
                                <i class="fa fa-question"></i>
                                <p>Help</p>
                            </a>
                        </li>
                        @if(Auth::check() == false)
                            <li class="nav-item signup">
                                <a class="nav-link" rel="tooltip" title="Sign up" data-placement="bottom" href="/register">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    <p>Sign Up</p>
                                </a>
                            </li>
                            <li class="nav-item divider">
                                <span class="vertical-divider"></span>
                            </li>
                            <li class="nav-item login">
                                <a class="btn btn-primary btn-round" href="/login">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                                    <p>Log In</p>
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="profileDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons users_circle-08" aria-hidden="true"></i>
                                    <p>Profile</p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdownMenuLink">
                                    <a class="dropdown-header">My Profile</a>
                                    <a class="dropdown-item" href="account.html">
                                        <!-- <i class="icon-user"></i> -->
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <p>Account</p>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <p>Orders</p>
                                    </a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="/logout">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <p>Log Out</p>
                                    </a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <script src="{{URL::asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/core/tether.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/plugins/moment.min.js')}}" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="{{URL::asset('assets/js/plugins/bootstrap-switch.js')}}" ></script>

        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{URL::asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="{{URL::asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
        <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
        <script src="{{URL::asset('assets/js/now-ui-kit.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/script.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/dist/scripts-bundle.min.js')}}" type="text/javascript"></script>
    @show
</html>