@extends('user.main_master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-6 col-sm-6 sign-in">
                    <h4 class="">Sign in</h4>
                    <p class="">Hello, Welcome to your account.</p>

                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" name="password" id="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="remember_me" name="remember">Remember me!
                            </label>
                            <div>
                                <br>
                                <br>
                                @if (Route::has('password.request'))
                                <a href="{{route('password.request')}}" type="submit" class="forgot-password">Forgot your Password?</a>
                                @endif
                            </div>

                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button pull-right">Sign in</button>
                    </form>
                </div>
                <!-- Sign-in -->


                <div class="col-md-6 col-sm-6 sign-in   ">
                    <h4 class="checkout-subtitle">Sign in using your account with : </h4>
                    <p class="text title-tag-line">Convenient & secured to sign in</p>
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        @include('user.body.brands')
    </div><!-- /.container -->
</div><!-- /.body-content -->
@endsection