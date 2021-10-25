<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerant;

class GerantController extends Controller
{
    //
    public function index(){

        return view('manager.index');
    }
}
