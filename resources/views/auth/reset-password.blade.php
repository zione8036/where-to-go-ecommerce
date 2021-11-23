@extends('user.main_master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class='active'>Reset Password</li>
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
                    <h4 class="">Reset Password</h4>
                    <p class="">You may now reset your password.</p>


                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input id="email" type="email" name="email" class="form-control unicase-form-control text-input">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input id="password" type="password" name="password" class="form-control unicase-form-control text-input">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Confirm Password <span>*</span></label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control unicase-form-control text-input">
                        </div>

                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button pull-right">RESET PASSWORD</button>
                    </form>
                </div>
                <!-- Sign-in -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        @include('user.body.brands')
    </div><!-- /.container -->
</div><!-- /.body-content -->
@endsection