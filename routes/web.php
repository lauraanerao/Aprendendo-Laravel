<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
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

Route::get('contato', function(){
    return view('contato');
});

Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('dashboard/create', [DashboardController::class, 'create']);

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/show/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
Route::put('posts/update/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/destroy/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('tasks', [TaskController::class, 'index']);
Route::get('tasks/create', [TaskController::class, 'create']);
Route::post('tasks/store', [TaskController::class, 'store']);
Route::get('tasks/edit', [TaskController::class, 'edit']);
Route::patch('tasks/update', [TaskController::class, 'update']);
Route::get('tasks/show', [TaskController::class, 'show']);
Route::delete('post/destroy', [TaskController::class, 'destroy']);






