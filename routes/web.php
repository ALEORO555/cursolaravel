<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma',[CursoController::class,'suma'])->name('suma');
Route::get('/resta',[CursoController::class,'resta'])->name('resta');
Route::get('/multiplicacion',[CursoController::class,'multiplicacion'])->name('multiplicacion');
Route::get('/division',[CursoController::class,'division'])->name('division');

