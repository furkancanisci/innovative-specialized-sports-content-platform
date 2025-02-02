<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Yetkili kullanıcılar için gösterilecek rotaları gruplandırma
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Genel rotalar
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/interviews', function () {
    return view('interviews');
})->name('interviews');

Route::get('/clubs', function () {
    return view('clubs');
})->name('clubs');

Route::get('/trainingvideos', function () {
    return view('trainingvideos');
})->name('trainingvideos');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

require __DIR__.'/auth.php';
