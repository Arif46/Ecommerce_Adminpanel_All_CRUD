<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'Admin\AdminController@adminDashboard')->name('admin'); //name hosse root er name fixed kre dawar jnno

//start category
Route::get('/categorypage', 'CategoryController@addcategory')->name('categorypage');//name hosse root er name fixed kre dawar jnno
Route::post('/addCategory', 'CategoryController@createcategory')->name('addCategory');
Route::get('/allcategory', 'CategoryController@GetallCategory')->name('allcategory');
Route::get('/categoryEdit/{id}', 'CategoryController@EditCategory')->name('categoryEdit');
Route::post('/categoryUpdate', 'CategoryController@categoryupdate')->name('categoryUpdate');
Route::get('/categorydelete/{id}', 'CategoryController@DeleteCategory')->name('categorydelete');
//end category

//start subcategory
Route::get('/subcategorypage', 'SubcategoryController@addsubcategory')->name('subcategorypage');
Route::post('/addSubCategory', 'SubCategoryController@createsubcategory')->name('addSubCategory');
Route::get('/allsubcategory','SubcategoryController@GetAllSubCategory')->name('allsubcategory');
Route::get('/subcategoryEdit/{id}','SubcategoryController@EditSubCategory')->name('subcategoryEdit');
Route::post('/subcategoryUpdate','SubcategoryController@subcategoryUpdate')->name('subcategoryUpdate');
Route::get('/subtegorydelete/{id}','SubcategoryController@deleteSubcategory')->name('subtegorydelete');

//Brand
Route::get('/brandpage','BrandController@addbrand')->name('brandpage');
Route::post('/addBrand','BrandController@createbrand')->name('addBrand');
Route::get('/allbrand','BrandController@getBrand')->name('allbrand');
Route::get('/brandEdit/{id}','BrandController@brandEdit')->name('brandEdit');
Route::post('/updateBrand','BrandController@brandupdate')->name('updateBrand');
Route::get('/brandDelete/{id}','BrandController@Deletebrand')->name('brandDelete');
//end brand

//start Product
Route::get('/productpage','ProductController@addproductpage')->name('productpage');
Route::post('/addProduct','ProductController@addproduct')->name('addProduct');
Route::get('/allProduct','ProductController@GetProduct')->name('allProduct');
// Route::get('/productedit/{id}','ProductController@editProduct')->name('productedit');
// Route::post('/updateProduct/{id}','ProductController@UpdateProduct')->name('updateProduct');
Route::get('/Productdelete/{id}','ProductController@deleteProduct')->name('Productdelete');

//end product

//shipment start
Route::get('/shipmentpageadd','ShipmentController@addpage')->name('shipmentpageadd');
Route::post('/addshipment','ShipmentController@createShipment')->name('addshipment');
Route::get('/allshipment','ShipmentController@getallshipment')->name('allshipment');
Route::get('/editShipment/{id}','ShipmentController@shipmentedit')->name('editShipment');
Route::post('/updateshipment','ShipmentController@shipmentupdate')->name('updateshipment');
Route::get('/deleteshipment/{id}','ShipmentController@shipmentdelete')->name('deleteshipment');
//end Shipment

//start orders
Route::get('/addorderpage','OrderController@addpage')->name('addorderpage');
Route::post('/insertorder','OrderController@createorder')->name('insertorder');
Route::get('/showorder','OrderController@GetOrder')->name('showorder');
Route::get('/editOrder/{id}','OrderController@OrderEdit')->name('editOrder');
Route::post('/UpdateOrder','OrderController@Orderupdate')->name('UpdateOrder');
Route::get('/delete/{id}','OrderController@orderdelete')->name('delete');

