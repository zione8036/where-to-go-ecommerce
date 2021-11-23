@extends('user.main_master')
@section('content')
@php
$user = DB:: table('users')->where('id',Auth::user()->id)->first();
@endphp
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('user.profile.sidebar')
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-dark">Hi <strong>{{Auth::user()->name}}</strong> Welcome to Where to go</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection