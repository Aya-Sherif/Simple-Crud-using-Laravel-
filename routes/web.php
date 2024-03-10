<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('About', [AboutController::class,'index']);

Route::get('Contact', [ContactController::class,'index']);
Route::get('Posts', [PostsController::class,'index']);
Route::get('posts/create', [PostsController::class,'create']);
Route::post('Posts', [PostsController::class,'store']);
Route::get('Posts/{id}/edit', [PostsController::class,'edit']);
Route::delete('Posts/{id}', [PostsController::class,'destroy']);//{This curll bracess is for the id is changable}
Route::put('Posts/{id}', [PostsController::class,'update']);//{This curll bracess is for the id is changable}


/* all the methods created in the above line can be replaced by this line after using this command  php artisan make:model Category -a  */
Route::resource('categories',CategoryController::class);
