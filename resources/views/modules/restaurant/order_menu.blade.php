@extends('layouts.app')
@section('title', "Restaurant")
@section('body')
    <body>
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{URL::asset("assets/img/restaurant-cover.jpg")}}');" >
            </div>
            <div class="content-center">
                <div class="photo-container">
                    <img src="./assets/img/restaurant-list.jpg" alt="logo">
                </div>
                <h3 class="title">{{$restaurant->title}}</h3>
                <p class="category">Nigerian, Pizza, Pasta, Bakery and Cake</p>
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
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#breakfast">Breakfast</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#chicken">Chicken</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#pastries">Pastries</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#drinks">Drinks</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="col-lg-10 category-contents">

                                                <section id="popular">
                                                    <div class="menu-category">
                                                        <div class="menu-category-header">
                                                            <h5>Popular</h5>
                                                            <img src="./assets/img/menu-header.jpg" alt="menu header" class="rounded">
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                        <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                    </span>
                                                                    <span class="menu-title">
                                                                        <h5>Food Item</h5>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0001">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,500</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0002">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦1,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0003">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                            <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                        </span>
                                                                    <span class="menu-title">
                                                                            <h5>Food Item</h5>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦3,500</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0004">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                        <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                    </span>
                                                                    <span class="menu-title">
                                                                        <h5>Food Item</h5>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,600</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0005">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </section>
                                                <div class="menu-header">
                                                    <h3>Menu Title</h3>
                                                </div>
                                                <section id="breakfast">
                                                    <div class="menu-category">
                                                        <div class="menu-category-header">
                                                            <h5>Breakfast</h5>
                                                            <img src="./assets/img/menu-header.jpg" alt="menu header" class="rounded">
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                            </span>
                                                                    <span class="menu-title">
                                                                                <h5>Food Item</h5>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦1,300</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0006">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦4,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0007">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,700</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0008">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                    <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                                </span>
                                                                    <span class="menu-title">
                                                                                    <h5>Food Item</h5>
                                                                                </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦1,800</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0009">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                        <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                    </span>
                                                                    <span class="menu-title">
                                                                        <h5>Food Item</h5>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦3,700</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0010">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id="chicken">
                                                    <div class="menu-category">
                                                        <div class="menu-category-header">
                                                            <h5>Chicken</h5>
                                                            <img src="./assets/img/menu-header.jpg" alt="menu header" class="rounded">
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                            </span>
                                                                    <span class="menu-title">
                                                                                <h5>Food Item</h5>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0001">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,500</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0002">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦1,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0003">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                    <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                                </span>
                                                                    <span class="menu-title">
                                                                                    <h5>Food Item</h5>
                                                                                </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦3,500</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0004">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                            </span>
                                                                    <span class="menu-title">
                                                                                <h5>Food Item</h5>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦4,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0007">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id="pastries">
                                                    <div class="menu-category">
                                                        <div class="menu-category-header">
                                                            <h5>Pastries</h5>
                                                            <img src="./assets/img/menu-header.jpg" alt="menu header" class="rounded">
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                            </span>
                                                                    <span class="menu-title">
                                                                                <h5>Food Item</h5>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦1,300</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0006">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦4,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0007">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,700</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0008">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                    <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                                </span>
                                                                    <span class="menu-title">
                                                                                    <h5>Food Item</h5>
                                                                                </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦1,800</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0009">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                                <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                            </span>
                                                                    <span class="menu-title">
                                                                                <h5>Food Item</h5>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦4,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0007">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id="drinks">
                                                    <div class="menu-category">
                                                        <div class="menu-category-header">
                                                            <h5>Drinks</h5>
                                                            <img src="./assets/img/menu-header.jpg" alt="menu header" class="rounded">
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                        <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                    </span>
                                                                    <span class="menu-title">
                                                                        <h5>Food Item</h5>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0001">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,500</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0002">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦1,000</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0003">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                        <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                    </span>
                                                                    <span class="menu-title">
                                                                        <h5>Food Item</h5>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,500</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0002">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="menu-container">
                                                            <div class="menu-content">
                                                                <div class="menu-content-with-image">
                                                                    <span class="menu-image">
                                                                        <img src="./assets/img/meal.jpg" alt="meal-image" class="rounded" width="60px">
                                                                    </span>
                                                                    <span class="menu-title">
                                                                        <h5>Food Item</h5>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="menu-variation-container">
                                                                <ul class="menu-variation">
                                                                    <li class="menu-item-variety">
                                                                        <span class="variety-title">1 Portion</span>
                                                                        <span class="variety-price">₦2,600</span>
                                                                        <button type="button" class="btn btn-neutral" product-id="0005">
                                                                            <i class="icon-import"></i>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
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
                        <div class="card card-cart sticky">
                            <table class="table table-shopping">
                                <thead>
                                <tr>
                                    <th colspan="4">Your Order</th>
                                </tr>
                                </thead>
                                <tbody class="cart">
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
                            <div class="cart-total-checkout gone">
                                <hr style="width: 90%">
                                <div class="cart-total">
                                    <div class="sub-total">
                                        Subtotal: <span class="sub-price">₦334,900</span>
                                    </div>
                                    <div class="sub-total">
                                        + Service Charge: <span class="service-charge">₦334,900</span>
                                    </div>
                                    <div class="sub-total">
                                        VAT Included: <span class="vat">₦334,900</span>
                                    </div>
                                    <div class="td-total">
                                        Total: ₦<span class="td-price">334,900</span>
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
            <div class="cart-bottom gone">
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
                            <tbody class="cart">
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
                                Subtotal: <span class="sub-price">₦334,900</span>
                            </div>
                            <div class="sub-total">
                                + Service Charge: <span class="service-charge">₦334,900</span>
                            </div>
                            <div class="sub-total">
                                VAT Included: <span class="vat">₦334,900</span>
                            </div>
                            <div class="td-total">
                                Total: ₦<span class="td-price">334,900</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('_footer')
    </div>
    @parent

    </body>

@endsection