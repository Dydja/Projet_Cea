<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteLoginController extends Controller
{
    //
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('authorize.LoginUser');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

        public function redirectTo(){
            if(Auth::user()->role_id == 1){
                return route("admin.dashboard");
            }else if(Auth::user()->role_id == 2){
                 return route("customer.dashboard");
            }else if(Auth::user()->role_id == 3){
                return route("manager.dashboard");
            }
        }

    /**
     *
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function login(Request $request) {
       $input = $request->all();
       $this->validate($request,[
           "email"=>'required|email',
           "password"=>'required',
       ]);

       if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
        // Authentication was successful...

        if(Auth::user()->role_id == 1){
            return redirect()->route('admin.dashboard');

        }else if(Auth::user()->role_id == 2){
            return redirect()->route('customer.dashboard');

        }else if(Auth::user()->role_id == 3){
            return redirect()->route('manager.dashboard');
        }

       }else{
           return redirect()->route('login')->with('error',"Email and password are wrong");
       }
    }
}
