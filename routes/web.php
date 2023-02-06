<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

//When logged in, they cannot access the login form 
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Auth::routes();

Route::get('/home', [CompanyController::class, 'index'])->name('home');

Route::get('/company/{company}', [CompanyController::class, 'show']);

Route::get('/create', [CompanyController::class, 'create']);

Route::get('/create/id/{company}', [EmployeeController::class, 'create']);

Route::post('/addCompany', [CompanyController::class, 'store']);

Route::post('/addEmployee', [EmployeeController::class, 'store']);

Route::delete('/delete/{company}', [CompanyController::class, 'destroy']);

Route::get('/edit/{company}', [CompanyController::class, 'edit']);

Route::put('/editCompany/{company}' , [CompanyController::class, 'update']);



Route::middleware('auth')->group(function () {
    Route::view('about', 'main-contents.about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

