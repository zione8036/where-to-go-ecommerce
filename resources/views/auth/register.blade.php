@extends('user.main_master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class='active'>Register</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle">Create a new account</h4>
                    <p class="text title-tag-line">Create your new account.</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                            <input id="name" type="text" name="name" class="form-control unicase-form-control text-input">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{($message)}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                            <input id="email" type="email" name="email" class="form-control unicase-form-control text-input">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{($message)}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Phone <span>*</span></label>
                            <input id="phone" type="phone" name="phone" class="form-control unicase-form-control text-input">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{($message)}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                            <input id="password" type="password" name="password" class="form-control unicase-form-control text-input">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{($message)}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control unicase-form-control text-input">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{($message)}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                Already Registered?
                            </a>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button pull-right">Sign Up</button>
                    </form>
                </div>
                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 sign-in   ">
                    <h4 class="checkout-subtitle">Sign up using your account with : </h4>
                    <p class="text title-tag-line">Convenient & secured to sign up</p>
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