<?php

use App\Http\Controllers\DenunciaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/denuncia/create' , [DenunciaController::Class, 'store'])->middleware(['auth'])->name('criar_denuncia');
Route::get('/denuncia/{id}/edit', [DenunciaController::class, 'edit']);
Route::put('/denuncia/{id}', [DenunciaController::class, 'update']);
Route::delete('/denuncia{id}', [DenunciaController::class, 'destroy']);


require __DIR__.'/auth.php';

