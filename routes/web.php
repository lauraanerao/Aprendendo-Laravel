<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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

Route::get('/', function(){
    return view('index');
});

Route::get('contato', function(){
    return view('contato');
});

Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('dashboard/create', [DashboardController::class, 'create']);

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/show', [PostController::class, 'show']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/edit', [PostController::class, 'edit']);
Route::post('posts/store', [PostController::class, 'store']);
Route::patch('posts/update', [PostController::class, 'update']);
Route::delete('posts/delete', [PostController::class, 'delete']);

