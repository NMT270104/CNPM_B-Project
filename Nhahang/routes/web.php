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



Route::get("/Admin/Home","App\Http\Controllers\Admin\AdminHomeController@index")->name("Admin.index");


Route::get("/Admin/Employee","App\Http\Controllers\Admin\AdminEmployeeController@index")->name("Admin.employee");

//CRUD nhanvien
Route::post("/Admin/Employee/add","App\Http\Controllers\Admin\AdminEmployeeController@add")->name("admin.employee.add");
Route::get("/Admin/Employee/{MANV}/edit","App\Http\Controllers\Admin\AdminEmployeeController@edit")->name("admin.employee.edit");
Route::put('Admin/Employee/{MANV}', 'App\Http\Controllers\Admin\AdminEmployeeController@update')->name('admin.employee.update');
Route::delete('/Admin/Employee/{MANV}/delete','App\Http\Controllers\Admin\AdminEmployeeController@delete')->name("admin.employee.delete");

Route::get("/Admin/Material","App\Http\Controllers\Admin\AdminMaterialController@index")->name("Admin.material");


Route::get("/Admin/Table","App\Http\Controllers\Admin\AdminTableController@index")->name("Admin.table");


Route::get("/Admin/TypeProduct","App\Http\Controllers\Admin\AdminTypeProductController@index")->name("Admin.typeproduct");



Route::get("/Admin/Product","App\Http\Controllers\Admin\AdminProductController@index")->name("Admin.product");





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
