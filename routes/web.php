<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;




Route::get('/', [IndexController::class, 'index']);
Route::get('/nomes', [IndexController::class, 'nomes']);
Route::get('/posts', [IndexController::class, 'post']);



// pensei em criar uma rota para cada consulta. 
