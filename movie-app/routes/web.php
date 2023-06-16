<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

    Route::resource('/movies', MovieController::class);

    Route resource adalah cara yang disediakan oleh Laravel yang secara otomatis menghasilkan rute (route) 
    yang konsisten dan standar untuk operasi CRUD (Create, Read, Update, Delete) pada suatu sumber daya (resource).
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index']);


Route::get('/movies/create', [MovieController::class, 'create']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']); 

Route::post('/movies', [MovieController::class, 'store']);

Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);

Route::put('/movies/{movie}', [MovieController::class, 'update']);


Route::get('/genres/create', [GenreController::class, 'create']);

Route::post('/genres', [GenreController::class, 'store']);

Route::get('/genres/{genre}/edit', [GenreController::class, 'edit']);

Route::put('/genres/{genre}', [GenreController::class, 'update']);

Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);


Route::get('/reviews/create', [ReviewController::class, 'create']);

Route::post('/reviews', [ReviewController::class, 'store']);

Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);

Route::put('/reviews/{review}', [ReviewController::class, 'update']);

Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);

Route::get('/reviews/create', [ReviewController::class, 'create']);


Route::post('/users', [UserController::class, 'store']);

Route::get('/users/{user}/edit', [UserController::class, 'edit']);

Route::put('/users/{user}', [UserController::class, 'update']);

Route::delete('/users/{user}', [UserController::class, 'destroy']);


Route::get('/movies',[MovieController::class, 'index']);

Route::get('/genres',[GenreController::class, 'index']);

Route::get('/reviews',[ReviewController::class, 'index']);

Route::get('/users',[UserController::class, 'index']);
