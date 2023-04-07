<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

      public function userProfile(User $profile){

       
   
        $id = Auth::user()->id;
        $user = User::find($id);
   
        return view('profile.show',compact('user'));
    }
}
