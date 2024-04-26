<?php

use App\Http\Controllers\DocumentTypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('document-type', [DocumentTypeController::class, 'index'])->name('document-type.index');
Route::get('document-type/create', [DocumentTypeController::class, 'create'])->name('document-type.create');
Route::get('document-type/{documentTypes}', [DocumentTypeController::class, 'show'])->name('document-type.show');
Route::post('document-type/store', [DocumentTypeController::class, 'store'])->name('document-type.store');
Route::get('document-type/{documentTypes}/edit', [DocumentTypeController::class, 'edit'])->name('document-type.edit');
Route::patch('document-type/{documentTypes}', [DocumentTypeController::class, 'update'])->name('document-type.update');
Route::delete('document-type/destroy', [DocumentTypeController::class, 'destroy'])->name('document-type.destroy');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
