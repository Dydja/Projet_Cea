<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScannedInvoice;
use Illuminate\Support\Facades\Auth;

class ScannedInvoiceController extends Controller
{
    public function create(){
        return view('customer.FactureList');
    }

    public function store(Request $request){
        /*$request->validate([
            'user_id' => 'required|string',
            //'scanned_invoices'=>'required|image|mimes:docx,pdf|max:1024',

        ]);
*/
        /**
         * TRAITREMENT DU FACTURE SCANNEE
         */

       /*  $scannedFactures = new ScannedInvoice;
         $scanned_invoices = uniqid() . $request->file('scanned_invoices')->getClientOriginalName();
         $path = $request->file('scanned_invoices')->storeAs('Factures',$scanned_invoices,'public');

          $scannedFactures->scanned_invoices = 'storage'.$path;
          $scannedFactures->save();

          return dd($scannedFactures);

        //return dd($invoice);

        //return redirect()->back('success','Factures envoyée avec succès');*/

       // $path = $request->scanned_invoices->store('images');
        $path = $request->scanned_invoices->storeAs('Factures','file.jpg');
        return dd($path);
     }

   }



