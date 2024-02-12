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
            $request->session()->regenerate();
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
