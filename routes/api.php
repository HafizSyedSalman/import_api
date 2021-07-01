<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ExcelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PhonebookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::post('importExcel', [ExcelController::class, 'importExcelApi']);
Route::post('phonebook', [ExcelController::class, 'phonebook']);
Route::get('phonebookview', [ExcelController::class, 'phonebookview']);
Route::post('exportExcel', [ExcelController::class, 'exportExcel']);
Route::get('contact/import/google', [ContactController::class, 'importGoogleContact']);
Route::get('email/import/google', [EmailController::class, 'importGoogleEmail']);
Route::post('add_contact', [PhonebookController::class, 'add_contact'])->name('add_contact');







//Google Login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);


//Login Facebook
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);


//Login GitHub
Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleGithubCallback']);