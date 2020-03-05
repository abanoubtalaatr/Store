<?php 



Route::prefix('/admin/Bouns/')->name('Bouns.')->group(function () {

    Route::get('add',"BounsController@Add")->name('Add');
    Route::get('show',"BounsController@Show")->name('Show');
    Route::get('edit',"BounsController@Edit")->name('Edit');
    Route::get('category/{id}',"BounsController@Category")->name('Category');
    Route::get('All',"BounsController@All")->name('All  ');
   
    
});