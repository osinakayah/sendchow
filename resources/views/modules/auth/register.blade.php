<!DOCTYPE html>
<html lang="en">

    <head>
        <title>SendChow | Register</title>
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

    <body class="signup-page">
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent" color-on-scroll="200">
        <div class="container">

            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="index.html" rel="tooltip" title="Send Food to Anyone, Anywhere" data-placement="bottom">
                    <img src="{{URL::asset('assets/img/logo.png')}}" width="120px" alt="SendChaw">
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" data-nav-image="../assets/img/blurred-image-1.jpg" data-color="green">
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
                        <a class="nav-link" rel="tooltip" title="Log In" data-placement="bottom" href="login.html">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <p>Log In</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="section section-image" style="background-image: url('{{URL::asset("assets/img/cover.jpg")}}');">

        <div class="content-center">
            <div class="container">
                <div class="card card-signup">
                    <div class="card-block">
                        <h2 class="card-title text-center">Sign Up</h2>
                        <div class="social text-center">
                            <button class="btn btn-icon btn-round btn-facebook">
                                <i class="fa fa-facebook"> </i>
                            </button>
                            <h5 class="card-description"> and break the distance </h5>
                        </div>
                        @if (!is_string($errors) && $errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form" method="post" action="/register">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="now-ui-icons users_circle-08"></i>
                                            </span>
                                <input name="first_name" type="text" class="form-control" placeholder="First Name..">
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="now-ui-icons text_caps-small"></i>
                                            </span>
                                <input name="last_name" type="text" placeholder="Last Name..." class="form-control">
                            </div>

                            <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="now-ui-icons tech_mobile"></i>
                                            </span>
                                <input name="phone_number" type="tel" class="form-control" placeholder="Phone Number..">
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </span>
                                <input name="email" type="email" class="form-control" placeholder="Email..">
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="now-ui-icons objects_key-25"></i>
                                            </span>
                                <input name="password" type="password" class="form-control" placeholder="Password..">
                            </div>
                            <!-- If you want to add a checkbox to this form, uncomment this code -->
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    I agree to the
                                    <a href="#something">terms and conditions</a>.
                                </label>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-round btn-lg">Sign Up</button>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- <div class="content-center">
                </div> -->
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
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, copyright
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