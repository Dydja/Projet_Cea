<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Model\Role;
use App\Model\Document;
use App\Model\Gerant;
use App\Model\Facture;
use App\Model\ScannedInvoice;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->belongsTo(Role::class);
    }

    public function documents() {
        return $this->hasMany(Document::class);
    }

    public function gerants(){
        return $this->belongsTo(Gerant::class);
    }
    /**
     * UN CLIENT RECOIT UN OU PLUSIEURS FACTURES
     */

     public function factures(){
         return $this->hasMany(Facture::class);
     }

     public function scanned_invoices(){
         return $this->hasMany(ScannedInvoice::class);
     }
}
