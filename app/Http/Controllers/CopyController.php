<?php
namespace App\Http\Controllers;
use App\Models\Copy;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    // Список всех экземпляров
    public function index()
    {
        return view('copies', [
            'copies' => Copy::all()
        ]);
    }

    // Один экземпляр (тут можно показать, к какому изданию относится)
    public function show(string $id)
    {
        return view('copy', [
            'copy' => Copy::all()->where('id', $id)->first()
        ]);
    }
}