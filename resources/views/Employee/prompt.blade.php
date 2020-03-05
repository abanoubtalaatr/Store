@extends('master')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper"   style='background: aqua;padding: 10px'>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
            </form> 
                </div><!-- /.col -->

                <div class="col-sm-6" style='text-align: end;'>
                   
                   <div class="col">
                    <a href="/admin/employee/add">
                        
                        <button class="btn-primary w-25 p-2" style='border:none;border-radius:20px'>
                        <i class='fas fa-plus'></i>
                        <span>Add</span>
                        
                        </button>
                    </a>
                   </div>
                  
                  
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default p-4  ">
                    <div class="card-header text-center">
                        <h3 class="card-title">Prompt</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <div class="col-md-12">
                                <div class="form-group col-md-4 float-left">

                                    <label>Full Name</label>
                                    <input type='text'  class ='form-control' placeholder='your Full name is ....'>
                                </div>

                                <div class="form-group col-md-4 float-left">

                                    <label>Job Title</label>
                                    <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="19">Job Title</option>
                                        <option data-select2-id="30">Super Manager</option>
                                        <option data-select2-id="31">Manager</option>
                                        <option data-select2-id="32">Manager Category</option>
                                        <option data-select2-id="33">Assisstant Super Manager</option>
                                        <option data-select2-id="34">Assisstant Manager</option>
                                        <option data-select2-id="35">Assisstant Manager Category</option>
                                        <option data-select2-id="33">Manager Reciever</option>
                                        <option data-select2-id="34">Assisstant Manager Reciever</option>
                                        <option data-select2-id="35">Worker</option>
                                        <option data-select2-id="35">Driver</option>
                                     </select>
                                </div>
                            

                                <div class="form-group col-md-4 float-left">
                                    <button class="btn-primary w-50 p-2 " style='border:none;border-radius:20px;margin-top:30px;'>Submit</button>
                                    
                                </div>

                                
                        </div>
                    </div>
            </div>
                <!-- /.card-body -->   
        </div>
               
         
       
    </section>
    <!-- /.content -->

    
</div>
     <!-- /.content-wrapper -->
@endsection

@section('javascript')
<script src="{{asset('js/employee/show.js')}}"></script>
@endsection