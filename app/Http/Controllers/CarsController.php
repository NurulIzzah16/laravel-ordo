<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CarsController extends Controller
{
    public function insertCar()
    {
        DB::table('cars')->insert([
            'nama' => 'Honda Civic',
            'jenis' => 'Sedan',
            'harga' => 500000000,
            'tanggal_pembuatan' => '2022-05-10'
        ]);
        return "berhasil ditambahkan!";
    }

    public function getCar()
    {
        $cars = DB::table('cars')->where('jenis', 'Sedan')->get();

        return view('cars', compact('cars'));
    }
}
