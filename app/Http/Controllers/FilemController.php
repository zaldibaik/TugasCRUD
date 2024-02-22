<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filem;
use App\Models\category;

class filemController extends Controller
{
    public function index()
    {
        $filem = filem::all();
        return view('filem.index', compact('filem'));
    }

    public function create()
    {
        $categories = category::all();
        return view('filem.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        filem::create($request->all());

        return redirect()->route('filem.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(filem $filem)
    {
        $categories = category::all();
        return view('filem.edit', compact('filem', 'categories'));
    }

    public function update(Request $request, filem $filem)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $filem->update($request->all());

        return redirect()->route('filem.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(filem $filem)
    {
        $filem->delete();

        return redirect()->route('filem.index')->with('success', 'Berita berhasil dihapus.');
    }
}
