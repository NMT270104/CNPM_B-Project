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



Route::get("/","App\Http\Controllers\Admin\AdminHomeController@index")->name("Admin.index");
Route::get("/Admin/Employee","App\Http\Controllers\Admin\AdminEmployeeController@index")->name("Admin.employee");
Route::get("/Admin/Material","App\Http\Controllers\Admin\AdminMaterialController@index")->name("Admin.material");
Route::get("/Admin/Table","App\Http\Controllers\Admin\AdminTableController@index")->name("Admin.table");