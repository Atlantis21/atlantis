<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\vpolis\HomeController;
use App\Http\Controllers\vpolis\InsuracarController;
use App\Http\Controllers\vpolis\IpotekaController;
use App\Http\Controllers\vpolis\FinansiController;
use App\Http\Controllers\vpolis\JobsController;
use App\Http\Controllers\vpolis\BlogController;
use App\Http\Controllers\vpolis\AboutController;
use App\Http\Controllers\vpolis\NewsController;
use App\Http\Controllers\vpolis\ContactController;

use App\Http\Controllers\ErrorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/finansi', [FinansiController::class, 'index'])->name('finansi');
Route::get('/osago', [InsuracarController::class, 'index'])->name('osago');
Route::get('/ipoteka', [IpotekaController::class, 'index'])->name('ipoteka');
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
