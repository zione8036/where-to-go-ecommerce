@extends('user.main_master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class='active'>Forget password</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-10 sign-in">
                    <h4 class="">Forget Password</h4>
                    <p class="">Forgot your passwod? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input id="email" type="email" name="email" class="form-control unicase-form-control text-input">
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button pull-right">Reset</button>
                    </form>
                </div>
                <!-- Sign-in -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        @include('user.body.brands')
    </div><!-- /.container -->
</div><!-- /.body-content -->
@endsection