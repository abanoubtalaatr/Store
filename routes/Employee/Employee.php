<?php 



Route::prefix('/admin/employee/')->name('Employee.')->group(function () {

    Route::get('add',"EmployeeController@Add")->name('Add');
    Route::get('show',"EmployeeController@Show")->name('Show');
    Route::get('edit',"EmployeeController@Edit")->name('Edit');
    Route::get('fire',"EmployeeController@Fire")->name('Fire');
    Route::get('prompt',"EmployeeController@Prompt")->name('Prompt');

    
});