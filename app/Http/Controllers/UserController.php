<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Document;
use App\Models\Gerant;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        /*$roles = Role::all();
        $document = Document::orderBy('title','asc');
        $manager = Gerant::all();
        $users = User::all();*/
        return view('customer.dashboard');
    }
}
