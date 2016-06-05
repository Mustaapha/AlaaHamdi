<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*Admin Route*/

Route::group(['middleware' =>['web']], function () { 

    Route::get('/adminpanel','adminController@index');
	Route::get('/adminpanel/addadmin','adminController@addAdmin');
	
	Route::post('/adminpanel/storeAdmin','adminController@storeAdmin');
	Route::get('/adminpanel/main_setting','main_settingController@index');
	Route::post('/adminpanel/update/main_setting','main_settingController@store');

	Route::get('/adminpanel/view_edit_user/{id}','adminController@showFormEditUsers');

	Route::resource('/adminpanel/user_update','adminController');

	Route::get('/adminpanel/user_delete/{id}',
        array('as'=>'deleteuser','uses'=>'adminController@destroy'));


	Route::get('/adminpanel/add_gallery','galleryController@showFormAddGallery');
	Route::post('add_gallery','galleryController@store');

	Route::get('adminpanel/orders','orderController@showOrders');


});
	


/*Admin Route*/




Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/gallery','gallerycontroller@getGallery');

Route::get('/order','orderController@index');

Route::post('/add_order','orderController@store');

Route::get('/teamwork','teamworkController@index');

Route::get('/contactus','contactusController@index');