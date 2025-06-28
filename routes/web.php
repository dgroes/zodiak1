<?php

use App\Livewire\Residents\Index;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view("log", 'log')
    ->middleware(['auth', 'verified'])
    ->name('log');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::middleware(['auth', 'verified'])->group(function () {
    // Otras rutas de tu aplicación...

    /**
     * Ruta para la gestión de residentes
     *
     * ¿Por qué usar Livewire::get()?
     * - Simplifica la integración de componentes Livewire
     * - Maneja automáticamente el montaje del componente
     * - Permite usar middleware de autenticación
     */
    Route::get('/residents', Index::class)
        ->name('residents.index')
        ->middleware('can:viewAny,App\Models\Resident');
});



require __DIR__ . '/auth.php';
