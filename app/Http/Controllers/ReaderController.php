<?php
namespace App\Http\Controllers;
use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    // Один читатель и все книги, которые он брал (связь Many-to-Many)
    public function show(string $id)
    {
        $reader = Reader::all()->where('id', $id)->first();
        return view('reader', [
            'reader' => $reader
        ]);
    }
}