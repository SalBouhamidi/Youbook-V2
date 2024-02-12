<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');   
    }

    public function store(Request $request)
    {
        $authinfo = $request->only('email', 'password');
        // dd($authinfo);


        if(Auth::attempt($authinfo, true)){
            // dd($authinfo);
            $user=Auth::user();
            $request->session()->regenerate();
            session(['user_id' => $user->id,
                     'role_id'=>$user->role_id
        ]);

            // $request->session()->put('user_id', '$user->id');




            if (Auth::user()->role_id == '1'){
                return  redirect()->route('/')
                ->with('success', 'Login passed successfully');
            }elseif(Auth::user()->role_id == '2'){
                return redirect()->route('studentpage')
                ->with('success', 'Login passed successfully');
                // intended('studentpage');
            }

        }else{
            return  redirect()->route('login');
        }
    }

   public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
   }
    
}
