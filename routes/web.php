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


Route::group(['middleware'=>['auth','admin']], function () {
  Route::get('view', [TransactionController::class, 'view'])->name('view');
  Route::get('importExportView',[ExcelController::class,'importExportView'])->name('importExportView');
  Route::get('edit/{id}', [TransactionController::class, 'edit'])->name('edit');
  Route::post('update/{id}', [TransactionController::class, 'update'])->name('update');
  Route::get('destroy/{id}', [TransactionController::class, 'destroy'])->name('destroy');
    });




//Route::get('importExportView',[ExcelController::class,'importExportView'])->name('importExportView');

Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');
//Route::get('view', [TransactionController::class, 'view'])->name('view');
//Route::get('edit/{id}', [TransactionController::class, 'edit'])->name('edit');
//Route::post('update/{id}', [TransactionController::class, 'update'])->name('update');
//Route::get('destroy/{id}', [TransactionController::class, 'destroy'])->name('destroy');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Login Google
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//Login Facebook
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

//Login Twitter

Route::get('login/twitter', [App\Http\Controllers\Auth\LoginController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('login/twitter/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleTwitterCallback']);


//Login GitHub
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);


