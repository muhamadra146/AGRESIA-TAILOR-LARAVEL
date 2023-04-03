<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TablesCollectionController;
use App\Http\Controllers\TablesGalleryController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group; 

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'homeindex']);
Route::get('/pages-home',[HomeController::class,'homeindex'])->name('home');
Route::get('/pages-galerry',[GalleryController::class,'galerryindex']);
Route::get('/pages-contact',[ContactController::class,'contactindex']);
Route::get('/pages-collection',[CollectionController::class,'collectionindex']);

Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/TablesGallery',[TablesGalleryController::class,'index'])->name('tablesgallery');
Route::get('/Tablescollection',[TablesCollectionController::class,'index']);

Route::get('/Login',[LoginController::class,'index'])->name('login');
Route::post('/process-login',[LoginController::class,'Login'])->name('process-login');

Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/TablesGallery',[TablesGalleryController::class,'index'])->name('tablesgallery');
});

Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/Tablescollection',[TablesCollectionController::class,'index']);
});

Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
});