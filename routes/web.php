<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Manager\ManagerController;
use App\Http\Controllers\User\AnnonceController;
use App\Http\Controllers\Manager\AnnonceController as ManagerAnnonceController;
use App\Http\Controllers\User\CommandeController;
use App\Http\Controllers\User\PackController;
use App\Http\Controllers\User\PaiementController;
use App\Http\Controllers\User\ProfileController;
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

// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/annonces-legales-paiement-{id}', [PaiementController::class, 'index_annonces_legales_paiement'])->name('annonces-legales-paiement');
    Route::post('/annonces-legales-paiement-{id}', [PaiementController::class, 'store_annonces_legales_paiement'])->name('annonces-legales-paiement');

    Route::get('/packs', [CommandeController::class , 'create'])->name('packs.create');
    Route::post('/packs', [CommandeController::class , 'store'])->name('packs.store');

    // Route::get('/mes-annonces', [AnnonceController::class , 'create'])->name('mes-annonces.create');
    Route::get('/mes-annonces', [AnnonceController::class , 'index'])->name('mes-annonces.index');
    Route::get('/annonces-publiees', [AnnonceController::class , 'index_annonces_publiees'])->name('annonces-publiees.index');
    Route::get('/mes-annonces-publiees', [AnnonceController::class , 'index_mes_annonces_publiees'])->name('mes-annonces-publiees.index');

    Route::get('/annonces-legales-constitution-sarl-sarlau-snc-scs-sca', [AnnonceController::class, 'index_annonces_legales_constitution_sarl_sarlau_snc_scs_sca'])->name('annonces-legales-constitution-sarl-sarlau-snc-scs-sca');
    Route::post('/annonces-legales-constitution-sarl-sarlau-snc-scs-sca', [AnnonceController::class, 'store_annonces_legales_constitution_sarl_sarlau_snc_scs_sca'])->name('annonces-legales-constitution-sarl-sarlau-snc-scs-sca');

    Route::get('/annonces-legales-constitution-sas', [AnnonceController::class, 'index_annonces_legales_constitution_sas'])->name('annonces-legales-constitution-sas');
    Route::post('/annonces-legales-constitution-sas', [AnnonceController::class, 'store_annonces_legales_constitution_sas'])->name('annonces-legales-constitution-sas');

    Route::get('/annonces-legales-constitution-sa', [AnnonceController::class, 'index_annonces_legales_constitution_sa'])->name('annonces-legales-constitution-sa');
    Route::post('/annonces-legales-constitution-sa', [AnnonceController::class, 'store_annonces_legales_constitution_sa'])->name('annonces-legales-constitution-sa');

    Route::get('/annonces-legales-dissolution', [AnnonceController::class, 'index_annonces_legales_dissolution'])->name('annonces-legales-dissolution');
    Route::post('/annonces-legales-dissolution', [AnnonceController::class, 'store_annonces_legales_dissolution'])->name('annonces-legales-dissolution');

    Route::get('/annonces-legales-cloture-de-la-liquidation', [AnnonceController::class, 'index_annonces_legales_cloture_de_la_liquidation'])->name('annonces-legales-cloture-de-la-liquidation');
    Route::post('/annonces-legales-cloture-de-la-liquidation', [AnnonceController::class, 'store_annonces_legales_cloture_de_la_liquidation'])->name('annonces-legales-cloture-de-la-liquidation');

    Route::get('/annonces-legales-continuite-activite', [AnnonceController::class, 'index_annonces_legales_continuite_activite'])->name('annonces-legales-continuite-activite');
    Route::post('/annonces-legales-continuite-activite', [AnnonceController::class, 'store_annonces_legales_continuite_activite'])->name('annonces-legales-continuite-activite');

    Route::get('/annonces-legales-transfert-de-siege-social', [AnnonceController::class, 'index_annonces_legales_transfert_siege_social'])->name('annonces-legales-transfert-de-siege-social');
    Route::post('/annonces-legales-transfert-de-siege-social', [AnnonceController::class, 'store_annonces_legales_transfert_siege_social'])->name('annonces-legales-transfert-de-siege-social');

    Route::get('/annonces-legales-changement-objet-social', [AnnonceController::class, 'index_annonces_legales_changement_objet_social'])->name('annonces-legales-changement-objet-social');
    Route::post('/annonces-legales-changement-objet-social', [AnnonceController::class, 'store_annonces_legales_changement_objet_social'])->name('annonces-legales-changement-objet-social');

    Route::get('/annonces-legales-changement-denomination', [AnnonceController::class, 'index_annonces_legales_changement_denomination'])->name('annonces-legales-changement-denomination');
    Route::post('/annonces-legales-changement-denomination', [AnnonceController::class, 'store_annonces_legales_changement_denomination'])->name('annonces-legales-changement-denomination');

    Route::get('/annonces-legales-transformation-forme-sociale', [AnnonceController::class, 'index_annonces_legales_transformation_forme_sociale'])->name('annonces-legales-transformation-forme-sociale');
    Route::post('/annonces-legales-transformation-forme-sociale', [AnnonceController::class, 'store_annonces_legales_transformation_forme_sociale'])->name('annonces-legales-transformation-forme-sociale');

    Route::get('/annonces-legales-reduction-de-capital', [AnnonceController::class, 'index_annonces_legales_reduction_capital'])->name('annonces-legales-reduction-de-capital');
    Route::post('/annonces-legales-reduction-de-capital', [AnnonceController::class, 'store_annonces_legales_reduction_capital'])->name('annonces-legales-reduction-de-capital');

    Route::get('/annonces-legales-augmentation-capital', [AnnonceController::class, 'index_annonces_legales_augmentation_capital'])->name('annonces-legales-augmentation-capital');
    Route::post('/annonces-legales-augmentation-capital', [AnnonceController::class, 'store_annonces_legales_augmentation_capital'])->name('annonces-legales-augmentation-capital');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/packs-commandes', [CommandeController::class, 'index'])->name('packs-commandes');
});

// END USER ROUTES ------------------------------------------------------------->

// ADMIN ROUTES ------------------------------------------------------------->

Route::prefix('/admin')->group(function(){
    Route::get('/login', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/login', [AdminController::class, 'store'])->name('admin.store');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// END ADMIN ROUTES ------------------------------------------------------------->





// MANAGER ROUTES ------------------------------------------------------------->


Route::prefix('/manager')->group(function(){
    Route::get('/', function () {
        return redirect()->route('manager.dashboard');
    });
    Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('manager.dashboard')->middleware('manager');
    Route::middleware('guest:manager')->group(function () {
        Route::get('/login', [ManagerController::class, 'create'])->name('manager.login.create');
        Route::post('/login', [ManagerController::class, 'store'])->name('manager.login.store');
    });
    Route::get('/annonce-legale-{id}', [ManagerAnnonceController::class, 'create'])->name('manager.annonce-legale.create');
    Route::patch('/annonce-legale-{id}', [ManagerAnnonceController::class, 'store'])->name('manager.annonce-legale.store');

    Route::get('/annonces-traaitees', [ManagerAnnonceController::class, 'annonces_traitees'])->name('manager.annonces-traitees');
});

Route::prefix("manager")->group(function () {
    // Route::middleware('auth')->group(function () {
    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });
});

// END MANAGER ROUTES ------------------------------------------------------------->



require __DIR__.'/auth.php';
