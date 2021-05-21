<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\TransactionController;

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
Route::get('importExportView',[ExcelController::class,'importExportView'])->name('importExportView');

Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');
Route::get('view', [TransactionController::class, 'view'])->name('view');
Route::get('edit/{id}', [TransactionController::class, 'edit'])->name('edit');
Route::post('update/{id}', [TransactionController::class, 'update'])->name('update');
Route::get('destroy/{id}', [TransactionController::class, 'destroy'])->name('destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
