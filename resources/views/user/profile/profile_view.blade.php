@extends('user.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('user.profile.sidebar')

                
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-dark">Hi <strong>{{Auth::user()->name}}</strong> Update your profile</span>
                    </h3>
                    <div class="card-body">
                        <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Profile Picture <span class="text-danger">*</span></label>
                                <input type="file" class="form-control unicase-form-control" name="profile_photo_path">

                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                                <input type="text " class="form-control unicase-form-control text-input" name="name" id="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email <span class="text-danger">*</span></label>
                                <input type="email " class="form-control unicase-form-control text-input" name="email" id="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone <span class="text-danger">*</span></label>
                                <input type="email " class="form-control unicase-form-control text-input" name="phone" id="phone" value="{{$user->phone}}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button pull-right">Update</button>
                            </div>

                        </form>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection