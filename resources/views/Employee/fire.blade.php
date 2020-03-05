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
                    <h3 class="card-title">Employees</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body text-center">
                        <div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                               <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">First Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Last Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Phone</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Controll</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Abanoub</td>
                                    <td>Talaat</td>
                                    <td>abanoubtalaat50@gmail.com</td>
                                    <td>01014636418</td>
                                    <td class ='text-center'>

                                     

                                        <a href="/admin/employee/fire/2">
                                            <button class="btn-danger mr-2  " style='border:none; padding: 6px 23px;border-radius: 6px;'>
                                                Fire
                                            </button>
                                        </a>
                                        

                                     
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Engy</td>
                                    <td>Talaat</td>
                                    <td>Engytalaat@gmail.com</td>
                                    <td>0101002002030</td>
                                    <td class='text-center'>

                                     
                                       

                                        <a href="/admin/employee/fire/2">
                                            <button class="btn-danger mr-2" style='border:none; padding: 6px 23px;border-radius: 6px;'>
                                                Fire
                                            </button>
                                        </a>
                                        

                                       
                                    </td>
                                </tr>
                                
                            </tbody>
                          
                        </table>
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
<script src="{{asset('js/employee/show.js')}}"></script>
@endsection