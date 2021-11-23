 @extends('admin.admin_master')
 @section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <div class="container-full">

     <section class="content">

         <!-- Basic Forms -->
         <div class="box">
             <div class="box-header with-border">
                 <h4 class="box-title">Change Password</h4>

             </div>
             <!-- /.box-header -->
             <div class="box-body">
                 <div class="row">
                     <div class="col">
                         <form action="{{route('admin.update.change.password')}}" method="POST">
                             @csrf
                             <div class="row">
                                 <div class="col-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <h5>Current password: <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="password" id="current_password" name="oldpassword" class="form-control" required="" data-validation-required-message="This field is required" value="">

                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <h5>New password: <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="password" id="password" name="password" class="form-control" required="" data-validation-required-message="This field is required" value="">

                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <h5>Confirm password: <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="" data-validation-required-message="This field is required" value="">

                                                 </div>
                                             </div>
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


 @endsection