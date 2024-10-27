<?php
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', [Users::class, 'index'])->name('index');
Route::get('/create', [Users::class, 'create'])->name('create');
Route::post('/store', [Users::class, 'store'])->name('store');
Route::get('/show/{id}', [Users::class, 'show'])->name('show'); // mandamos el parametro en la ruta para mostrar
Route::get('/edit/{id}', [Users::class, 'edit'])->name('edit'); // esta ruta trae los datos del respectivo usuario
Route::put('/update/{id}', [Users::class, 'update'])->name('update'); //actualizar