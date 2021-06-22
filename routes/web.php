<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\TransactionController;
//use App\Http\Controllers\LoginController;
use App\Http\Controllers\SendMailController;
//use App\Http\Controllers\SmsController;
use App\Http\Controllers\BulkSmsController;
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
    return view('auth/login');
});

// Route::post('/sms', [SmsController::class, 'sendSms'])->name('sms');

// Route::get('/', function () {
//   return view('bulksms');
// });
// Route::post('/bulksms', [BulkSmsController::class, 'sendSms'])->name('bulksms');

Route::group(['middleware'=>['auth','admin']], function () {
  //Route::get('view', [TransactionController::class, 'view'])->name('view');
  Route::get('user_record/{id}', [TransactionController::class, 'user_record'])->name('user_record');
  Route::get('datatable', [TransactionController::class, 'datatable'])->name('datatable');
  Route::get('importExportView',[ExcelController::class,'importExportView'])->name('importExportView');
  Route::post('add_contact', [TransactionController::class, 'add_contact'])->name('add_contact');
  Route::get('edit/{id}', [TransactionController::class, 'edit'])->name('edit');
  Route::post('update', [TransactionController::class, 'update'])->name('update');
  Route::get('destroy/{id}', [TransactionController::class, 'destroy'])->name('destroy');
  Route::post('delete', [TransactionController::class, 'delete'])->name('delete');
    });
    Auth::routes();

// <--- Simple User Route---->
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('add_contact', [TransactionController::class, 'add_contact'])->name('add_contact');
Route::get('edit/{id}', [TransactionController::class, 'edit'])->name('edit');
Route::post('update', [TransactionController::class, 'update'])->name('update');
Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');


//Route::get('importExportView',[ExcelController::class,'importExportView'])->name('importExportView');
//Route::get('view', [TransactionController::class, 'view'])->name('view');
//Route::get('edit/{id}', [TransactionController::class, 'edit'])->name('edit');
//Route::post('update/{id}', [TransactionController::class, 'update'])->name('update');
//Route::get('destroy/{id}', [TransactionController::class, 'destroy'])->name('destroy');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('send-sms-message', [App\Http\Controllers\MessageController::class, 'sendSmsToMobile'])->name('sendSmsToMobile');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

// Send Email Route
Route::get('send/mail', [SendMailController::class, 'send_mail'])->name('send/mail');

Route::get('/notification', [App\Http\Controllers\SendMailController::class, 'notification'])->name('notification');
Route::get('/index', [SendMailController::class, 'index'])->name('index');

Route::get('emailsetting', [SendMailController::class, 'index'])->name('emailsetting');
Route::post('setting-store', [SendMailController::class, 'store'])->name('settingStore');
// Route::post('updateSetting', [SendMailController::class, 'updateSetting'])->name('updateSetting');
Route::get('sendEmail', [SendMailController::class, 'sendEmailView'])->name('sendEmail');
Route::post('sendEmail', [SendMailController::class, 'sendEmail'])->name('sendEmail.post');
Route::get('sendEmailfile', [SendMailController::class, 'sendEmailfile'])->name('sendEmailfilet');