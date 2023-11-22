<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('admProdutos', function () {
    return view('admProdutos');
});
Route::get('clienteProdutos', function () {
    return view('clienteProdutos');
});

Route::get('consultacep', function () {
    return view('consultacep');
});
Route::get('dashboard', function () {
    return view('dashboard');
});



Route::post('/Produto','ProdutoController@store');
Route::get('/admProdutos/excluir/{id}','ProdutoController@destroy');
Route::get('/clienteProdutos/escolhido/{id}','ProdutoController@show');


Route::get('/admProdutos','ProdutoController@index');
Route::get('/dashboard','VendaController@index');
Route::get('/clienteProdutos','ProdutoController@index2');

Route::get('/login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registrar', [App\Http\Controllers\AuthManager::class, 'registrar'])->name('registrar');
Route::post('/registrar', [App\Http\Controllers\AuthManager::class, 'registrarPost'])->name('registrar.post');
Route::get('/logout', [App\Http\Controllers\AuthManager::class, 'logout'])->name('logout');

// Route::post('authenticate', ['as' => 'users.authenticate','uses' => 'usersController@authenticate']);