<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gerant;
use App\Models\User;
use App\Models\Document;
use App\Models\Facture;
use PDF;
use Carbon\Carbon;
use App\Models\ScannedInvoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Mail\CustomerMail;
use Illuminate\Support\Facades\Mail;

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
         $data= Facture::all();//DB::table('factures')->join('users','users.id','=','factures.user_id')->join('documents','documents.id','=','documents.user_id')->get();
         //DB::table('documents')->join('users','users.id','=','documents.user_id')->join('factures','factures.id','=','factures.user_id')->get();
        //$tab = Facture::all();
        $key = ScannedInvoice::all();
         return view('customer.FactureList',compact('data','key'));
     }

     public function store(Request $request){
         /**
          * TRAITEMENT DU FORMULAIRE D'ENVOIE DE FACTURE
          *SCANNER
          */
          $request->validate([
             // 'user_id' => 'required',
              'scanned_invoices' => 'required|mimes:pdf,docx|max:1024',
          ]);

        $invoices =  new ScannedInvoice;
        $invoices->user_id = Auth::user()->id;

        $scanned_invoices = uniqid() .$request->scanned_invoices->getClientOriginalName();
        $fileName = $request->file('scanned_invoices')->storeAs('Factures',$scanned_invoices,'public');
        $invoices->scanned_invoices = 'storage /'.$fileName;
        $invoices->save;

        return dd($invoices);
         //return redirect()->back()->with('success','Factures envoyée avec succès');
     }

      /**
       * GENERATE PDF
       * ALWAYS FUNCTION CREATEPDF
       */



      public function createPDF(Facture $data){
        //recuperons l'element que nous voulons download
         $data = Facture::all();
         //DB::table('factures')->join('users','users.id','=','factures.user_id')->join('documents','documents.id','=','documents.user_id')->get();
        //share data to view documents
        //view()->share('facture',$data);
        $pdf =PDF::loadView('customer.FactureList',compact('data'));
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
        //


    }

    //function d'envoie de mail
    public function bar() {
        //$user = ['email' => 'user@test.com','name'=>'Monsieur Hervé'];
        //Mail::to($user['email'])->send(new CustomerMail($user));
       $user = ['email'=>'kayeon@gmail.com','name'=>'DominiqueH'];
       Mail::to($user['email'])->send(new CustomerMail($user));
       /* Mail::to('administrateur@chezmoi.com')*/
           /* ->send(new CustomerMail($request->except('_token')));*/
       return view('emails.Email_test');

      // return dd(env('MAIL_USERNAME')) ;

      //$email=['kadidjabayoko@gmail.com']
    }



     //   return view('confirm');


      //


}
