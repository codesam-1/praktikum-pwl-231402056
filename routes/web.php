<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TodoTaskController;

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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [TodoTaskController::class, 'index']);
// view(nama viewnya, data yang dikirimkan ke view)

Route::post('/', [TodoTaskController::class, 'store']);

Route::delete('/{id}', [TodoTaskController::class, 'destroy']);