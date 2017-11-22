@extends('layouts.app')
@section('title', 'Find Restaurants')
@section('body')
    <body class="restaurant-page">

    <div class="wrapper">
        <div class="page-header page-header-mini">
            <div class="page-header-image" data-parallax="true"  style="background-image: url('{{URL::asset("assets/img/restaurant.jpg")}}');">
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
                                            @foreach($cuisines as $cuisine)
                                                <div class="checkbox">
                                                    <input type="checkbox" checked="">
                                                    <label for="nigerian">{{$cuisine->cuisine}}</label>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <ul class="vendor-list">

                            @foreach($restaurants as $restaurant)
                                <li class="vendor">
                                    <div>
                                        <a href="order_menu.html" class="vendor-nav">
                                            <div class="vendor-image">
                                                <img src="{{URL::asset('assets/img/restaurant-list.jpg')}}" width="80px" height="80px" class="rounded-circle" alt="restaurant">
                                            </div>
                                            <div class="vendor-info">
                                                <div class="vendor-name">
                                                    <h4>{{$restaurant->title}}</h4>
                                                </div>
                                                <ul class="vendor-cuisine">
                                                    @foreach($restaurant->cuisines as $cuisine)
                                                        <li>{{$cuisine}}</li>
                                                    @endforeach
                                                </ul>

                                                <div class="vendor-details">
                                                    <div class="vendor-afford">
                                                        <span>₦₦</span>₦
                                                    </div>
                                                    <div class="vendor-rating">
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
                                            <div class="vendor-forward-icon">
                                                <i class="icon-arrow-right32"></i>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include ('_big_footer')
        @include('_footer')
    </div>
    @parent
    </body>

@endsection
