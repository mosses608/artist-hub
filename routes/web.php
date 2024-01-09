<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestResponseController;
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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/show/{listing}', [ListingController::class, 'show'])->middleware('auth');

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::get('users/create', [UsersController::class, 'create']);

Route::post('/users', [UsersController::class, 'store']);

Route::post('/logout', [UsersController::class, 'logout']);

Route::get('/users/login', [UsersController::class, 'login'])->name('login');

Route::post('/authenticate', [UsersController::class, 'authenticate']);

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

Route::get('/listings/news/{listing}', [MessageController::class, 'postNews'])->middleware('auth');

Route::post('/messages',[MessageController::class, 'news']);

Route::get('/listings/updates', [MessageController::class, 'updates']);

Route::get('/listings/collaboration/{listing}', [CollaborationController::class, 'collaborate'])->middleware('auth');

Route::post('/collaborations',[CollaborationController::class, 'collaboration_store'])->middleware('auth');

Route::get('/listings/admin', [AdminController::class, 'signIn']);

Route::get('/listings/administration', [AdminController::class, 'welcome']);

Route::post('/authentication', [AdminController::class, 'authentication']);

Route::get('/listings/collabo', [CollaborationController::class, 'collabo']);

Route::post('/responses', [RequestResponseController::class, 'responses']);

Route::get('/listings/reply', [RequestResponseController::class, 'reply']);

Route::get('/about/programe', [ListingController::class, 'programe']);
