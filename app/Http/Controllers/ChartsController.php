<?php

namespace App\Http\Controllers;

use App\Models\Amonia;
use App\Models\Dioksida;
use App\Models\Humidity;
use App\Models\Metana;
use App\Models\Speed;
use App\Models\Temperature;

class ChartsController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function dioksida()
    {
        try {
            // Buat data dioksida acak
            Dioksida::create(['id_alat' => 1, 'nilai_dioksida' => rand(60, 65)]);

            // Ambil 30 data dioksida terakhir dan urutkan berdasarkan ID
            $speeds = Dioksida::latest()->take(30)->get()->sortBy('id_dioksida');
            $labels = $speeds->pluck('id_dioksida')->toArray();
            $data = $speeds->pluck('nilai_dioksida')->toArray();

            // Ambil 1 data terakhir
            $latestData = Dioksida::latest()->first();

            return response()->json([
                'labels' => $labels,
                'data' => $data,
                'latest' => [
                    'id_dioksida' => $latestData->id_dioksida,
                    'nilai_dioksida' => $latestData->nilai_dioksida,
                    'created_at' => $latestData->created_at,
                    'updated_at' => $latestData->updated_at,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function metana()
    {
        try {
            // Buat data speed acak
            Metana::create(['id_alat' => 1, 'nilai_metana' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Metana::latest()->take(30)->get()->sortBy('id_metana');
            $labels = $speeds->pluck('id_metana')->toArray();
            $data = $speeds->pluck('nilai_metana')->toArray();

            $latestData = Metana::latest()->first();

            return response()->json([
                'labels' => $labels,
                'data' => $data,
                'latest' => [
                    'id_metana' => $latestData->id_metana,
                    'nilai_metana' => $latestData->nilai_metana,
                    'created_at' => $latestData->created_at,
                    'updated_at' => $latestData->updated_at,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function humidity()
    {
        try {
            // Buat data speed acak
            Humidity::create(['id_alat' => 1, 'nilai_humidity' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Humidity::latest()->take(30)->get()->sortBy('id_humidity');
            $labels = $speeds->pluck('id_humidity')->toArray();
            $data = $speeds->pluck('nilai_humidity')->toArray();

            $latestData = Humidity::latest()->first();

            return response()->json([
                'labels' => $labels,
                'data' => $data,
                'latest' => [
                    'id_humidity' => $latestData->id_humidity,
                    'nilai_humidity' => $latestData->nilai_humidity,
                    'created_at' => $latestData->created_at,
                    'updated_at' => $latestData->updated_at,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function temperature()
    {
        try {
            // Buat data speed acak
            Temperature::create(['id_alat' => 1, 'nilai_temperature' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Temperature::latest()->take(30)->get()->sortBy('id_temperature');
            $labels = $speeds->pluck('id_temperature')->toArray();
            $data = $speeds->pluck('nilai_temperature')->toArray();

            $latestData = Temperature::latest()->first();

            return response()->json([
                'labels' => $labels,
                'data' => $data,
                'latest' => [
                    'id_temperature' => $latestData->id_temperature,
                    'nilai_temperature' => $latestData->nilai_temperature,
                    'created_at' => $latestData->created_at,
                    'updated_at' => $latestData->updated_at,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function amonia()
    {
        try {
            // Buat data speed acak
            Amonia::create(['id_alat' => 1, 'nilai_amonia' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Amonia::latest()->take(30)->get()->sortBy('id_amonia');
            $labels = $speeds->pluck('id_amonia')->toArray();
            $data = $speeds->pluck('nilai_amonia')->toArray();

            $latestData = Amonia::latest()->first();

            return response()->json([
                'labels' => $labels,
                'data' => $data,
                'latest' => [
                    'id_amonia' => $latestData->id_amonia,
                    'nilai_amonia' => $latestData->nilai_amonia,
                    'created_at' => $latestData->created_at,
                    'updated_at' => $latestData->updated_at,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
