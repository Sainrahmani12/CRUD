<?php

namespace App\Http\Controllers;

use App\Models\mie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mie= Mie::all();
        return view ('Mie.index',  compact('Mie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Mie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mie::create([
            'Merk'=>$request->Merk,
            'Rasa'=>$request->Rasa,
            'Harga'=>$request->Harga,
            'Gambar'=>$request->file('Gambar')->store('Gambar-Mie')
        ]);
        return redirect()->route('Mie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mie= Mie::findOrFail($id);
        return view('Mie.edit', compact('Mie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Mie= Mie::findOrFail($id);
        Storage::delete($Mie->Gambar);
        $Mie->update([
            'Merk'=>$request->Merk,
            'Rasa'=>$request->Rasa,
            'Harga'=>$request->Harga,
            'Gambar'=>$request->file('Gambar')->store('Gambar-Mie')
        ]);
        return redirect()->route('Mie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mie= Mie::findOrFail($id);
        Storage::delete($Mie->Gambar);
        $Mie->delete();
        return redirect()->route('Mie.index');
    }
}
