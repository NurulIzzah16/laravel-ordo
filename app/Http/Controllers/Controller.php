<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\view;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return 'hello world';
    }

    public function perkalian($angka)
    {
        $angka = $angka*2;
        return "angka $angka";
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'angka1' => 'required|numeric',
            'angka2' => 'required|numeric'
        ]);
        $angka1 = $request->query('angka1');
        $angka2 = $request->query('angka2');
        $hasil = $angka1 + $angka2;
        return view('tambah', ['angka1' => $angka1, 'angka2' => $angka2, 'hasil' => $hasil]);
    }

}
