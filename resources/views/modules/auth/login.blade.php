@extends('layouts.app')
@section('title', '| Login')
    @section('body')


    <body class="login-page">
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
            @include('_footer')
        </div>
        @parent
    </body>

    @endsection