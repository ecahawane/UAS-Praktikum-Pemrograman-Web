<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Infokus;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('user', 'infokus')->get();

        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $infokus = Infokus::all();

        return view('peminjaman.create', compact('infokus'));
    }

    public function store(Request $request)
    {
        Peminjaman::create([
            'user_id' => auth()->user()->id,
            'infokus_id' => $request->infokus_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'dipinjam'
        ]);

        $infokus = Infokus::findOrFail($request->infokus_id);

        $infokus->update([
            'status' => 'dipinjam'
        ]);

        return redirect('/peminjaman');
    }

    public function show(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        return view('peminjaman.show', compact('peminjaman'));
    }

    public function edit(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $infokus = Infokus::all();

        return view('peminjaman.edit', compact('peminjaman', 'infokus'));
    }

    public function update(Request $request, string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->update($request->all());

        return redirect('/peminjaman');
    }

    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->delete();

        return redirect('/peminjaman');
    }
}