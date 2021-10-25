<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gerant;
use App\Models\User;
use App\Models\Document;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * FUNCTION DAFFICHAGE DU DASHBORD CUSTOMER
     */
    public function index(){
        return view('customer.dashboard');
    }

    /**
     * FUNCTION DE SUIVIE DES DEMANDES
     */
     public function create(){
        // $follow=DB::table('users')->where('role_id',3)->pluck('name') ,'document';
        /*$customer= User::all(); //Auth::user();*/
        //$document = Document::all();
        //$manager= Gerant::all();
        $customer = DB::table('documents')->join('users','users.id','=','documents.user_id')->join('gerants','documents.gerant_id','=','gerants.id')->get();
        return view('customer.followRequests',compact('customer'));
    }

    /**
     * Route pour le listing des factures
     */

     public function facture(){
         $factures = DB::table('factures')->join('users','users.id','=','factures.user_id')->join('documents','documents.id','=','documents.user_id')->get();
         //DB::table('documents')->join('users','users.id','=','documents.user_id')->join('factures','factures.id','=','factures.user_id')->get();
         return view('customer.FactureList',compact('factures'));
     }
}
