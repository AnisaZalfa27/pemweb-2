<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $list_pasien = Pasien::all();
        return view('admin.pasien.index', compact('list_pasien'));

    }
    public function create(){
        return view('admin.pasien.create');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'kel_nama' => 'required|string',
        ]);

        
        Pasien::create($validated);
        return redirect('dashboard/pasien')->with('pesan', 'Data berhasil ditambahkan');;
    }

    /**
     * Display the scpecified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.edit', compact('pasien'));
        
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
        //validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'kel_nama' => 'required|string'
            
        ]);
        $pasien = Pasien::find($id);
        $pasien ->update($validated);
        return redirect('dashboard/pasien')->with('pesan', 'Data berhasil perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien ->delete();

        return redirect('dashboard/pasien')->with('pesan', 'Data berhasil dihapus');
    }

}
