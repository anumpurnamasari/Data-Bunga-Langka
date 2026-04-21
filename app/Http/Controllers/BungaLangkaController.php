<?php

namespace App\Http\Controllers;

use App\Models\BungaLangka;
use Illuminate\Http\Request;

class BungaLangkaController extends Controller
{
    public function index()
    {
        $bunga = BungaLangka::all();
        return view('bunga.index', compact('bunga'));
    }

    public function create()
    {
        return view('bunga.create');
    }

    public function store(Request $request)
    {
        BungaLangka::create($request->all());
        return redirect('/bunga')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $bunga = BungaLangka::findOrFail($id);
        return view('bunga.edit', compact('bunga'));
    }

    public function update(Request $request, $id)
    {
        $bunga = BungaLangka::findOrFail($id);
        $bunga->update($request->all());

        return redirect('/bunga')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $bunga = BungaLangka::findOrFail($id);
        $bunga->delete();

        return redirect('/bunga')->with('success', 'Data berhasil dihapus!');
    }
}