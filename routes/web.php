<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DenunciaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/denuncia', function () {
    return view('denuncia.create');
})->middleware(['auth'])->name('denunciar');

Route::get('/suas-denuncias', function () {
    return view('denuncia.view');
})->middleware(['auth'])->name('suas_denuncias');


// Route::get('/denuncia/create', 'App\Http\Controllers\DenunciaController@store')->middleware(['auth'])->name('criar_denuncia');


Route::post('/denuncia/create' , [DenunciaController::class, 'store'])->middleware(['auth'])->name('criar_denuncia');
Route::get('/denuncia/{denuncia}', [DenunciaController::Class, 'show'])->middleware(['auth'])->name('ver_denuncia');
Route::get('/denuncia/{id}/edit', [DenunciaController::class, 'edit'])->name('editar_denuncia');
Route::put('/denuncia/{id}', [DenunciaController::class, 'update']);
Route::delete('/denuncia/{id}', [DenunciaController::class, 'destroy'])->name('excluir_denuncia');

Route::get('/empresa/create', [EmpresaController::class, 'index']);
Route::post('/empresa/create' , [EmpresaController::class, 'store'])->name('create_empresa');

Route::resource('reclamante', RegisteredUserController::class)->middleware(['auth']);


require __DIR__.'/auth.php';
