<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZipcodeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/zip-codes/{zip_code}', [ZipcodeController::class, 'index'])->where('zip_code', '[0-9]+');
