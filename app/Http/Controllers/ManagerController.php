<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    /**
     * RETOURNE LA VUE DASHBOARD
     *
     * @return void
     */
    public function index(){
        return view('manager.dashboard');
    }
}
