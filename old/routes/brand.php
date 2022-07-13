<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Brand\ProfileController;



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



Route::group(['prefix' => 'brand','middleware' => 'Brand'],  function()
{
    //All the routes that belongs to the group goes here
    //Route::get('/addprofile', 'ProfileController::class');
    Route::get('/addprofile',[ProfileController::class, 'create'])->name('add.profile');
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/updateProfile',[ProfileController::class, 'index'])->name('updateProfile');
});