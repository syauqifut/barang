<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Kreait\Firebase\Database;  

class BarangController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'barang';
    }

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
        
        // if($postRef){
        //     return Redirect('barangs')->with('success','berhasil');
        // }else{
        //     return Redirect('barangs')->with('success','gagal');
        // }

        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'jumlah' => 'required',
        ]);
    
        Barang::create($request->all());

        $insertid = DB::getPdo()->lastInsertId();
        $userid = Auth::id();
        $username = Auth::user()->name;

        $postData = [
            'aksi' => 'Tambah barang',
            'id barang' => $insertid,
            'ket barang' => 'Menambah barang dengan nama = '.$request->nama,
            'oleh' => 'Oleh user bernama ' . $username . ' dengan id = '. $userid,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

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

        $ubahvar = "";
        $ubahdata = "";

        if($request->nama != $barang->nama){
            $ubahvar .= 'nama, ';
            $ubahdata .= $request->nama.', ';
        }
        
        if($request->detail  != $barang->detail){
            $ubahvar .= 'detail, ';
            $ubahdata .= $request->detail.', ';
        }

        if($request->jumlah  != $barang->jumlah){
            $ubahvar .= 'jumlah ';
            $ubahdata .= $request->jumlah;
        }
        $hasilubah = $ubahvar. 'menjadi '.$ubahdata;
        // dd($hasilubah);
    
        $barang->update($request->all());
    
        $barangid = $barang->id;
        $userid = Auth::id();
        $username = Auth::user()->name;

        $postData = [
            'aksi' => 'Ubah barang',
            'id barang' => $barangid,
            'ket barang' => 'Mengubah ' .$hasilubah,
            'oleh' => 'Oleh user bernama ' . $username . ' dengan id = '. $userid,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

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
        $barangid = $barang->id;
        $barangnama = $barang->nama;

        $barang->delete();
        $barangid = $barang->id;
        $userid = Auth::id();
        $username = Auth::user()->name;

        $postData = [
            'aksi' => 'Hapus barang',
            'id barang' => $barangid,
            'ket barang' => 'Menghapus barang yang bernama ' .$barangnama,
            'oleh' => 'Oleh user bernama ' . $username . ' dengan id = '. $userid,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

        return redirect()->route('barangs.index')->with('success','Barang berhasil dihapus');
    }

    public function log(){
        $logbarangs = $this->database->getReference($this->tablename)->getValue();
        return view('barangs.log', compact('logbarangs'));
    }
}
