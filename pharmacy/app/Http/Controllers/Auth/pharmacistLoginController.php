<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class pharmacistLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:pharmacist');
    }

    public function showLoginForm(){
        return view('auth.pharmacist-login');
    }

    public function login(Request $request){
        
        // validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        // attempts to log the user in
        if(Auth::guard('pharmacist')->attempt([ 'email' => $request->email, 'password' => $request->password ], $request->remember)){
        // if successful the redirect them to their intended location
            return redirect()->intended(route('pharmacist.dashboard'));
        }

        // if unsuccessful then redirect them back to the login with the form data
         return redirect()->back()->withInput($request->only('email', 'remember'));;
    }

    public function logout(){
        Auth::guard('pharmacist')->logout();
        return redirect('/');
    }
}
