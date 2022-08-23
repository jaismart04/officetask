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
// Route::group(['prefix' => 'auth'], function () {
use App\Http\Controllers\companycontroller;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\login;

Route::get('/', [login::class, 'index']);
Route::post('login-post', [login::class, 'checklogin']);
Route::get('logout', [login::class, 'logout']);
Route::get('notification', [login::class, 'notification']);


//Route::resource('article','Admin\BlogController');

Route::get('dashboard', [companycontroller::class, 'index']);
Route::get('company', [companycontroller::class, 'index']);
Route::post('company-save', [companycontroller::class, 'save']);
Route::get('company-edit/{id}', [companycontroller::class, 'edit']);
Route::post('company-update', [companycontroller::class, 'update']);
Route::get('company-delete/{id}', [companycontroller::class, 'delete']);

Route::get('first', [employeecontroller::class, 'index']);
Route::get('addemployee', [employeecontroller::class, 'add_employee']);
Route::post('employee-save', [employeecontroller::class, 'save']);
Route::get('employee-edit/{id}', [employeecontroller::class, 'edit']);
Route::post('employee-update', [employeecontroller::class, 'update']);
Route::get('employee-delete/{id}', [employeecontroller::class, 'delete']);

// Route::get('/', function () {
//     return view('company.company');
// });

Route::get('employee', function () {
    return redirect()->action([employeecontroller::class, 'index']);
});
/*
Route::get('addemployee', function () {
    return redirect()->action([employeecontroller::class, 'add_employee']);
});*/

Route::get('addcompany', function () {
    return redirect()->action([companycontroller::class, 'index']);
});
Route::get('add', function () {
    return view('company.add_company');
});