<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Document;
use App\Models\Facture;

class Gerant extends Model
{
    use HasFactory;

    /**
     * DECLARONS NOS CONSTANTES
     */

     public const COMMERCIALE = "Commerciale";
     public const COMPTABLE = "Comptable";
     public const ASSISTANTE = "Assitant(e)";
     public const GESTIONNAIRE = "Gestionnaire";

    protected $guarded=[];

    /**
     * RELATION UN A PLUSIEURS ENTRE LE GERANT ET LE CLIENT
     */

     public function users(){
         return $this->hasMany(User::class);
     }

     /**
      * RELATION ENTRE LE GERANT ET LE DOCUMENT
      */

      public function documents(){
          return $this->hasMany(Document::class);
      }

      /**
       * RELATION ENTRE LE GERANT ET LES FACTURES
       */
       public function factures(){
           return $this->hasMany(Facture::class);
       }
}
