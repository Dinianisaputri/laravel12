<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Laporan::with('user');
        
        if (request('search')) {
            $query->where(function($q) {
                $q->where('judul', 'like', '%' . request('search') . '%')
                  ->orWhere('lokasi', 'like', '%' . request('search') . '%');
            });
        }
        
        if (request('status')) {
            $query->where('status', request('status'));
        }
        
        $laporans = $query->paginate(10);
        return view('admin.laporan.index', compact('laporans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'lokasi' => 'required|string|max:255',
            'status' => 'required|in:pending,diproses,selesai',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['user_id'] = auth()->id();
        
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('laporans', 'public');
        }

        Laporan::create($validated);

        return redirect()->route('admin.laporan.index')->with('success', 'Laporan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        $laporan->load('user');
        return view('admin.laporan.show', compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'lokasi' => 'required|string|max:255',
            'status' => 'required|in:pending,diproses,selesai',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('laporans', 'public');
        }

        $laporan->update($validated);

        return redirect()->route('admin.laporan.index')->with('success', 'Laporan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return back()->with('success', 'Laporan berhasil dihapus!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.laporan.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        return view('admin.laporan.edit', compact('laporan'));
    }
}

