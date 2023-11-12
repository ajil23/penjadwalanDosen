<?php

use App\Http\Controllers\prodiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');
});

Route::prefix('dataProdi')->group(function (){
    Route::get('/view', [prodiController::class, 'index'])->name('prodi.view');
    Route::get('/add', [prodiController::class, 'create'])->name('prodi.add');
    Route::get('/edit/{id}', [prodiController::class, 'edit'])->name('prodi.edit');
    Route::post('/update/{id}', [prodiController::class, 'update'])->name('prodi.update');
    Route::get('/delete/{id}', [prodiController::class, 'delete'])->name('prodi.delete');
    Route::post('/store', [prodiController::class, 'store'])->name('prodi.store');
});