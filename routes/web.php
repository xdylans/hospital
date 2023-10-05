<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Historias;
use App\Http\Controllers\MedicamentosController;


Route::get('/', function () {
    return view('home');
});
Route::prefix('medicamentos')->group(function(){
    Route::get('/', [MedicamentosController::class, 'index'])->name('medicamentos');
    Route::get('/create', [MedicamentosController::class, 'create'])->name('medicamentos-create');
    Route::post('/', [MedicamentosController::class, 'store'])->name('medicamentos-store');
    
});

Route::prefix('historiasclinicas')->group(function(){
    Route::get('/', [Historias::class, 'index'])->name('historiasclinicas');
    Route::get('/create', [Historias::class, 'create'])->name('historiasclinicas-create');
    Route::post('/create', [Historias::class, 'store'])->name('historiasclinicas-store');

});



Route::get('/inventario', function () {
    return view('inventario');
});
Route::get('/reportes', function () {
    return view('reportes');
});
Route::get('/inicio', function () {
    return view('inicio');
});

