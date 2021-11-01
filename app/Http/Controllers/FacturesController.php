<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FacturesController extends Controller
{
    //

    public function create(){
        //$users = User::where('role_id',2)->get();
        //DB::table('factures')->join('users','users.id','=','factures.user_id')->join('gerants','gerants.id','=','factures.gerant_id')->get();
        //DB::table('documents')->join('users','users.id','=','documents.user_id')->join('factures','factures.id','=','factures.user_id')->get();
        return view ('manager.FacturesList');
    }

    /**
     * TRAITEMENTS DU FORMULAIRE
     */

     public function store(Request $request){

        $request->validate([
            'cout_prestation' => 'required|string',
            'frais_dossier' =>'required|string',
            'clients' =>'required|string',
            'amount_total' =>'required|string',
            'staus_amount' =>'required|string',

        ]);

        /**
         * TRAITREMENT DU FACTURE SCANNEE
         */



        $factures = new Facture;
        $factures->cout_prestation = $request->cout_prestation;
        $factures->frais_dossier = $request->frais_dossier;
        $factures->clients = $request->clients;
        $factures->amount_total = $request->amount_total;
        $factures->staus_amount = $request->staus_amount;
        $factures->user_id = Auth::user()->id;

        /**
         * RECUPERATION DE LA FACTURE POUR L'ENREGISTRER AVEC LES AUTRES ELEMENTS
         */


         $factures->save();

        return dd($factures);

        return redirect()->back('success','Factures envoyée avec succès');
     }
}
