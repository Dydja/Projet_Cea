<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ScannedInvoice extends Model
{
    use HasFactory;
    protected $guarded = "create_scanned_invoices";

    public function users(){
        return $this->belongsTo(Users::class);
    }
}
