@extends('layouts.app')
@section('title', 'Find Restaurants')
@section('body')
    <body class="restaurant-page">
    <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent" color-on-scroll="250">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="index.html" rel="tooltip" title="Send Food to Anyone Anywhere." data-placement="bottom">
                    <img src="./assets/img/logo.png" width="120px" alt="SendChaw">
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg" data-color="green">
                <ul class="navbar-nav">

                    <li class="nav-item active">
                        <a class="nav-link" rel="tooltip" title="Discover Restaurants" data-placement="bottom" href="#">
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
                    <li class="nav-item signup gone">
                        <a class="nav-link" rel="tooltip" title="Sign up" data-placement="bottom" href="signup.html">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <p>Sign Up</p>
                        </a>
                    </li>
                    <li class="nav-item divider gone">
                        <span class="vertical-divider"></span>
                    </li>
                    <li class="nav-item login gone">
                        <a class="btn btn-primary btn-round" href="login.html">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <p>Log In</p>
                        </a>
                    </li>
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
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <p>Log Out</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-mini">
            <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/restaurant.jpg') ;">
            </div>
            <div class="container">
                <div class="content-center">
                    <h2>Discover Amazing Restaurants.</h2>
                    <p>Bringing the food closer to you.</p>
                </div>
            </div>
        </div>
        <div class="section section-locale">
            <div class="container">
                <div class="button-container">
                    <button class="btn btn-primary btn-lg btn-round btn-icon">
                        <i class="now-ui-icons location_compass-05"></i>
                    </button>
                    <button class="btn btn-primary btn-lg btn-round">Specify Location</button>
                </div>
            </div>
            <div class="container">
                <div class="restaurant-count">
                    <h2>There are <span>6</span> available Restaurants</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="filter-panel sticky">
                            <div class="card-block">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                                </span>
                                    <input type="text" class="form-control" placeholder="Search..">
                                </div>
                                <div class="card card-filter card-plain">
                                    <h4 class="card-title fixed"><i class="fa fa-filter" aria-hidden="true"></i> Filter<button class="btn btn-default btn-icon btn-neutral pull-right" rel="tooltip" title="" data-original-title="Reset Filter">
                                            <i class="arrows-1_refresh-69 now-ui-icons"></i></button>
                                    </h4>
                                </div>
                                <div class="card card-filter card-plain">

                                    <div class="card-header" role="tab" id="categoryHeading">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#categoryCollapse" aria-expanded="false" aria-controls="categoryCollapse">
                                                Categories <i class="now-ui-icons arrows-1_minimal-down"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="categoryCollapse" class="collapse" role="tabpanel" aria-labelledby="categoryHeading" aria-expanded="false">
                                        <div class="card-block">
                                            <div class="checkbox">
                                                <input id="fast-food" type="checkbox" checked="">
                                                <label for="fast-food">Fast Food</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="fast-casual" type="checkbox">
                                                <label for="fast-casual">Fast Casual</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="casual-dining" type="checkbox">
                                                <label for="casual-dining">Casual Dining</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="cafe" type="checkbox">
                                                <label for="cafe">Café</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="barbecue" type="checkbox">
                                                <label for="barbecue">Barbecue</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card card-filter card-plain">

                                    <div class="card-header" role="tab" id="cuisineHeading">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#cuisineCollapse" aria-expanded="false" aria-controls="cuisineCollapse">
                                                Cuisines <i class="now-ui-icons arrows-1_minimal-down"></i>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="cuisineCollapse" class="collapse" role="tabpanel" aria-labelledby="cuisineHeading" aria-expanded="false">
                                        <div class="card-block">
                                            <div class="checkbox">
                                                <input id="nigerian" type="checkbox" checked="">
                                                <label for="nigerian">Nigerian</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="african" type="checkbox">
                                                <label for="african">African</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="international" type="checkbox">
                                                <label for="international">International</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="pizza" type="checkbox">
                                                <label for="pizza">Pizza</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="burger" type="checkbox">
                                                <label for="burger">Burger</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="shawarma" type="checkbox">
                                                <label for="shawarma">Shawarma</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="seafood" type="checkbox">
                                                <label for="seafood">Seafood</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="pasta" type="checkbox">
                                                <label for="pasta">Pasta</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="chinese" type="checkbox">
                                                <label for="chinese">Chinese</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="french" type="checkbox">
                                                <label for="french">French</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="breakfast" type="checkbox">
                                                <label for="breakfast">Breakfast</label>
                                            </div>
                                            <div class="checkbox">
                                                <input id="bakery-cakes" type="checkbox">
                                                <label for="bakery-cakes">Bakery and Cakes</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <ul class="vendor-list">
                            <li class="vendor">
                                <div>
                                    <a href="order_menu.html" class="vendor-nav">
                                        <div class="vendor-image">
                                            <img src="./assets/img/restaurant-list.jpg" width="80px" height="80px" class="rounded-circle" alt="restaurant">
                                        </div>
                                        <div class="vendor-info">
                                            <div class="vendor-name">
                                                <h4>The Place Restaurant</h4>
                                            </div>
                                            <ul class="vendor-cuisine">
                                                <li>African,</li>
                                                <li>Nigerian,</li>
                                                <li>Backery and Cake,</li>
                                                <li>Seafood</li>
                                            </ul>

                                            <div class="vendor-details">
                                                <div class="vendor-afford">
                                                    <span>₦₦</span>₦
                                                </div>
                                                <div class="vendor-rating">
                                                    <div class="text-wrap">
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-half"></i>
                                                        <span>(256)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="vendor-forward-icon">
                                            <i class="icon-arrow-right32"></i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="vendor">
                                <div>
                                    <a href="order_menu.html" class="vendor-nav">
                                        <div class="vendor-image">
                                            <img src="./assets/img/restaurant-list.jpg" width="80px" height="80px" class="rounded-circle" alt="restaurant">
                                        </div>
                                        <div class="vendor-info">
                                            <div class="vendor-name">
                                                <h4>Chicken Republic</h4>
                                            </div>
                                            <ul class="vendor-cuisine">
                                                <li>African,</li>
                                                <li>Nigerian,</li>
                                                <li>Backery and Cake,</li>

                                            </ul>

                                            <div class="vendor-details">
                                                <div class="vendor-afford">
                                                    <span>₦₦</span>₦
                                                </div>
                                                <div class="vendor-rating">
                                                    <div class="text-wrap">
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-empty3"></i>
                                                        <span>(216)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="vendor-forward-icon">
                                            <i class="icon-arrow-right32"></i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="vendor">
                                <div>
                                    <a href="order_menu.html" class="vendor-nav">
                                        <div class="vendor-image">
                                            <img src="./assets/img/restaurant-list.jpg" width="80px" height="80px" class="rounded-circle" alt="restaurant">
                                        </div>
                                        <div class="vendor-info">
                                            <div class="vendor-name">
                                                <h4>KFC</h4>
                                            </div>
                                            <ul class="vendor-cuisine">
                                                <li>Backery and Cake,</li>
                                                <li>Nigerian</li>
                                            </ul>

                                            <div class="vendor-details">
                                                <div class="vendor-afford">
                                                    <span>₦₦₦</span>
                                                </div>
                                                <div class="vendor-rating">
                                                    <div class="text-wrap">
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <span>(156)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="vendor-forward-icon">
                                            <i class="icon-arrow-right32"></i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="vendor">
                                <div>
                                    <a href="order_menu.html" class="vendor-nav">
                                        <div class="vendor-image">
                                            <img src="./assets/img/restaurant-list.jpg" width="80px" height="80px" class="rounded-circle" alt="restaurant">
                                        </div>
                                        <div class="vendor-info">
                                            <div class="vendor-name">
                                                <h4>Kilimanjaro</h4>
                                            </div>
                                            <ul class="vendor-cuisine">
                                                <li>African,</li>
                                                <li>Nigerian,</li>
                                                <li>Backery and Cake,</li>
                                                <li>Seafood</li>
                                            </ul>

                                            <div class="vendor-details">
                                                <div class="vendor-afford">
                                                    <span>₦₦</span>₦
                                                </div>
                                                <div class="vendor-rating">
                                                    <div class="text-wrap">
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-half"></i>
                                                        <i class="icon-star-empty3"></i>
                                                        <span>(126)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="vendor-forward-icon">
                                            <i class="icon-arrow-right32"></i>
                                        </div>
                                    </a>
                                </div>
                            </li>

                            <li class="vendor">
                                <div>
                                    <a href="order_menu.html" class="vendor-nav">
                                        <div class="vendor-image">
                                            <img src="./assets/img/restaurant-list.jpg" width="80px" height="80px" class="rounded-circle" alt="restaurant">
                                        </div>
                                        <div class="vendor-info">
                                            <div class="vendor-name">
                                                <h4>Mega Chicken</h4>
                                            </div>
                                            <ul class="vendor-cuisine">
                                                <li>African,</li>
                                                <li>Nigerian,</li>
                                                <li>Backery and Cake,</li>
                                                <li>Seafood</li>
                                            </ul>

                                            <div class="vendor-details">
                                                <div class="vendor-afford">
                                                    <span>₦₦</span>₦
                                                </div>
                                                <div class="vendor-rating">
                                                    <div class="text-wrap">
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-empty3"></i>
                                                        <span>(126)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="vendor-forward-icon">
                                            <i class="icon-arrow-right32"></i>
                                        </div>
                                    </a>
                                </div>
                            </li>

                            <li class="vendor">
                                <div>
                                    <a href="order_menu.html" class="vendor-nav">
                                        <div class="vendor-image">
                                            <img src="./assets/img/restaurant-list.jpg" width="80px" height="80px" class="rounded-circle" alt="restaurant">
                                        </div>
                                        <div class="vendor-info">
                                            <div class="vendor-name">
                                                <h4>Dominos Pizza</h4>
                                            </div>
                                            <ul class="vendor-cuisine">

                                                <li>Nigerian,</li>
                                                <li>Backery and Cake,</li>
                                                <li>Pizza</li>
                                            </ul>

                                            <div class="vendor-details">
                                                <div class="vendor-afford">
                                                    <span>₦₦₦</span>
                                                </div>
                                                <div class="vendor-rating">
                                                    <div class="text-wrap">
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <i class="icon-star-full2"></i>
                                                        <span>(326)</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="vendor-forward-icon">
                                            <i class="icon-arrow-right32"></i>
                                        </div>
                                    </a>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-app">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 app-ad">
                        <h3>Send Food On The Go!</h3>
                        <h5>Download our app and be able send food to anyone, anytime even on the go! Its in your pocket.</h5>
                        <a href="#"><img src="./assets/img/playstore.png" alt="Play Store" width="172px"></a>
                        <a href="#"><img src="./assets/img/appstore.png" alt="App Store" width="172px"></a>
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
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, copyright
                    <a href="https://www.sendchow.me">SendChow</a>. Distance broken.
                </div>
            </div>
        </footer>
    </div>
    @parent
    </body>

@endsection
