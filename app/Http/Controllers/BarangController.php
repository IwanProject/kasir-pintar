<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index',['title' => 'Home','barang' => Barang::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create',['title'=> 'Create Data Barang']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_barang' => 'required',
            'nama' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'tinggi' => 'required'
        ]);

        Barang::create($data);
        return redirect('/')->with('success','New data barang has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('show',['title' => 'Detail ' . $barang->nama , 'barang'=> $barang ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('edit',['title' => 'Edit Data Barang', 'barang' => $barang]);
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
        $data = $request->validate([
            'kode_barang' => 'required',
            'nama' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'tinggi' => 'required'
        ]);

        Barang::where('id',$barang->id)->update($data);
        return redirect('/')->with('success','Data barang has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/barang')->with('success','Data barang has been deleted!');
    }
}
