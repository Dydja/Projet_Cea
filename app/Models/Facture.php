<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gerant;

class Facture extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function gerants(){
        return $this->belongsTo(Gerant::class);
    }

    /**
     * UNE FACTURE EST RECEPTIONNE PAR UN CLIENT
     *
     * @return void
     */
    public function users(){
         return $this->belongsTo(User::class);
    }
}
