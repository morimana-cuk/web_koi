<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\alat;
use App\Models\Amonia;
use App\Models\Kualitas;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function store(Request $request)
    {
        $client = new Client();

        // Mengambil input dari request
        $suhu = $request->input('suhu');
        $ph = $request->input('ph');
        $tds = $request->input('tds');
        $do = $request->input('do');
        $id_alat = $request->input('id_alat');

        #$suhu_baru = $suhu - 4.0;

        $amonia = 0;

        if ($ph < 6.5) {
            # code...
            $amonia = $ph / $suhu * 0.202;
        }

        if ($ph == 7.0) {
            # code...
            $amonia = $ph / $suhu * 1.131;
        }

        if ($ph > 7.0) {
            # code...
            $amonia = $ph / $suhu * 3.306;
        }

        // Inisialisasi objek alat
        $alat = new alat();
        $kualitas_air = new Kualitas();

        try {
            // Jika response berhasil, simpan data ke dalam database
            $data = [
                'suhu' => $suhu,
                'ph' => $ph,
                'tds' => $tds,
                'do' => $do,
                'amonia' => $amonia,
                'id_alat' => $id_alat,
            ];

            $alat->fill($data);
            $alat->save();

            if ($id_alat == 1) {
                // Mengirimkan request POST ke API
                $response = $client->request('POST', 'https://sanke-ai.research-ai.my.id/kualitas-air', [
                    'form_params' => [
                        'suhu' => $suhu,
                        'ph' => $ph,
                        'tds' => $tds,
                        'id_alat' => $id_alat
                    ]
                ]);
            }

            if ($id_alat == 2) {
                $response = $client->request('POST', 'https://sanke-ai.research-ai.my.id/kualitas-air', [
                    'form_params' => [
                        'suhu' => $suhu,
                        'ph' => $ph,
                        'tds' => $tds,
                        'id_alat' => $id_alat
                    ]
                ]);
            }

            $body = $response->getBody();

            $data = json_decode($body, true);

            $data2 = [
                'suhu' => $suhu,
                'ph' => $ph,
                'tds' => $tds,
                'label' => $data['label'],
                'id_alat' => $id_alat,
            ];

            $kualitas_air->fill($data2);
            $kualitas_air->save();

            return response()->json(
                [
                    'message' => 'Data berhasil ditambahkan',
                    'data' => $alat
                ]
            );
        } catch (ServerException $e) {
            // Menangani kesalahan server
            return response()->json(
                [
                    'message' => 'Terjadi kesalahan pada server',
                    'error' => $e->getMessage()
                ],
                500 // Mengembalikan status code 500
            );
        } catch (\Exception $e) {
            // Menangani kesalahan umum
            return response()->json(
                [
                    'message' => 'Terjadi kesalahan',
                    'error' => $e->getMessage()
                ],
                500 // Mengembalikan status code 500
            );
        }
    }
}
