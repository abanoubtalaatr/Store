<?php 



Route::prefix('/admin/Discount/')->name('Discount.')->group(function () {

    Route::get('add',"DiscountController@Add")->name('Add');
    Route::get('show',"DiscountController@Show")->name('Show');
    Route::get('edit',"DiscountController@Edit")->name('Edit');
    Route::get('category/{id}',"DiscountController@Category")->name('Category');
    Route::get('All',"DiscountController@All")->name('All  ');
   
    
});