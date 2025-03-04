<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\view;
use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
   /* public function insertCar()
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
    */

    public function insertCar()
    {
        Car::create([
            'nama' => 'Toyota Avanza',
            'jenis' => 'MPV',
            'harga' => 250000000,
            'tanggal_pembuatan' => '2021-08-20'
        ]);

        return "berhasil ditambahkan!";
    }

    public function getCar()
    {
        $cars = Car::where('jenis', 'MPV')->get();
        return view('cars', compact('cars'));
    }
}
