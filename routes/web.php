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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','Page\IndexController@index');

Route::get('{code}/{categ}/{sub}/{product}','Page\IndexController@productDetailsPage');

Route::get('{categ}/{sub}','Page\IndexController@productSubcategoryView');

Route::post('contact-us','Page\ContactController@contactEmailSent');


Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



################for admin and user###################

Route::group(['prefix'=>'{user}','where'=>['user'=> '[user|admin]+'],'middleware'=>['auth','verified']],
function(){
	Route::get('profile/view','ProfileController@index');
	Route::post('profile/image','ProfileController@ProfileImage');
	Route::get('cart/products','Cart\CartController@productCartOrder');
}
);
################for admin###################
Route::group(['prefix'=>'{user}','where'=>['user'=> '[admin]+'],'middleware'=>['auth','verified']],
function(){
	Route::get('inventory/category','Inventory\CategoryController@index');
	Route::post('inventory/category','Inventory\CategoryController@addCategory');
	Route::post('inventory/category/visibility','Inventory\CategoryController@categoryVisibiity');
	Route::post('inventory/category/delete','Inventory\CategoryController@categoryDelete');
	Route::post('inventory/category/update','Inventory\CategoryController@categoryUpdate');

	Route::get('inventory/sub-category','Inventory\SubCategoryController@index');
	Route::post('inventory/sub-category','Inventory\SubCategoryController@addSubCategory');
	Route::post('inventory/sub-category/visibility','Inventory\SubCategoryController@subCategoryVisibility');
	Route::post('inventory/sub-category/delete','Inventory\SubCategoryController@subCategoryDelete');
	Route::post('inventory/sub-category/update','Inventory\SubCategoryController@subCategoryUpdate');
###################for Product#####################

	Route::get('inventory/product','Inventory\ProductController@index');
	Route::post('inventory/product','Inventory\ProductController@addProduct');
	Route::post('inventory/product/delete','Inventory\ProductController@ProductDelete');
	Route::post('inventory/product/update','Inventory\ProductController@ProductUpdate');
	Route::post('inventory/product/visibility','Inventory\ProductController@ProductVisibility');
}
);

Route::post('{code}/{categ}/{sub}/{product}','Cart\CartController@productCartSelection')->middleware('auth');