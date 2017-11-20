@extends('layouts.app')
@section('title', 'Home')
@section('body')
    <body class="index-page">
    <div class="wrapper">

        <div class="page-header">
            <div class="page-header-image" data-parallax="true"  style="background-image: url('{{URL::asset("assets/img/cover.jpg")}}');">
            </div>
            <div class="container">
                <div class="content-center">
                    <h2>Send Food to Anyone, Anywhere.</h2>
                    <h4>-We've Broken the Distance, No More Excuses.-</h4>
                    <div>

                        <form class="select" action="restaurants/get_restaurant_from_city" method="post">
                            <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Select City" id="locale">
                                <option disabled selected>Select City</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->city}}</option>
                                @endforeach
                            </select>

                            <select class="selectpicker" data-size="7" data-style="btn btn-primary region" title="Select Region" id="region" name="region">
                                <option disabled selected>Select Region</option>
                            </select>
                            <button class="btn btn-primary btn-round">Find Restaurants</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="section section-help">
            <div class="container">
                <div class="how-it-works">
                    <h2>How it Works</h2>
                    <h5>Send food to anyone anywhere in four easy steps, and put a smile on their face.</h5>

                </div>
                <div class="row row-help">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mini-card">
                            <i class="now-ui-icons location_compass-05"></i>
                            <h5>1. Locate</h5>
                            <p>Find restaurants that are closest to receipiant location</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mini-card">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                            <h5>2. Select Meal</h5>
                            <p>Add prefered meal from the restaurants food menu for order</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mini-card">
                            <i class="now-ui-icons shopping_credit-card"></i>
                            <h5>3. Make Payment</h5>
                            <p>Pay for selected meal online and generate a coupon</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mini-card">
                            <i class="now-ui-icons ui-1_send"></i>
                            <h5>4. Send Meal</h5>
                            <p>Generated coupon is sent to receipiant to redeem meal</p>
                        </div>
                    </div>
                </div>
                <div class="try-service">
                    <a href="signup.html" class="btn btn-primary btn-round">Create Account</a>
                    <button class="btn btn-primary btn-round try">Try it Now</button>
                </div>
                <!-- <hr> -->
            </div>
        </div>
        <div class="section section-app">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 app-ad">
                        <h3>Send Food On The Go!</h3>
                        <h5>Download our app and be able send food to anyone, anytime even on the go! Its in your pocket.</h5>
                        <a href="#"><img src="{{URL::asset('assets/img/playstore.png')}}" alt="Play Store" width="172px"></a>
                        <a href="#"><img src="{{URL::asset('assets/img/appstore.png')}}" alt="App Store" width="172px"></a>
                    </div>
                    <div class="col-md-6">
                        <img src="./assets/img/app.png" alt="app" width="512px">
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

    @parent
    </body>

@endsection
