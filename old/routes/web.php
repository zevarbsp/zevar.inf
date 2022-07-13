<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProfileController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['Admin'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/user.php';
require __DIR__.'/influencer.php';
require __DIR__.'/admin.php';
require __DIR__.'/brand.php';
