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



use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('home');

});
Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/getall', [EmployeeController::class, 'getall'])->name('getall');
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/employee/update', [EmployeeController::class, 'update'])->name('update');

Route::delete('/employee/delete', [EmployeeController::class, 'delete'])->name('delete');