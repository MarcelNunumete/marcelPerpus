<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $data = Book::all();

        $title = 'buku';
        return view('buku', compact('title'), compact('data'));
    }

    public function create(){
        $title = 'create';
        return view('create', compact('title'));
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Book::create($request->all());
        return redirect()->route('buku')->with('success', 'Buku berhasil di tambahkan');
    }

    public function tampilkandata ($id){

        $data = Book::find($id);
        dd($id);
        $title = 'tampildata';
        //dd($data);

        return view('tampildata', compact('tampildata'), compact('data'));

    }

}


