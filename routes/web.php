<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ProfileController;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/posts', [ProfileController::class, 'viewPosts'])->name('profile.posts');

    Route::get('/posts', [BlogPostController::class, 'index'])->name('posts.index');
    Route::post('/posts', [BlogPostController::class, 'store'])->name('posts.store');
    Route::get('/posts/create', [BlogPostController::class, 'create'])->name('posts.create');
    Route::get('/posts/{id}', [BlogPostController::class, 'show'])->name('posts.show');
    Route::put('/posts/{id}', [BlogPostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [BlogPostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{id}/edit', [BlogPostController::class, 'edit'])->name('posts.edit');
});

require __DIR__.'/auth.php';
