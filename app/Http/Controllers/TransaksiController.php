<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksis;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtt = Transaksis::all();
        return view('Transaksi.data-transaksi',compact('dtt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Transaksi.input-transaksi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksis::create([
            'buku' => $request->buku,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->total,
            'tgl' => $request->tgl
        ]);

        return redirect('data-transaksi')->with('success', 'Data Berhasil Ditambahkan!');
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
        $ab = Transaksis::findorfail($id);
        return view('Transaksi.update-transaksi',compact('ab'));
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
        $ab = Transaksis::findorfail($id);
        $ab->update($request->all());
        return redirect('data-transaksi')->with('success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ab = Transaksis::findorfail($id);
        $ab->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');;
    }
}
