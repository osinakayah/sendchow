<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <title>SendChow | Login</title>
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
    </head>

    <body class="login-page">
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md bg-white fixed-top navbar-transparent" color-on-scroll="500">
            <div class="container">

                <div class="navbar-translate">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" rel="tooltip" title="Send Food to Anyone Anywhere." data-placement="bottom">
                        <img src="{{URL::asset('assets/img/logo.png')}}" width="120px" alt="SendChaw">
                    </a>
                </div>
                <div class="collapse navbar-collapse justify-content-end" data-nav-image="{{URL::asset('assets/img/blurred-image-1.jpg')}}" data-color="green">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Discover Restaurants" data-placement="bottom" href="restaurants.html">
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
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Sign up" data-placement="bottom" href="register">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <p>Sign Up</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="page-header" filter-color="blue">
            <div class="page-header-image" style="background-image: url('{{URL::asset("assets/img/cover.jpg")}}');"></div>
            <div class="content-center">
                <div class="container">
                    <div class="col-md-4 content-center">
                        <div class="card card-login card-plain">

                            @if(is_string($errors))
                                <div class="alert alert-danger">{{$errors}}</div>
                                @endif
                            @if (!is_string($errors) && $errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="form" method="post" action="login">
                                <div class="header header-primary text-center">
                                    <div class="logo-container">
                                        <a href="index.html"><img src="{{URL::asset('assets/img/logo.png')}}"  alt="SendChaw"></a>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="input-group form-group-no-border input-lg">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </span>
                                        <input name="email" type="email" class="form-control" placeholder="Email.." required>
                                    </div>
                                    <div class="input-group form-group-no-border input-lg">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons objects_key-25"></i>
                                            </span>
                                        <input name="password" type="password" placeholder="Password.." class="form-control" required />
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button class="btn btn-primary btn-round btn-lg btn-block" type="submit">Log In</button>
                                </div>
                                <div class="pull-left">
                                    <h6>
                                        <a href="register" class="link footer-link">Create Account</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                        <a href="#pablo" class="link footer-link">Need Help?</a>
                                    </h6>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    Restaurants
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    How it works
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Terms of use
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        {{date('Y')}}, copyright
                        <a href="https://www.sendchow.me">SendChow</a>. Distance broken.
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <!--   Core JS Files   -->
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
    <script src="{{URL::asset('/assets/js/script.js')}}" type="text/javascript"></script>

</html>