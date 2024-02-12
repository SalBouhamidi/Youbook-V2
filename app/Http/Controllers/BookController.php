<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livres;

class BookController extends Controller
{
    public function index(){
        return view('home');
    }

    public function studentpage(){
        return view('studentpage');
    }
    public function addBooks(Request $request){

        $objectModel= new Livres();
        $objectModel->nom=$request->nom;
        $objectModel->auteur=$request->auteur;
        $objectModel->edition=$request->edition;
        $objectModel->description=$request->description;
        $objectModel->disponibilité = $request->disponibilité;
        $objectModel->save();

        // Livres::create($request->all());
        return redirect()->route('/')
        ->with('success', 'Book created successfully.');
    }
    
    public function showBooks(){

        $books= livres::all();
        return view('home', compact(['books']));

    }

    public function showBooksforstudent(){
        $books= livres::all();
        return view('studentpage', compact(['books']));
    }

    public function deleteBook($id){
        $book= livres::find($id);
        $book->delete();
        return redirect()->route('/')
        ->with('success', 'Book has been deleted successfully.');
    }
    
    public function updateBook($id, Request $request){
        $book= livres::find($id);
        $book->nom=$request->nom;
        $book->auteur=$request->auteur;
        $book->edition=$request->edition;
        $book->description=$request->description;
        $book->disponibilité = $request->disponibilité;
        $book->save();
        return redirect()->route('/')
        ->with('success', 'Book has been updated successfully.');
    }

}
