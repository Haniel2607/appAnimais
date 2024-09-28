<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimaisController;

//visualizar páginas
Route::get('/', [AnimaisController::class, 'MostrarHome'])->name('home');
Route::get('/cadastro-animal', [AnimaisController::class, 'MostrarCadastroAnimais'])->name('mostrar-cadastrar-Animais');

//Cadastrar animais
Route::post('/cadastro-animal', [AnimaisController::class,'CadastrarAnimais'])->name('cadastrar-Animais');