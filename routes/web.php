<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CropImageUploadController;




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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cropimage',[CropImageUploadController::class,'index'])->name('crop-image');
Route::post('/store',[CropImageUploadController::class,'store'])->name('store');




