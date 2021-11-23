@php
$user = DB:: table('users')->where('id',Auth::user()->id)->first();
@endphp
<br>
<img src="{{(!empty($user->profile_photo_path))? url('frontend/images/users/images/'.$user->profile_photo_path):url('frontend/images/no_image.jpg')}}" class="card-img-top" style="border-radius: 50%;" height="100%" width="100%">
<br>
<br>
<br>
<ul class="list-group">
    <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
    <a href="{{route('profile.edit')}}" class="btn btn-info btn-sm btn-block">Profile Update</a>
    <a href="{{route('change.password')}}" class="btn btn-warning btn-sm btn-block">Change Pasword</a>
    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
</ul>