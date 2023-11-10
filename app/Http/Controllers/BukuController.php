<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Post;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Http\Requests\UpdateBukuStore;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buku', [
            "title" => 'Buku',
            "data" => Buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {

        
        $validated = $request->validate([
            'judul' => 'required',
            'image' => 'image|file',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required'
        ]);
        


        if($request->file('image')) {
            $validated['image'] = $request->file('image')->store('post-images');
        }

        Buku::create($validated);
        return redirect()->back()->with('success', "Buku {$request->judul} telah ditambahkan");

         Post::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
       return view('detailbuku', [
        'buku' => $buku,
        'title' => 'Detail Buku',
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuStore $request, Buku $buku)
    {
        $buku->update($request->all());
        return redirect()->back()->with('success', "Buku {$request->judul} berhasi di edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->back();
    }
}
