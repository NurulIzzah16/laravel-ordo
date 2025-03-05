<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\view;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Review;
use App\Models\Feature;
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

    /* public function insertData(){
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
    } */

    public function insertReview(Request $request, $car_id)
    {
        $cars = Car::findOrFail($car_id);

        Review::create([
            'car_id' => $cars->id,
            'nilai' => $request->nilai,
            'nama' => $request->nama,
            'isi' => $request->isi
        ]);

        return redirect()->route('showReviews', ['car_id' => $cars->id])->with('success', 'review berhasil ditambahkan!');
    }

    public function showReviews($car_id)
    {
        $car = Car::with('reviews')->findOrFail($car_id);
        return view('review', compact('car'));
    }

    public function index()
    {
        $cars = Car::with('features')->get(); // Ambil semua mobil beserta fiturnya
        $features = Feature::all(); // Ambil semua fitur

        return view('index', compact('cars', 'features'));
    }

    public function addFeatures(Request $request)
    {
        $car = Car::findOrFail($request->car_id);

        if ($request->has('features')) {
            $car->features()->sync($request->features);
        }

        return redirect()->route('cars.index')->with('success', 'Fitur berhasil ditambahkan!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Feature::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('cars.index')->with('success', 'Fitur baru berhasil ditambahkan!');
    }

}
