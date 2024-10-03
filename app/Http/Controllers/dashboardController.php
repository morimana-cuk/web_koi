<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        function getLatestData($id_alat)
        {
            return [
                'ph' => Alat::where('id_alat', $id_alat)->pluck('ph')->first() ?? 'No data available',
                'tds' => Alat::where('id_alat', $id_alat)->pluck('tds')->first() ?? 'No data available',
                'do' => Alat::where('id_alat', $id_alat)->pluck('do')->first() ?? 'No data available',
                'temperature' => Alat::where('id_alat', $id_alat)->pluck('temperature')->first() ?? 'No data available',
                'amonia' => Alat::where('id_alat', $id_alat)->pluck('amonia')->first() ?? 'No data available',
            ];
        }

        $data1 = getLatestData(1);
        $data2 = getLatestData(2);

        $data = [
            'ph1' => $data1['ph'],
            'tds1' => $data1['tds'],
            'do1' => $data1['do'],
            'temperature1' => $data1['temperature'],
            'amonia1' => $data1['amonia'],

            'ph2' => $data2['ph'],
            'tds2' => $data2['tds'],
            'do2' => $data2['do'],
            'temperature2' => $data2['temperature'],
            'amonia2' => $data2['amonia'],
        ];

        return view('dashboard', $data);
    }
}
