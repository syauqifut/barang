<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barangs'] = Barang::all();
        // $loginid = Auth::id();
        $data['isadmin'] = Auth::user()->is_admin;
        
        // dd($barangs);
        // return view('barangs.index', compact('barangs'));
        return view('barangs.index')->with($data);
    }

    public function indexNoLogin()
    {
        $barangs = Barang::all();
        // dd($barangs);
        return view('barangs.indexnologin', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'jumlah' => 'required',
        ]);
    
        Barang::create($request->all());
     
        return redirect()->route('barangs.index')->with('success','Barang berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'jumlah' => 'required',
        ]);
    
        $barang->update($request->all());
    
        return redirect()->route('barangs.index')->with('success','Barang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
    
        return redirect()->route('barangs.index')->with('success','Barang berhasil dihapus');
    }
}
