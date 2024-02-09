<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookreserves;


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
        $object->user_id = 1;
        $object->livres_id = $request->id;
        $object->save();

        // dd($object);

        return redirect()->route('/')
        ->with('success', 'Book has been booked successfully.');

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
