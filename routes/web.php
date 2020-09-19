<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*//// for admin routes


Route::get('/admin/products', 'admin\ProductsController@index' );
Route::get('/admin/products/create', 'admin\ProductsController@create' );
Route::post('/admin/products/store', 'admin\ProductsController@store' );

Route::get('/admin/products/edit/{id}', 'admin\ProductsController@edit');
Route::post('/admin/products/update/{id}', 'admin\ProductsController@update');

Route::get('/admin/products/delete/{id}','admin\ProductsController@delete' );


//

Route::get('/admin/sliders', 'admin\SlidersController@index' );
Route::get('/admin/sliders/create', 'admin\SlidersController@create' );
Route::post('/admin/sliders/store', 'admin\SlidersController@store' );

Route::get('/admin/sliders/edit/{id}', 'admin\SlidersController@edit');
Route::post('/admin/sliders/update/{id}', 'admin\SlidersController@update');

Route::get('/admin/sliders/delete/{id}','admin\SlidersController@delete' );




//

Route::get('/admin/users', 'admin\UsersController@index' );
Route::get('/admin/users/edit/{id}', 'admin\UsersController@edit');
Route::post('/admin/users/update/{id}', 'admin\UsersController@update');
Route::get('/admin/users/delete/{id}','admin\UsersController@delete' );

//



Route::get('/admin/orders', 'admin\OrdersController@index' );
Route::get('/admin/orders/show/{id}', 'admin\OrdersController@show');
Route::post('/admin/orders/update/{id}', 'admin\OrdersController@update');
Route::get('/admin/orders/delete/{id}','admin\OrdersController@delete' );

//


//



Route::get('/admin/services', 'admin\ServicesController@index' );
Route::get('/admin/services/create', 'admin\ServicesController@create' );
Route::post('/admin/services/store', 'admin\ServicesController@store' );
Route::post('/admin/services/update/{id}', 'admin\ServicesController@update');
Route::get('/admin/services/delete/{id}','admin\ServicesController@delete' );
Route::get('/admin/services/edit/{id}','admin\ServicesController@edit' );


//

Route::get('/admin/companies', 'admin\CompaniesController@index' );
Route::get('/admin/companies/create', 'admin\CompaniesController@create' );
Route::post('/admin/companies/store', 'admin\CompaniesController@store' );
Route::post('/admin/companies/update/{id}', 'admin\CompaniesController@update');
Route::get('/admin/companies/delete/{id}','admin\CompaniesController@delete' );
Route::get('/admin/companies/edit/{id}','admin\CompaniesController@edit' );
//


Route::get('/admin/categories', 'admin\CategoriesController@index' );
Route::get('/admin/categories/create', 'admin\CategoriesController@create' );
Route::post('/admin/categories/store', 'admin\CategoriesController@store' );

Route::get('/admin/categories/edit/{id}', 'admin\CategoriesController@edit');
Route::post('/admin/categories/update/{id}', 'admin\CategoriesController@update');

Route::get('/admin/categories/delete/{id}','admin\CategoriesController@delete' );

//


Route::get('/admin/pages', 'admin\PagesController@index' );
Route::get('/admin/pages/create', 'admin\PagesController@create' );
Route::post('/admin/pages/store', 'admin\PagesController@store' );

Route::get('/admin/pages/edit/{id}', 'admin\PagesController@edit');
Route::post('/admin/pages/update/{id}', 'admin\PagesController@update');

Route::get('/admin/pages/delete/{id}','admin\PagesController@delete' );

//

Route::get('/admin/settings', 'admin\SettingsController@index' );
Route::post('/admin/settings/update', 'admin\SettingsController@update');



// frontend routes
Route::group([ 'middleware' => 'ProjectGlobal' ],function(){

  Route::get('/logout', 'LoginsController@logout' );
  Route::get('/login', 'LoginsController@login' );
  Route::post('/login', 'LoginsController@authenticate' );
  Route::get('/register', 'RegisterController@register' );
  Route::post('/register', 'RegisterController@doRegister' );

  Route::get('/', 'HomeController@index' );
  Route::get('/page/{link}', 'PagesController@details' );
  Route::get('/category/{link}', 'CategoriesController@details' );
  Route::get('/search', 'CategoriesController@search' );
  
  Route::group([ 'middleware' => 'UserAuth' ],function(){
  Route::get('/admin', 'admin\DashboardController@index2' );



    Route::get('myorder', 'UsersController@myorder' );

    Route::get('/profile', 'UsersController@profile' );
    Route::post('/profile/update', 'UsersController@update2' );

    Route::get('/cart', 'CartController@index' );
    Route::get('/cart/add/{id}', 'CartController@add' );
    Route::get('/cart/delete/{id}', 'CartController@delete' );
    Route::get('/checkout', 'CheckoutController@index' );
    Route::post('/checkout/store', 'CheckoutController@store' );


    Route::get('/category/{id}', 'CategoriesController@details' );
    Route::get('/product/{id}', 'ProductsController@details' );
    Route::get('/search/{word}', 'ProductsController@search' );

  });
});
