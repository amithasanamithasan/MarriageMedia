<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  
 use AuthenticatesUsers;

 protected function authenticated(Request $request, $user)
    {
        if($user->hasRole('superadministrator')){
        return redirect('/admin');
        }
        if($user->hasRole('user')){
            return redirect('/user');
        }
    }
   

   
  

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
