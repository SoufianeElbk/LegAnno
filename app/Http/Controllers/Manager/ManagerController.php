<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Annonce_legale;
use App\Models\Manager;

use Illuminate\Http\Request;
use Auth;

class ManagerController extends Controller
{
    public function dashboard(Request $request) {
        $annonces = Annonce_legale::where('statut' , '=', 'en attente de validation')->with([
            'creation_sarl_sarlau_snc_scs_sca',
            'creation_societe_anonyme_simplifiee_sas',
            'creation_societe_anonyme_sa',
            'dissolution',
            'cloture_liquidation',
            'continuite_activite',
            'transfert_siege_social',
            'changement_objet_social',
            'changement_denomination',
            'transformation_forme_sociale',
            'reduction_capital',
            'augmentation_capital',
            'representants',
            'associes',
            'commissaires'
        ])->paginate(10);
        return view('manager.dashboard', compact('annonces'));
    }

    public function create()
    {
        return view('manager.login');
    }

    public function store(Request $request)
    {
        if(Auth::guard('manager')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->route('manager.dashboard');
        }
        else return back()->with('error','Email ou mot de passe sont incorrects');
    }


    public function show(Manager $manager)
    {
        return view('manager.show', compact('manager'));
    }


    public function edit(Manager $manager)
    {
        return view('manager.edit', compact('manager'));
    }

    public function update(Request $request, Manager $manager)
    {
        $manager->update($request->all());
        return redirect()->route('manager.index')->with('success', 'Manager updated successfully');
    }


    public function destroy(Manager $manager)
    {
        $manager->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully');
    }
}
