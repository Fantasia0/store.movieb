<?php

use App\Http\Controllers\VideoController;
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
Route::get('/',[VideoController::class, 'index'])->name('home');

Route::get('/upload',[VideoController::class, 'upload'])->name('fileUpload');

Route::post('/store', [VideoController::class, 'store'])->name('video.store');
/* Route::post('upload', function(){

    request()->file('file')->store(

        
        'my-file',
        's3'
    );
    return back();
})->name('upload'); */


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
