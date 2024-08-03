<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ProfileController;
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

// USER ROUTES ------------------------------------------------------------->

Route::get('/', function () {
    return redirect()->route('accueil');
});

Route::get('/accueil', function () {
    return view('user.home');
})->name('accueil');

Route::get('/actualites', function () {
    return view('actualites');
})->name('actualites');


Route::get('/annonces-legales-constitution-sarl-sarlau-snc-scs-sca', [AnnonceController::class, 'index'])->name('annonces-legales-constitution-sarl-sarlau-snc-scs-sca');
Route::post('/annonces-legales-constitution-sarl-sarlau-snc-scs-sca', [AnnonceController::class, 'store'])->name('annonces-legales-constitution-sarl-sarlau-snc-scs-sca');

Route::get('/annonces-legales-constitution-sas', function () {
    return view('user.annonces-legales-constitution-sas');
})->name('annonces-legales-constitution-sas');

Route::get('/annonces-legales-constitution-sa', function () {
    return view('user.annonces-legales-constitution-sa');
})->name('annonces-legales-constitution-sa');

// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// END USER ROUTES ------------------------------------------------------------->

// ADMIN ROUTES ------------------------------------------------------------->

Route::prefix('/admin')->group(function(){
    Route::get('/login', function(){
        return view('admin.login');
    })->name('admin.login');
    Route::get('/accueil', function(){
        return view('user.home');
    })->name('admin.home')->middleware('admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// END ADMIN ROUTES ------------------------------------------------------------->

// MANAGER ROUTES ------------------------------------------------------------->
Route::prefix("manager")->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// END MANAGER ROUTES ------------------------------------------------------------->


require __DIR__.'/auth.php';
