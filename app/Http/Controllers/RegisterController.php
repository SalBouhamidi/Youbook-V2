<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = request()->validate([
            'name' => ['required'],
            'password' => ['required', 'confirmed'],
            'email' => ['required','unique:App\Models\User,email']

        ]);

        $object= new User;
        $object->name= $request->name;
        $object->email= $request->email;
        $object->password= $request->password;
        $object->password= $request->password_confirmation;
        $object->role_id = 2;
        // dd($object);

        $object->save();
        // User::create($object->all());
        return redirect()->route('login')
        ->with('success', 'user created successfully');
    }

}
