<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route pour la page d'accueil
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Le groupe des routes relatives aux administrateurs uniquement
Route::middleware(['auth', 'admin'])->group(function () {

   // Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
   Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,

]);

    // Ajoutez d'autres routes comme edit, update, destroy ici...
});