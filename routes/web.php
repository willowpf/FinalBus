<?php
use App\Livewire\Buss\Index;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Buss\Team;
use App\Livewire\Buss\Create;
use App\Livewire\Buss\Edit;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/buss', Index::class)->name('buss.index');
    Route::get('/bus-routes/team', Team::class)->name('team');
    Route::get('/bus-routes/create',Create::class)->name('buss.create');
    Route::get('/bus-routes/{busRout}/edit', Edit::class)->name('buss.edit');

});

require __DIR__.'/auth.php';
