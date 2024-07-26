<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Con;
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

Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers','middleware' => ['auth', 'permission']], function()
{
    Route::get('/dashboard', [Con\HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [Con\HomeController::class, 'profile'])->name('users.profile');


    Route::resources([
        'roles' => Con\RoleController::class,
        'users' => Con\UserController::class,
        'permissions'=>Con\PermissionController::class
    ]);
});
