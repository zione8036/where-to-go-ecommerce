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
                        <span class="text-dark"> Change password</span>
                    </h3>
                    <div class="card-body">
                        <form action="{{route('update.change.password')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Current password <span class="text-danger">*</span></label>
                                <input type="password" id="current_password" name="oldpassword" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">New password<span class="text-danger">*</span></label>
                                <input type="password" id="password" name="password" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirm password <span class="text-danger">*</span></label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control unicase-form-control text-input">
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection