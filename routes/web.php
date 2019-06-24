<?php

Route::get('/', function () {
    return view('welcome');
});


Route::match(['get','post'],'/admin', 'AdminController@login');

// Route::get('/admin', 'AdminController@login');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::group(['middleware' => ['auth']], function(){

		Route::get('admin/dashboard','AdminController@dashboard');
		Route::get('/admin/settings','AdminController@settings');
		Route::get('/admin/check-pwd','AdminController@chkPassword');
		Route::match(['get','post'], '/admin/update-pwd','AdminController@updatePassword');

    // Category Route
    Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
    Route::match(['get','post'],'admin/edit-category/{id}','CategoryController@editCategory');
    Route::match(['get','post'],'admin/delete-category/{id}','CategoryController@deleteCategory');
    Route::get('/admin/view-categories','CategoryController@viewCategories');

// MessagesControlles
    Route::get('/admin/messages/new_message','MessagesController@newMsg');
    Route::match(['get','post'],'admin/new-mes','MessagesController@addNewMsg');
    Route::get('/admin/messages/plan1','MessagesController@plan1');
    Route::get('/admin/messages/plan2','MessagesController@plan2');
    Route::get('/admin/messages/plan3','MessagesController@plan3');
    Route::get('/admin/messages/plan4','MessagesController@plan4');
    Route::match(['get','post'],'admin/addMsg1','MessagesController@add_plan1');
    Route::match(['get','post'],'admin/addMsg2','MessagesController@add_plan2');
    Route::match(['get','post'],'admin/addMsg3','MessagesController@add_plan3');
    Route::match(['get','post'],'admin/addMsg4','MessagesController@add_plan4');
    Route::get('/admin/messages/view_message1','MessagesController@viewMsg1');
    Route::get('/admin/messages/view_message2','MessagesController@viewMsg2');
    Route::get('/admin/messages/view_message3','MessagesController@viewMsg3');
    Route::get('/admin/messages/view_message4','MessagesController@viewMsg4');
    Route::get('/admin/messages/view_message5','MessagesController@viewMsg5');
    Route::match(['get','post'],'admin/delete-messages/{id}','MessagesController@deleteMsg');
    Route::match(['get','post'],'admin/messages/edit-messages/{id}','MessagesController@editMsg');

});




Route::get('/logout', 'AdminController@logout');
