<?php



Route::get('/', function () {
    return view('welcome');
});

/* LOGIN */


Route::get('/usuario', function () {
    return view('usuario');
});

// Route::get('login', function () {
//     return view('login');
// });

Route::get('login',array('as'=>'login',function(){
    return view('login');
}));

Route::post('/usuario','Auth\RegisterController@store');

Route::post('login','Auth\RegisterController@verifyUser');

Route::get('/logout','Auth\RegisterController@logoutUser');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::get('admProdutos', function () {
    return view('admProdutos');
})->middleware('auth');

Route::get('clienteProdutos', function () {
    return view('clienteProdutos');
})->middleware('auth');

Route::get('consultacep', function () {
    return view('consultacep');
})->middleware('auth');
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');



Route::post('/Produto','ProdutoController@store')->middleware('auth');
Route::get('/admProdutos/excluir/{id}','ProdutoController@destroy')->middleware('auth');
Route::get('/clienteProdutos/escolhido/{id}','ProdutoController@show')->middleware('auth');


Route::get('/admProdutos','ProdutoController@index')->middleware('auth');
Route::get('/dashboard','VendaController@index')->middleware('auth');
Route::get('/clienteProdutos','ProdutoController@index2')->middleware('auth');


