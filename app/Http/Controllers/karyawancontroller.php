<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class karyawancontroller extends Controller
{
     public function formKaryawan()
    {
        $data = karyawan::all();
        return view('karyawan',compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        karyawan::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $data = karyawan::all();
        $karyawan = karyawan::findOrFail($id);
        return view('karyawan', compact('karyawan', 'data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);
    
        $biodata = karyawan::findOrFail($id);
        $biodata->update($request->all());
    
        return redirect('/karyawan')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $biodata = karyawan::findOrFail($id);
        $biodata->delete();

        return redirect('/')->with('success', 'Data berhasil dihapus!');
    }
}
