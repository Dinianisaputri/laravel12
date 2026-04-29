<?php

namespace App\Http\Controllers;

use App\Models\LaporanJalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanJalanController extends Controller
{
    public function index()
    {
        $data = LaporanJalan::latest()->paginate(10);
        return view('laporan_jalan.index', ['data' => $data]);
    }

    public function create()
    { 
        return view('laporan_jalan.create'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_tiket' => 'required|unique:laporan_jalans',
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('foto')){
            $validated['foto'] = $request->file('foto')->store('laporan_jalan','public');
        }

        LaporanJalan::create($validated);

        return redirect()->route('laporan_jalan.index')->with('success','Data berhasil ditambah');
    }

    public function show(LaporanJalan $laporanJalan)
    {
        return view('laporan_jalan.show', compact('laporanJalan'));
    }

    public function edit(LaporanJalan $laporanJalan)
    { 
        return view('laporan_jalan.edit', compact('laporanJalan')); 
    }

    public function update(Request $request, LaporanJalan $laporanJalan)
    {
        $validated = $request->validate([
            'nomor_tiket' => 'required|unique:laporan_jalans,nomor_tiket,'.$laporanJalan->id,
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('foto')){
            if($laporanJalan->foto) Storage::disk('public')->delete($laporanJalan->foto);
            $validated['foto'] = $request->file('foto')->store('laporan_jalan','public');
        }

        $laporanJalan->update($validated);

        return redirect()->route('laporan_jalan.index')->with('success','Data berhasil diupdate');
    }

    public function destroy(LaporanJalan $laporanJalan)
    {
        if($laporanJalan->foto) Storage::disk('public')->delete($laporanJalan->foto);
        $laporanJalan->delete();

        return back()->with('success','Data berhasil dihapus');
    }
}

