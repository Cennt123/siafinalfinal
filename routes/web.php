<?php

use App\Http\Controllers\OfficalController;
use App\Models\Offical;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/officials', function() {
    return view('officials');
});


Route::get('/officials', [OfficalController::class, 'index']);

Route::get('/officials/csv-all', [OfficalController::class, 'generateCSV']);

Route::get('/officials/pdf', [OfficalController::class, 'pdf']);


Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');


Route::post('/officials/import', [OfficalController::class, 'importCsv'])->name('official.import');
// Route::get('/officials/{id}', [OfficalController::class, 'show'])->name('official.show');
Route::get('/officials', [OfficalController::class, 'index'])->name('officials');

Route::get('/officials/create', [OfficalController::class, 'create']);
Route::post('/officials/store', [OfficalController::class, 'store'])->name('officials.store');

Route::get('/officials/{id}/edit', [OfficalController::class, 'edit'])->name('officials.edit');
Route::put('/officials/{official}', [OfficalController::class, 'update'])->name('officials.update');
Route::put('/officials/{official}', [OfficalController::class, 'update'])->name('officials.update');

Route::delete('/officials/{id}', [OfficalController::class, 'destroy'])->name('officials.destroy');
