<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Admin','middleware'=>[
    'web','verified','auth','admin']], function() {

        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
        Route::resource('user', UserController::class);
        Route::resource('shift',ShiftController::class);
        Route::resource('role',RoleController::class);
        Route::resource('trainer-shift',TrainerShiftController::class);
        Route::resource('members',MemberShiftController::class);
        

    });

    
Route::group(['as'=>'trainer.','prefix'=>'trainer', 'namespace'=>'App\Http\Controllers\Trainer','middleware'=>[
    'web','verified','auth','trainer']], function() {
        Route::get('/dashboard', [App\Http\Controllers\Trainer\DashboardController::class, 'index'])->name('home');
    });

    
Route::group(['as'=>'member.','prefix'=>'member', 'namespace'=>'App\Http\Controllers\Member','middleware'=>[
    'web','verified','auth','member']], function() {
        Route::get('/dashboard', [App\Http\Controllers\Member\DashboardController::class, 'index'])->name('home');
    });

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
