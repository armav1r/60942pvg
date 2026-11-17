<?php
namespace App\Http\Controllers;
use App\Models\Edition;
use Illuminate\Http\Request;

class EditionController extends Controller
{
    // Список всех изданий
    public function index()
    {
        return view('editions', [
            'editions' => Edition::all()
        ]);
    }

    // Одно издание и его экземпляры
    public function show(string $id)
    {
        return view('edition', [
            'edition' => Edition::all()->where('id', $id)->first()
        ]);
    }
}