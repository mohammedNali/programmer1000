<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);

// {blogPost} is called a wildcard
Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);

Route::get('/create', [BlogPostController::class, 'create']);
Route::post('/create', [BlogPostController::class, 'store']);

///blog/{{ $post->id }}/edit
Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit']);
Route::put('/blog/{blogPost}/edit', [BlogPostController::class, 'update']);

Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy']);





