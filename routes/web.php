<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\PessoaFisicaController;
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

Route::get('/', [ConcursoController::class, 'index']);

Route::get('/concurso', [PessoaFisicaController::class, 'createPessoaFisica'], [InscricaoController::class, 'createPessoaFisica']);
Route::post('/concurso', [PessoaFisicaController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
