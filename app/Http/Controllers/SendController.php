<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use App\Models\Gerant;

class SendController extends Controller
{
    //
    /**
     * create pour le formulaire
     */

    public function create(){
        $manager = Gerant::all();
        return view('customer.SendFile',compact('manager'));
    }

    /**
     * Traitement du document
     */

    public function store(Request $request){

        $request->validate([
            'title' =>'required',
            'description' =>'required',
            //'file'=>'required|image|mimes:docx,pdf|max:1024',
            //'user_id'=>'required'
        ]);

        /**
         * Traitement du documents
         * On instancie le model Document
         */

         $document = new Document;
         $document->title = $request->title;
         $document->description = $request->description;
         $document->user_id = Auth::user()->id;
         $document->gerant_id = Auth::user()->id;

         $file = uniqid() . $request->file('file')->getClientOriginalName();
         //Créer une variable qui contient le nom du fichier

         $path = $request->file('file')->storeAs('Historique',$file,'public');
         $document->file = 'storage'.$path;
         $document->save();

         return redirect()->back()->with("success","Votre document à été enregistré avec succès!");


    }
}
