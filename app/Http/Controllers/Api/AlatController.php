<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    //
    public function store(Request $request)
    {

        $alat = new alat();
        $suhu = $request->input('suhu');
        $ph = $request->input('ph');

        $amonia = 0;

        if ($ph < 6.5) {
            # code...
            $amonia = $ph / $suhu * 0.202;
        } elseif ($ph == 7.0) {
            # code...
            $amonia = $ph / $suhu * 1.131;
        } elseif ($ph > 7.0) {
            $amonia = $ph / $suhu * 3.306;
        }


        $data = [
            $alat->temperature = $suhu,
            $alat->ph = $ph,
            $alat->tds = $request->tds,
            $alat->do = $request->do,
            $alat->amonia = $amonia,
            $alat->id_alat = $request->id_alat,
            $alat->label = $request->label
        ];

        $alat->save($data);

        return response()->json(
            [
                'message' => 'Data berhasil di tambahkan',
                'data' => $alat
            ]
        );
    }
}
