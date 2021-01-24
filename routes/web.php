<?php

use App\Http\Controllers\BookController;
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
Route::get('/books', [BookController::class , 'index']);
Route::get('/create' , [BookController::class, 'create']);
Route::post('/created' , [BookController::class , 'store']);
Route::patch('/books/{book}', [BookController::class , 'updated']);
Route::get('books/{book}', [BookController::class ,'update']);
Route::delete('/books/{book}' , [BookController::class , 'destroy']);
Route::redirect('/', '/books', 301);

// Route::get('/', function () {
//     return view('welcome');
// });
