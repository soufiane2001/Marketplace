<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Annonce;

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
    $Annonce=Annonce::all(); 
 

    return view('welcome',['annonces' =>$Annonce ]);
   
});

Auth::routes();
Route::get('/edite', [App\Http\Controllers\ProfileController::class, 'index'])->name('edite');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homes', [App\Http\Controllers\HomeController::class, 'filter'])->name('homes');
Route::get('/Addannonce', [App\Http\Controllers\AnnonceController::class, 'add'])->name('Addannonce');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/AnnonceDetails/{id}', [App\Http\Controllers\AnnonceController::class, 'index']);
Route::get('/deleteAnnonce/{id}', [App\Http\Controllers\AnnonceController::class, 'delete']);
Route::post('/Add', [App\Http\Controllers\AnnonceController::class, 'store'])->name('store');
Route::post('/edit', [App\Http\Controllers\AnnonceController::class, 'edit'])->name('edit');
Route::get('/Update/{id}', [App\Http\Controllers\AnnonceController::class, 'update']);

Route::get('/Message/{iduser}/{idannonceur}/{idannonce}', [App\Http\Controllers\ChatController::class, 'index']);