@extends('master')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper"   style='background: aqua;padding: 10px'>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Employee</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Add</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
             <div class="card card-default p-4  ">
                <div class="card-header">
                    <h3 class="card-title">Add new employee</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-3 float-left">

                                <label>First Name</label>
                                <input type='text'  class ='form-control'placeholder="Enter your first name ">
                            </div>

                            <div class="form-group col-md-3 float-left">

                            <label>Last Name</label>
                                <input type='text'  class ='form-control'placeholder="Enter your Last name ">
                            </div>
                        

                            <div class="form-group col-md-3 float-left">
                                <label>Email</label>
                                <input type='email'  class ='form-control'placeholder="Enter your Email ">
                            </div>

                            <div class="form-group col-md-3 float-left">
                                <label>Password</label>
                                <input type='password'  class ='form-control'placeholder="Enter your Phone ">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group col-md-3 float-left">

                                <label>Address</label>
                                <input type='text'  class ='form-control'placeholder="Enter your Address ">
                            </div>

                            <div class="form-group col-md-3 float-left">

                                <label>Work as </label>
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
                        

                            <div class="form-group col-md-3 float-left">
                                <label>Category</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="19">Belong to Category</option>
                                    <option data-select2-id="30">Moblies</option>
                                    <option data-select2-id="31">laptops </option>
                                    <option data-select2-id="32">Smart Phones</option>
                                    <option data-select2-id="33">Computers</option>
                                    <option data-select2-id="34">Electronics</option>
                                    
                                </select>
                               
                            </div>

                            <div class="form-group col-md-3 float-left">
                                <label>Status</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="19">Status</option>
                                    <option data-select2-id="30">Single</option>
                                    <option data-select2-id="31">Married </option>
                                </select>
                            </div>


                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="contain">
                                <div class="form-group col-md-3 float-left">
                                    <label>Salary</label>
                                    <input type='text'  class ='form-control'placeholder="Enter your Email ">
                                </div>

                                <div class="form-group col-md-3 float-left">
                                    <label>Price of Hour</label>
                                    <input type='text'  class ='form-control'placeholder="Enter your Phone ">
                                </div>
                            </div>
                           

                        </div>
                    </div>
                
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="form-group col-md-6 m-auto text-center">


                                <div id="wrapper" style='overflow:hidden'>
                                   <button class="btn-danger mb-4" style='position:relative;padding: 9px; border: none;border-radius: 20px;'>
                                      <span style='position: absolute;width:100%'>upload image</span>
                                      <input type="file" accept="image/*" onchange="preview_image(event)" style='opacity: 0;    '>
                                   </button>
    
                                   <img style='border-radius:20px;width:100%' id="output_image"/>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>

                  
                 
                    <div class="card-footer text-center" style='background:none'>
                        <div class="col-md-6 m-auto border-none">
                            <button class="btn-primary w-50 p-2 " onclick='window.print()' style='border:none;border-radius:20px;'>
                            <i class="fas fa-plus"></i>
                                <span>Add</span>
                               
                            </button>
                        </div>
                      
                    </div>
                </div>
                <!-- /.card-body -->
               
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    
</div>
     <!-- /.content-wrapper -->
@endsection

@section('javascript')
<script src="{{asset('js/employee/add.js')}}"></script>
@endsection