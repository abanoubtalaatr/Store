@extends('master')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper"   style='background: aqua;padding: 10px'>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Bouns for Category</h1>
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
                    <h3 class="card-title">Add Bouns for category</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-4 float-left">

                                <label>Category</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="19">category</option>
                                    <option data-select2-id="30">Super Manager</option>
                                    <option data-select2-id="31">Manager</option>
                                    <option data-select2-id="32">Manager Category</option>
                                 
                                </select>
                            </div>

                            <div class="form-group col-md-4 float-left">

                                <label>Amount</label>
                                <input type='text'  class ='form-control'placeholder="Enter Amount in LE ">
                            </div>
                        

                            <div class="form-group col-md-4 float-left">
                                <label>Reason</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="19">Reason</option>
                                    <option data-select2-id="30">Super Manager</option>
                                    <option data-select2-id="31">Manager</option>
                                   
                                </select>
                            </div>

                            
                        </div>
                    </div>
                    <hr>
                
                   

                  
                 
                    <div class="card-footer text-center" style='background:none'>
                        <div class="col-md-6 m-auto border-none">
                            <button class="btn-primary w-50 p-2 " style='border:none;border-radius:20px;'>
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