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
*/
/*para dar rutas */
Route::group(['middleware'=>'Admin'], function()
{
  Route::resource('categories','CategoriesController');
});

  Route::resource('products','ProductsController');
  Route::resource('orders','OrdersController');



/*Solo guarda*/
Route::resource('shopping_carts','ShoppingCartsController',['only'=>['store','destroy']]);
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/main','MainController@main');
Route::get('/home', 'HomeController@index')->name('home');
