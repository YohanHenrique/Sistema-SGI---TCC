<?php
use App\Http\Controllers\ClientesController;

use App\Http\Controllers\FuncionariosController;
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

Route::middleware(['auth'])->group(function () {

    Route::prefix('funcionarios')->group(function(){
        Route::get('/', [FuncionariosController::class, 'index'])->name('funcionarios-index');
        Route::get('/create', [FuncionariosController::class, 'create'])->name('funcionarios-create');
        Route::post('/', [FuncionariosController::class, 'store'])->name('funcionarios-store');
        Route::get('/{id}/edit', [FuncionariosController::class, 'edit'])->where('id', '[0-9]+')->name('funcionarios-edit');
        Route::put('/{id}', [FuncionariosController::class, 'update'])->where('id', '[0-9]+')->name('funcionarios-update');
        Route::delete('/{id}', [FuncionariosController::class, 'destroy'])->where('id', '[0-9]+')->name('funcionarios-destroy');
    });

    Route::prefix('clientes')->group(function(){
        Route::get('/', [ClientesController::class, 'index'])->name('clientes-index');
        Route::get('/create', [ClientesController::class, 'create'])->name('clientes-create');
        Route::post('/', [ClientesController::class, 'store'])->name('clientes-store');
        Route::get('/{id}/edit', [ClientesController::class, 'edit'])->where('id', '[0-9]+')->name('clientes-edit');
        Route::put('/{id}', [ClientesController::class, 'update'])->where('id', '[0-9]+')->name('clientes-update');
        Route::delete('/{id}', [ClientesController::class, 'destroy'])->where('id', '[0-9]+')->name('clientes-destroy');        
    });

    
});




Route::get('/', function () {
    return view('auth.login');
});


Route::fallback(function(){
    return view('dashboard');
});

//
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
