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
        // Ambil data dari model
        $Dioksida2 = Dioksida::where('id_alat', 2)->offset(0)
            ->limit(1)->latest()->get();
        $Metana2 = Metana::where('id_alat', 2)->offset(0)
            ->limit(1)->latest()->get();
        $Humidity2 = Humidity::where('id_alat', 2)->offset(0)
            ->limit(1)->latest()->get();
        $Temperature2 = Temperature::where('id_alat', 2)->offset(0)
            ->limit(1)->latest()->get();
        $Amonia2 = Amonia::where('id_alat', 2)->offset(0)
            ->limit(1)->latest()->get();

        $Dioksida1 = Dioksida::where('id_alat', 1)->offset(0)
            ->limit(1)->latest()->get();
        $Metana1 = Metana::where('id_alat', 1)->offset(0)
            ->limit(1)->latest()->get();
        $Humidity1 = Humidity::where('id_alat', 1)->offset(0)
            ->limit(1)->latest()->get();
        $Temperature1 = Temperature::where('id_alat', 1)->offset(0)
            ->limit(1)->latest()->get();
        $Amonia1 = Amonia::where('id_alat', 1)->offset(0)
            ->limit(1)->latest()->get();

        $Dioksida3 = Dioksida::where('id_alat', 3)->offset(0)
            ->limit(1)->latest()->get();
        $Metana3 = Metana::where('id_alat', 3)->offset(0)
            ->limit(1)->latest()->get();
        $Humidity3 = Humidity::where('id_alat', 3)->offset(0)
            ->limit(1)->latest()->get();
        $Temperature3 = Temperature::where('id_alat', 3)->offset(0)
            ->limit(1)->latest()->get();
        $Amonia3 = Amonia::where('id_alat', 3)->offset(0)
            ->limit(1)->latest()->get();

        $Dioksida4 = Dioksida::where('id_alat', 4)->offset(0)
            ->limit(1)->latest()->get();
        $Metana4 = Metana::where('id_alat', 4)->offset(0)
            ->limit(1)->latest()->get();
        $Humidity4 = Humidity::where('id_alat', 4)->offset(0)
            ->limit(1)->latest()->get();
        $Temperature4 = Temperature::where('id_alat', 4)->offset(0)
            ->limit(1)->latest()->get();
        $Amonia4 = Amonia::where('id_alat', 4)->offset(0)
            ->limit(1)->latest()->get();

        // Kembalikan data ke tampilan Blade
        return view('dashboard', [
            'Dioksida1' => $Dioksida1,
            'Metana1' => $Metana1,
            'Humidity1' => $Humidity1,
            'Temperature1' => $Temperature1,
            'Amonia1' => $Amonia1,
            
            'Dioksida2' => $Dioksida2,
            'Metana2' => $Metana2,
            'Humidity2' => $Humidity2,
            'Temperature2' => $Temperature2,
            'Amonia2' => $Amonia2,

            'Dioksida3' => $Dioksida3,
            'Metana3' => $Metana3,
            'Humidity3' => $Humidity3,
            'Temperature3' => $Temperature3,
            'Amonia3' => $Amonia3,

            'Dioksida4' => $Dioksida4,
            'Metana4' => $Metana4,
            'Humidity4' => $Humidity4,
            'Temperature4' => $Temperature4,
            'Amonia4' => $Amonia4,
        ]);
    }

    public function dioksida()
    {
        try {
            // Buat data dioksida acak
            // Dioksida::create(['id_alat' => 2, 'nilai_dioksida' => rand(60, 65)]);

            // Ambil 30 data dioksida terakhir dan urutkan berdasarkan ID
            $speeds = Dioksida::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_dioksida');
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
            // Metana::create(['id_alat' => 2, 'nilai_metana' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Metana::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_metana');
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
            // Humidity::create(['id_alat' => 2, 'nilai_humidity' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Humidity::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_humidity');
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
            // Temperature::create(['id_alat' => 2, 'nilai_suhu' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Temperature::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_temp');
            $labels = $speeds->pluck('id_temp')->toArray();
            $data = $speeds->pluck('nilai_suhu')->toArray();

            $latestData = Temperature::latest()->first();

            return response()->json([
                'labels' => $labels,
                'data' => $data,
                'latest' => [
                    'id_temp' => $latestData->id_temp,
                    'nilai_suhu' => $latestData->nilai_suhu,
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
            // Amonia::create(['id_alat' => 2, 'nilai_amonia' => rand(60, 65)]);

            // Ambil 30 data speed terakhir dan urutkan berdasarkan ID
            $speeds = Amonia::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_amonia');
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
