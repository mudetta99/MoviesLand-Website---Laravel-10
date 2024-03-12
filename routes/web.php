<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UsersComments;
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
    return to_route('movies.index');
});

Route::get('/home', function () {
    return to_route('movies.index');
});


// Dashboard Routes
Route::get('/moviesLand/dashboard', [MovieController::class, 'index'])->name('movies.index');

Route::get('/moviesLand/dashboard/addNewMovie', [MovieController::class, 'create'])->name('movies.create');

Route::post('/moviesLand/dashboard', [MovieController::class, 'store'])->name('movies.store');

Route::get('/moviesLand/dashboard/{movie}/Edit', [MovieController::class, 'edit'])->name('movies.edit');

Route::get('/moviesLand/dashboard/{movie}', [MovieController::class, 'show'])->name('movies.show');

Route::put('/moviesLand/dashboard/{movie}', [MovieController::class, 'update'])->name('movies.update');

Route::delete('/moviesLand/dashboard/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');


// Website Routes

Route::get('/MoviesLand', [WebsiteController::class, 'index'])->name('website.index');

Route::get('/MoviesLand/browse', [WebsiteController::class, 'browse'])->name('website.browse');

Route::get('/MoviesLand/4K', [WebsiteController::class, 'fourkMovies'])->name('website.4K');

Route::get('/MoviesLand/trending', [WebsiteController::class, 'trending'])->name('website.trending');

Route::get('/MoviesLand/suggestion', [WebsiteController::class, 'suggest'])->name('website.suggestion');

Route::get('/MoviesLand/bookmarks', [WebsiteController::class, 'bookmarks'])->name('website.bookmarks');

Route::get('/MoviesLand/register', [WebsiteController::class, 'register'])->name('website.register');

Route::get('/MoviesLand/login', [WebsiteController::class, 'login'])->name('website.login');

Route::post('/MoviesLand', [WebsiteController::class, 'user_registers'])->name('website.user_registers');

Route::get('/MoviesLand/{movie}', [WebsiteController::class, 'movieDetails'])->name('website.movieDetails');

Route::post('MoviesLand/{movie}/comment',  [UsersComments::class, 'userComment'])->name('website.commentSubmit');

