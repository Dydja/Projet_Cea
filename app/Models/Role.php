<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    public const ADMIN ="Admin";
    public const CUSTOMER ="Client";
    public const MANAGER ="Gerant";

    public function users(){
        return $this->hasMany(User::class);
    }

}
