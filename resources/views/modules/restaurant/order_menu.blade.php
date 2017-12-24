<!DOCTYPE html>
<html lang="en">

    <head>


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

    <body id="checkout-body" class="order-menu-page" data-spy="scroll" data-target="#scrollspy" data-offset="80">

    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true"  style="background-image: url('{{URL::asset("assets/img/restaurant-cover.jpg")}}'); transform: translate3d(0px, 0px, 0px);">
            </div>
            <div class="content-center">
                <div class="photo-container">
                    <img  src="{{URL::asset("assets/img/restaurant-list.jpg")}}" alt="logo">
                </div>
                <h3 class="title">{{$restaurant->title}}</h3>
                <p class="category">@foreach($categories as $category) {{$category->category}},@endforeach</p>
                <div class="content">
                    <div class="text-wrap">
                        @for($i = 0; $i <= 5; $i++)
                            @if($i <= $restaurant->rating)
                                <i class="icon-star-full2"></i>
                            @else
                                <i class="icon-star-empty3"></i>
                            @endif
                        @endfor
                        <span>(256)</span>
                    </div>
                </div>
            </div>
        </div>
            <div class="section section-order">
                <div class="container">
                    <div class="button-container">
                        <button class="btn btn-primary btn-lg btn-round btn-icon">
                            <i class="now-ui-icons location_compass-05"></i>
                        </button>
                        <button class="btn btn-primary btn-lg btn-round">Current Location</button>
                    </div>
                    <div class="select order-location gone">
                        <form class="select" action="/restaurants/get_restaurant_from_city" method="post">
                            {{ csrf_field() }}
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
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="card">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-left" role="tablist" data-background-color="green">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#menu" role="tab" aria-expanded="false">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#reviews" role="tab" aria-expanded="false">Reviews</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#about" role="tab" aria-expanded="true">About</a>
                                    </li>
                                </ul>
                                <div class="card-block">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="menu" role="tabpanel" aria-expanded="false">
                                            <div class="row">
                                                <div class="col-lg-2 category-links" id="scrollspy">
                                                    <div class="nav sticky side-nav">
                                                        <ul>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#popular">Popular</a>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-category-title-side">
                                                            <h5>Menu Title</h5>
                                                        </div>
                                                        <ul>
                                                            @foreach($categories as $category)
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#{{$category->id}}">{{$category->category}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-lg-10 category-contents">
                                                    @foreach($categoriesMenus as $key => $categoriesMenu)
                                                        <section id="@if(count($categoriesMenus) > 0 && isset($categoriesMenus[$key][0]['category']['id'])){{$categoriesMenus[$key][0]['category']['id']}}@endif">
                                                            <div class="menu-category">
                                                                <div class="menu-category-header">
                                                                    <h5>
                                                                        @if(count($categoriesMenus) > 0 && isset($categoriesMenus[$key][0]['category']['category']))
                                                                            {{$categoriesMenus[$key][0]['category']['category']}}
                                                                        @endif
                                                                    </h5>
                                                                    <img src="{{URL::asset("assets/img/menu-header.jpg")}}" alt="menu header" class="rounded">
                                                                </div>
                                                                @foreach($categoriesMenu as $menu)
                                                                    <div class="menu-container">
                                                                        <div class="menu-content">
                                                                            <div class="menu-content-with-image">
                                                                            <span class="menu-image">
                                                                                <img src="{{$menu['image']}}" alt="meal-image" class="rounded" width="60px">
                                                                            </span>
                                                                                <span class="menu-title">
                                                                                <h5>{{$menu['name']}}</h5>
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-variation-container">
                                                                            <ul class="menu-variation">
                                                                                <li class="menu-item-variety">
                                                                                    <span class="variety-title">1 Portion</span>
                                                                                    <span class="variety-price">&#x20a6;{{$menu['price']}}</span>
                                                                                    <button type="button" class="btn btn-neutral" product-id="{{$menu['id']}}">
                                                                                        <i class="icon-import"></i>
                                                                                    </button>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </section>
                                                    @endforeach
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="reviews" role="tabpanel" aria-expanded="false">
                                            <div class="review">
                                                    <span class="review-meta-data">
                                                        <div class="review-author">
                                                            Mr Ayo Deji Musa
                                                        </div>
                                                        <div class="review-date">
                                                            28th Nov, 2017
                                                        </div>
                                                    </span>
                                                <span class="review-details">
                                                        <div class="review-title gone">
                                                            Awesome Restaurant
                                                        </div>
                                                        <div class="review-description gone">
                                                            This is the best restaurant I've ever visited
                                                        </div>
                                                        <div class="review-rating">
                                                            <div class="text-wrap">
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-half"></i>
                                                            </div>
                                                        </div>
                                                    </span>
                                            </div>
                                            <div class="review">
                                                    <span class="review-meta-data">
                                                        <div class="review-author">
                                                            Mr Ayo Chinedu Musa
                                                        </div>
                                                        <div class="review-date">
                                                            25th Nov, 2017
                                                        </div>
                                                    </span>
                                                <span class="review-details">
                                                        <div class="review-title gone">
                                                            Awesome Restaurant
                                                        </div>
                                                        <div class="review-description">
                                                            This is the best restaurant I've ever visited
                                                        </div>
                                                        <div class="review-rating">
                                                            <div class="text-wrap">
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-half"></i>
                                                                <i class="icon-star-empty3"></i>
                                                            </div>
                                                        </div>
                                                    </span>
                                            </div>
                                            <div class="review">
                                                    <span class="review-meta-data">
                                                        <div class="review-author">
                                                            Mr Ayo Chinedu Musa
                                                        </div>
                                                        <div class="review-date">
                                                            25th Nov, 2017
                                                        </div>
                                                    </span>
                                                <span class="review-details">
                                                        <div class="review-title">
                                                            Awesome Restaurant
                                                        </div>
                                                        <div class="review-description">
                                                            This is the best restaurant I've ever visited
                                                        </div>
                                                        <div class="review-rating">
                                                            <div class="text-wrap">
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                            </div>
                                                        </div>
                                                    </span>
                                            </div>
                                            <div class="review">
                                                    <span class="review-meta-data">
                                                        <div class="review-author">
                                                            Mr Ayo Chinedu Musa
                                                        </div>
                                                        <div class="review-date">
                                                            25th Nov, 2017
                                                        </div>
                                                    </span>
                                                <span class="review-details">
                                                        <div class="review-title">
                                                            Awesome Restaurant
                                                        </div>
                                                        <div class="review-description">
                                                            This is the best restaurant I've ever visited
                                                        </div>
                                                        <div class="review-rating">
                                                            <div class="text-wrap">
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-full2"></i>
                                                                <i class="icon-star-half"></i>
                                                            </div>
                                                        </div>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="about" role="tabpanel" aria-expanded="true">
                                            <div class="about-vendor">
                                                <div class="vendor-name">
                                                    <h3>This is a Restaurant</h3>
                                                </div>
                                                <div class="vendor-cuisines">
                                                    <div class="cuisine-header">
                                                        Cuisines <i class="fa fa-cutlery" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="cuisines">
                                                        Nigerian, Pizza, Pasta, Bakery And Cake
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="vendor-description">
                                                    <div class="vendor-description-header">
                                                        <h5><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</h5>
                                                    </div>
                                                    <div class="vendor-description-detail">
                                                        This is a wonderful Restaurant and trust us we offer wonderful tasty meals..
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="vendor-location">
                                                    <div class="vendor-address">
                                                            <span class="vendor-address-header">
                                                                <h5><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h5>
                                                            </span>
                                                        <div class="vendor-address-detail">
                                                            25 Cresent Avenue, Discrete locale, Some State.
                                                        </div>
                                                    </div>
                                                    <div id="map"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div id="cart_table_div_wrapper" class="card card-cart sticky processing">
                                <table class="table table-shopping">
                                    <thead>
                                    <tr>
                                        <th colspan="4">Your Order</th>
                                    </tr>

                                    </thead>
                                    <tbody class="cart" id="cart_table_body">
                                    <tr class="cart-empty">
                                        <td class="empty-bag">
                                            <div class="empty-bag-bg">
                                                <i class="icon-bag"></i>
                                            </div>
                                            <div class="empty-bag-text">
                                                <p>Your food basket is empty, add food items.</p>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <div id="cart-total-checkout" class="cart-total-checkout gone">
                                    <hr style="width: 90%">
                                    <div class="cart-total">
                                        <div class="sub-total">
                                            Subtotal: <span id="sub_total_price" class="sub-price">	&#x20A6;334,900</span>
                                        </div>
                                        <div class="sub-total">
                                            + Service Charge: <span id="items_tax" class="service-charge">&#x20A6;334,900</span>
                                        </div>
                                        <div class="td-total">
                                                    Total: 	&#x20A6;<span id="total_price" class="td-price">&#x20A6;334,900</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout-btn">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-success btn-round">CHECKOUT <i class="now-ui-icons arrows-1_minimal-right"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="mobile_cart_bottom_summary" class="cart-bottom gone">
                        <span class="cart-basket">
                            <i class="icon-bag"></i>
                            <span class="total-cart-item-count">1</span>
                        </span>
                    <span class="cart-price">Total: ₦<span class="td-price-mobile">33,900</span></span>
                    <span class="cart-checkout-button">
                            <a class="checkout-btn" href="#">CHECKOUT</a>
                        </span>
                </div>
                <div class="cart-mobile-container" id="cart-container">
                    <div class="cart-content">
                        <div class="mobile-header-container" id="mobile-header">
                            <div class="mobile-header">
                                <div class="header-title">
                                    <i class="icon-arrow-left32"></i>
                                    <span>Food Basket</span>
                                </div>
                            </div>
                        </div>
                        <div class="cart-header-title">
                            <h3>Your Order</h3>
                        </div>
                        <div class="cart-product">
                            <table class="table table-shopping">
                                <tbody id="mobile-cart_table_body" class="cart">
                                <!-- <tr class="cart-total">
                                    <td class="td-total" colspan="1">
                                        Total:
                                    </td>
                                    <td colspan="3">
                                        ₦<span class="td-price">334,900</span>
                                    </td>
                                </tr> -->
                                </tbody>
                            </table>
                            <hr style="width:90%">
                            <div class="cart-total">
                                <div class="sub-total">
                                    Subtotal: <span id="mobile_sub_total_price" class="sub-price">₦334,900</span>
                                </div>
                                <div class="sub-total">
                                    + Service Charge: <span id="mobile_items_tax" class="service-charge">₦334,900</span>
                                </div>
                                <div class="td-total">
                                    Total: ₦<span id="mobile_total_price" class="td-price">334,900</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('_footer')

        </div>
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
        <script src="{{URL::asset('assets/js/script.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/dist/scripts-bundle.min.js')}}" type="text/javascript"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsZAYY0bkq5wrGeZPtPD8CvSyrLwv8Wc8&callback=initMap">
        </script>

        <script>
            function initMap() {
                var vendorLocation = {
                    lat: 6.4530906,
                    lng: 3.5318009
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: vendorLocation
                });
                var marker = new google.maps.Marker({
                    position: vendorLocation,
                    map: map
                });
            }
        </script>
    </body>

</html>