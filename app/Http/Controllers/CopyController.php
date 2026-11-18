<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use App\Models\Edition;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    public function index()
    {
        return view('copies', [
            'copies' => Copy::all()
        ]);
    }

    public function create()
    {
        return view('copy_create', [
            'editions' => Edition::all() 
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'edition_id' => 'required|integer|exists:editions,id', 
            'wear_factor' => 'required|numeric|min:0|max:1', 
        ]);

        Copy::create($validated);

        return redirect('/copy'); 
    }

    public function show(string $id)
    {
        return view('copy', [
            'copy' => Copy::all()->where('id', $id)->first()
        ]);
    }

    public function edit(string $id)
    {
        $copy = Copy::find($id);
        return view('copy_edit', [
            'copy' => $copy,
            'editions' => Edition::all()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'edition_id' => 'required|integer|exists:editions,id',
            'wear_factor' => 'required|numeric|min:0|max:1',
        ]);

        $copy = Copy::find($id);
        $copy->update($validated);

        return redirect('/copy');
    }

    public function destroy(string $id)
    {
        Copy::destroy($id);
        return redirect('/copy');
    }
}