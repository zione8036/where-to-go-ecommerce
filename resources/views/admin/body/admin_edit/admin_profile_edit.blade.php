 @extends('admin.admin_master')
 @section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <div class="container-full">

     <section class="content">

         <!-- Basic Forms -->
         <div class="box">
             <div class="box-header with-border">
                 <h4 class="box-title">Profile Edit</h4>

             </div>
             <!-- /.box-header -->
             <div class="box-body">
                 <div class="row">
                     <div class="col">
                         <form action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                 <div class="col-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <h5>Admin name: <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required" value="{{$editData -> name}}">

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <h5>Admin email: <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required" value="{{$editData -> email}}">
                                                 </div>
                                             </div>

                                         </div>

                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <h5>Profile image: <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="file" name="profile_photo_path" class="form-control" id="image" required="">

                                                 </div>
                                             </div>
                                         </div>
                                         
                                         <div class="col-md-6">
                                             <img id="showImage" src="{{(!empty($editData->profile_photo_path))? url('backend/admin_files/admin_images/'.$editData->profile_photo_path):url('backend/admin_files/no_image.jpg')}}" style="width: 100px; height: 100px;">
                                         </div>
                                     </div>

                                     <div class="text-xs-right">
                                         <button type="submit" type="submit" style="float: right;" class="btn btn-app btn-danger">
                                             <i class="fa fa-save"></i> Update
                                         </button>
                                     </div>
                         </form>

                     </div>
                     <!-- /.col -->
                 </div>
                 <!-- /.row -->
             </div>
             <!-- /.box-body -->
         </div>
         <!-- /.box -->

     </section>
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