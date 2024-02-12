<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookreserves;
use App\Models\user;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
        return view('home');
    }

 
    public function store(Request $request)
    {
        $object = new Bookreserves();
        // $object->user_id = 1;
        // dd(session()->all());
        $object->user_id= session('user_id');
        $object->livres_id = $request->id;
        $object->start_date = $request->start_date;
        $object->end_date= $request->end_date;
        $object->save();
        session(['bookreserves_id' => $object->id,
                'livres_id'=>$object->livres_id]);
        // dd($object);
        return redirect()->route('studentpage')
        ->with('success', 'Book has been booked successfully.');
    }

    public function showmybooks(){

        $user= user::find(session('user_id'));
        $reservedbooks=$user->bookreserves()->with('Livres')->get()->pluck('Livres'); 
        dd($reservedbooks); 
        return view('reservedbooks', compact(['reservedbooks']));
    }

    /**
     * Display the specified resource.
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
