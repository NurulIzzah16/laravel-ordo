<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\view;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacture;


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

    /*public function insertCar()
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
    */
    public function insertData(){
        $cars = Car::create([
            'nama' => 'Toyota Supra',
            'jenis' => 'Sports',
            'harga' => '1500000000',
            'tanggal_pembuatan' => '2021-07-15'
        ]);

        Manufacture::create([
            'car_id' => $cars->id,
            'nama' => 'Toyota Manufacturing Indonesia',
            'alamat' => 'Jl. Industri No. 5, Jakarta'
        ]);

        return "berhasil ditambahkan!";
    }

    public function getCarWithManufacture()
    {
        $cars = Car::with('manufacture')->get();

        return view('cars', compact('cars'));
    }
}
