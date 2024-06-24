<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speed;
use App\Models\Metana;
use App\Models\Dioksida;

class ChartsController extends Controller
{
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
                    'updated_at' => $latestData->updated_at
                ]
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
            $speeds = Metana::latest()->take(30)->get()->sortBy('id');
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
                    'updated_at' => $latestData->updated_at
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
