<?php

use App\Http\Controllers\ExcelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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