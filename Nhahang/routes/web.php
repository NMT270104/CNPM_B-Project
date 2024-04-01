<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



<<<<<<< HEAD
Route::get("/Admin/Home","App\Http\Controllers\Admin\AdminHomeController@index")->name("Admin.index");
Route::post("/Admin/Home/add","App\Http\Controllers\Admin\AdminHomeController@add")->name("admin.index.add");


=======
Route::middleware('auth')->group(function(){
Route::get("/","App\Http\Controllers\Admin\AdminHomeController@index")->name("Admin.index");
});
>>>>>>> 9c39038855890c2affa95ec3302ea1070e59cbe8

Route::middleware('admin')->group(function(){
Route::get("/Admin/Employee","App\Http\Controllers\Admin\AdminEmployeeController@index")->name("Admin.employee");
Route::post('/check-manv', 'App\Http\Controllers\Admin\AdminEmployeeController@checkMANV')->name('check.manv');
//CRUD nhanvien
Route::post("/Admin/Employee/add","App\Http\Controllers\Admin\AdminEmployeeController@add")->name("admin.employee.add");
Route::get("/Admin/Employee/{MANV}/edit","App\Http\Controllers\Admin\AdminEmployeeController@edit")->name("admin.employee.edit");
Route::put('Admin/Employee/{MANV}', 'App\Http\Controllers\Admin\AdminEmployeeController@update')->name('admin.employee.update');
Route::delete('/Admin/Employee/{MANV}/delete','App\Http\Controllers\Admin\AdminEmployeeController@delete')->name("admin.employee.delete");



Route::get("/Admin/Material","App\Http\Controllers\Admin\AdminMaterialController@index")->name("Admin.material");
//CRUD nguyen lieu
Route::post("/Admin/Material/add","App\Http\Controllers\Admin\AdminMaterialController@add")->name("admin.material.add");
Route::get("/Admin/Material/{MANL}/edit","App\Http\Controllers\Admin\AdminMaterialController@edit")->name("admin.material.edit");
Route::put('Admin/Material/{MANL}', 'App\Http\Controllers\Admin\AdminMaterialController@update')->name('admin.material.update');
Route::delete('/Admin/Material/{MANL}/delete','App\Http\Controllers\Admin\AdminMaterialController@delete')->name("admin.material.delete");



Route::get("/Admin/Table","App\Http\Controllers\Admin\AdminTableController@index")->name("Admin.table");
//CRUD ban
Route::post("/Admin/Table/add","App\Http\Controllers\Admin\AdminTableController@add")->name("admin.table.add");
Route::get("/Admin/Table/{MABAN}/edit","App\Http\Controllers\Admin\AdminTableController@edit")->name("admin.table.edit");
Route::put('Admin/Table/{MABAN}', 'App\Http\Controllers\Admin\AdminTableController@update')->name('admin.table.update');
Route::delete('/Admin/Table/{MABAN}/delete','App\Http\Controllers\Admin\AdminTableController@delete')->name("admin.table.delete");



Route::get("/Admin/TypeProduct","App\Http\Controllers\Admin\AdminTypeProductController@index")->name("Admin.typeproduct");
Route::post('/check-tenloai', 'App\Http\Controllers\Admin\AdminTypeProductController@checkTENLOAI')->name('check.tenloai');
//CRUD loai san pham
Route::post("/Admin/TypeProduct/add","App\Http\Controllers\Admin\AdminTypeProductController@add")->name("admin.typeproduct.add");
Route::get("/Admin/TypeProduct/{MALOAISP}/edit","App\Http\Controllers\Admin\AdminTypeProductController@edit")->name("admin.typeproduct.edit");
Route::put('Admin/TypeProduct/{MALOAISP}', 'App\Http\Controllers\Admin\AdminTypeProductController@update')->name('admin.typeproduct.update');
Route::delete('/Admin/TypeProduct/{MALOAISP}/delete','App\Http\Controllers\Admin\AdminTypeProductController@delete')->name("admin.typeproduct.delete");



Route::get("/Admin/Product","App\Http\Controllers\Admin\AdminProductController@index")->name("Admin.product");
//CRUD san pham
Route::post("/Admin/Product/add","App\Http\Controllers\Admin\AdminProductController@add")->name("admin.product.add");
Route::get("/Admin/Product/{MASP}/edit","App\Http\Controllers\Admin\AdminProductController@edit")->name("admin.product.edit");
Route::put('Admin/Product/{MASP}', 'App\Http\Controllers\Admin\AdminProductController@update')->name('admin.product.update');
Route::delete('/Admin/Product/{MASP}/delete','App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");

});

Auth::routes();


