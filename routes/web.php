<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;




Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/nomes', [IndexController::class, 'nomes'])->name('nomes');  
Route::get('/posts', [IndexController::class, 'post'])->name('post');  
Route::get('/ultimopost', [IndexController::class, 'ultimopt'])->name('ultimopt');  
Route::get('/bfiltro', [IndexController::class, 'consultacomfiltro'])->name('consultacomfiltro');  


// Route::get('/userpp/{post_id}', [IndexController::class, 'userByPost'])->name('userByPost');  



    

