 @extends('admin.admin_master')
 @section('admin')
 <div class="container-full">

     <!-- Main content -->
     <section class="content">
         <div class="row">
             <div class="box box-widget widget-user">
                 <!-- Add the bg color to the header using any of the bg-* classes -->
                 <div class="widget-user-header bg-black">
                     <h3 class=" widget-user-username">Name: {{$adminData->name}}</h3>
                     <a style="float: right;" class="btn btn-app btn-info" href="{{route('admin.profile.edit')}}">
                         <i class="fa fa-edit"></i> Edit
                     </a>
                     <h6 class="widget-user-desc">Email: {{$adminData->email}}</h6>
                 </div>
                 <div class="widget-user-image">
                     <img class="rounded-circle" src="{{(!empty($adminData->profile_photo_path))? url('backend/admin_files/admin_images/'.$adminData->profile_photo_path):url('backend/admin_files/no_image.jpg')}}" alt="User Avatar">
                 </div>
                 <div class="box-footer">
                     <div class="row">
                         <div class="col-sm-4">
                             <div class="description-block">
                                 <h5 class="description-header">158</h5>
                                 <span class="description-text">TWEETS</span>
                             </div>
                             <!-- /.description-block -->
                         </div>
                         <!-- /.col -->
                         <div class="col-sm-4 br-1 bl-1">
                             <div class="description-block">
                                 <h5 class="description-header">{{$adminData->created_at->diffForHumans()}}</h5>
                                 <span class="description-text">Created at</span>
                             </div>
                             <!-- /.description-block -->
                         </div>
                         <!-- /.col -->
                         <div class="col-sm-4">
                             <div class="description-block">
                                 <h5 class="description-header">158</h5>
                                 <span class="description-text">TWEETS</span>
                             </div>
                             <!-- /.description-block -->
                         </div>
                         <!-- /.col -->
                     </div>
                     <!-- /.row -->
                 </div>
             </div>
         </div>
     </section>
     <!-- /.content -->
 </div>
 @endsection