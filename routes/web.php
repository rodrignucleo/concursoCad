<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcursoController;

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

Route::get('/concursos_new', [ConcursoController::class, 'new']);

Route::get('/novo_candidato', [ConcursoController::class, 'novocandidato']);
