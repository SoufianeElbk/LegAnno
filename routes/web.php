<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ManagerController as AdminManagerController;
use App\Http\Controllers\Admin\PackController;
use App\Http\Controllers\Manager\ManagerController;
use App\Http\Controllers\User\AnnonceController;
use App\Http\Controllers\Manager\AnnonceController as ManagerAnnonceController;
use App\Http\Controllers\User\CommandeController;
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
    return view('user.home')->with('packs', App\Models\Pack::all());
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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('user.profile.destroy');
    Route::get('/packs-commandes', [CommandeController::class, 'index'])->name('packs-commandes');
});

// END USER ROUTES ------------------------------------------------------------->

// ADMIN ROUTES ------------------------------------------------------------->

Route::prefix('/admin')->group(function(){

    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminController::class, 'create'])->name('admin.login.create');
        Route::post('/login', [AdminController::class, 'store'])->name('admin.login.store');
    });

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

        Route::get('/managers', [AdminManagerController::class, 'index'])->name('admin.managers.index');
        Route::get('/managers/create', [AdminManagerController::class, 'create'])->name('admin.managers.create');
        Route::post('/managers', [AdminManagerController::class, 'store'])->name('admin.managers.store');
        Route::get('/managers/{manager}/edit', [AdminManagerController::class, 'edit'])->name('admin.managers.edit');
        Route::put('/managers/{manager}', [AdminManagerController::class, 'update'])->name('admin.managers.update');
        Route::delete('/managers/{manager}', [AdminManagerController::class, 'destroy'])->name('admin.managers.destroy');

        Route::get('/packs', [PackController::class, 'index'])->name('admin.packs.index');
        Route::get('/packs/create', [PackController::class, 'create'])->name('admin.packs.create');
        Route::post('/packs', [PackController::class, 'store'])->name('admin.packs.store');
        Route::get('/packs/{pack}/edit', [PackController::class, 'edit'])->name('admin.packs.edit');
        Route::put('/packs/{pack}', [PackController::class, 'update'])->name('admin.packs.update');
        Route::delete('/packs/{pack}', [PackController::class, 'destroy'])->name('admin.packs.destroy');

        Route::get('/commandes', [\App\Http\Controllers\Admin\CommandeController::class, 'index'])->name('admin.commandes.index');
        Route::get('/annonces-legales-validees', [\App\Http\Controllers\Admin\AnnonceController::class, 'annonces_validees'])->name('admin.annonces-validees.index');
        Route::get('/annonces-legales-annulees', [\App\Http\Controllers\Admin\AnnonceController::class, 'annonces_annulees'])->name('admin.annonces-annulees.index');
        Route::get('/annonces-legales-en-attente', [\App\Http\Controllers\Admin\AnnonceController::class, 'annonces_en_attente'])->name('admin.annonces-en-attente.index');
        Route::get('/annonces-legales-en-preparation', [\App\Http\Controllers\Admin\AnnonceController::class, 'annonces_en_preparation'])->name('admin.annonces-en-preparation.index');

        Route::get('/annonce-legale-{id}', [\App\Http\Controllers\Admin\AnnonceController::class, 'index'])->name('admin.annonce-legale.index');

        Route::get('/profile', [AdminController::class, 'edit'])->name('admin.profile.edit');
        Route::patch('/profile/info', [AdminController::class, 'updateInfo'])->name('admin.profile.updateInfo');
        Route::patch('/profile/password', [AdminController::class, 'updatePassword'])->name('admin.profile.updatePassword');

        // Route::resource('users', UserController::class);
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

        // Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
        // Route::get('/users/ajouterUser', [UserController::class, 'create'])->name('admin.users.create');
        // Route::post('/users/ajouterUser', [UserController::class, 'store'])->name('admin.users.store');
        // Route::get('/users/editUser/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        // Route::post('/users/editUser/{id}', [UserController::class, 'update'])->name('admin.users.update');
    });

});

// END ADMIN ROUTES ------------------------------------------------------------->





// MANAGER ROUTES ------------------------------------------------------------->

Route::prefix('/manager')->group(function(){

    Route::get('/', function () {
        return redirect()->route('manager.dashboard');
    });

    Route::middleware('manager')->group(function () {
            Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('manager.dashboard');
        Route::get('/annonce-legale-{id}', [ManagerAnnonceController::class, 'create'])->name('manager.annonce-legale.create');
        Route::post('/annonce-legale-{id}', [ManagerAnnonceController::class, 'approuver'])->name('manager.annonce-legale.approuver');
        Route::patch('/annonce-legale-{id}', [ManagerAnnonceController::class, 'annuler'])->name('manager.annonce-legale.annuler');
        // Route::patch('/manager/annonce-legale/{id}/approuver', [ManagerAnnonceController::class, 'approuver'])->name('manager.annonce-legale.approve');
        Route::get('/annonces-traaitees', [ManagerAnnonceController::class, 'annonces_traitees'])->name('manager.annonces-traitees');
        Route::get('/annonces-en-attente', [ManagerAnnonceController::class, 'annonces_en_attente'])->name('manager.annonces-en-attente');
        Route::get('/profile', [ManagerController::class, 'edit'])->name('manager.profile.edit');
        Route::patch('/profile/info', [ManagerController::class, 'updateInfo'])->name('manager.profile.updateInfo');
        Route::patch('/profile/password', [ManagerController::class, 'updatePassword'])->name('manager.profile.updatePassword');

        Route::post('/logout', [ManagerController::class, 'logout'])->name('manager.logout');
    });

    Route::middleware('guest:manager')->group(function () {
        Route::get('/login', [ManagerController::class, 'create'])->name('manager.login.create');
        Route::post('/login', [ManagerController::class, 'store'])->name('manager.login.store');
    });

});

// END MANAGER ROUTES ------------------------------------------------------------->



require __DIR__.'/auth.php';
