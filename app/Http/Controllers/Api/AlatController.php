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

            $response = $client->request('POST', 'http://20.5.232.50:5001/predict', [
                'form_params' => [
                    'ph' => $ph,
                    'suhu' => $suhu,
                    'tds' => $tds,
                ]
            ]);

            // if ($id_alat == 1) {
            //     // Mengirimkan request POST ke API
            //     $response = $client->request('POST', 'http://20.5.232.50/kualitas-air', [
            //         'form_params' => [
            //             'suhu' => $suhu,
            //             'ph' => $ph,
            //             'tds' => $tds,
            //             'id_alat' => $id_alat
            //         ]
            //     ]);
            // }

            // if ($id_alat == 2) {
            //     $response = $client->request('POST', 'http://20.5.232.50/kualitas-air', [
            //         'form_params' => [
            //             'suhu' => $suhu,
            //             'ph' => $ph,
            //             'tds' => $tds,
            //             'id_alat' => $id_alat
            //         ]
            //     ]);
            // }
            // $body = $response->getBody();

            $responseBody = json_decode($response->getBody(), true);

            // if ($suhu >= 20 && $suhu <= 28 && $ph >= 7.0 && $ph <= 7.8 && $tds >= 0 && $tds <= 150) {
            //     # code...
            //      $label = 'Bagus';
            // }else{
            //      $label = 'Buruk';
            // }

            $data2 = [
                'suhu' => $suhu,
                'ph' => $ph,
                'tds' => $tds,
                'label' => $responseBody['prediction'],
            ];

            $kualitas_air->fill($data2);
            $kualitas_air->save();

            $data = [$alat, $kualitas_air];
            return response()->json(
                [
                    'message' => 'Data berhasil ditambahkan',
                    'data' => $data,
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


        // if (!($suhu >= 20 && $suhu <= 28) || !($ph >= 7.0 && $ph <= 7.8) || !($tds >= 0 && $tds <= 150)) {
        //     // Menghasilkan angka acak dengan 2 desimal
        //     $suhubaru = round(mt_rand(2000, 2800) / 100, 1); // 20.0 - 28.0
        //     $phbaru = round(mt_rand(700, 780) / 100, 1); // 7.0 - 7.8
        //     $tdsbaru = rand(0, 150); // 0 - 150
        // }

        // $amoniabaru = 0;

        // if ($ph < 6.5) {
        //     # code...
        //     $amoniabaru = $ph / $suhu * 0.202;
        // }

        // if ($phbaru == 7.0) {
        //     # code...
        //     $amoniabaru = $phbaru / $suhubaru * 1.131;
        // }

        // if ($phbaru > 7.0) {
        //     # code...
        //     $amoniabaru = $phbaru / $suhubaru * 3.306;
        // }

        // try {
        //     // Jika response berhasil, simpan data ke dalam database
        //     $data = [
        //         'suhu' => $suhubaru,
        //         'ph' => $phbaru,
        //         'tds' => $tdsbaru,
        //         'do' => $do,
        //         'amonia' => $amoniabaru,
        //         'id_alat' => $id_alat,
        //     ];

        //     $alat->fill($data);
        //     $alat->save();

        //     if ($id_alat == 1) {
        //         // Mengirimkan request POST ke API
        //         $response = $client->request('POST', 'http://20.5.232.50/kualitas-air', [
        //             'form_params' => [
        //                 'suhu' => $suhubaru,
        //                 'ph' => $phbaru,
        //                 'tds' => $tdsbaru,
        //                 'id_alat' => $id_alat
        //             ]
        //         ]);
        //     }

        //     if ($id_alat == 2) {
        //         $response = $client->request('POST', 'http://20.5.232.50/kualitas-air', [
        //             'form_params' => [
        //                 'suhu' => $suhubaru,
        //                 'ph' => $phbaru,
        //                 'tds' => $tdsbaru,
        //                 'id_alat' => $id_alat
        //             ]
        //         ]);
        //     }

        //     $body = $response->getBody();

        //     $data = json_decode($body, true);
        //     // if ($suhu >= 20 && $suhu <= 28 && $ph >= 7.0 && $ph <= 7.8 && $tds >= 0 && $tds <= 150) {
        //     //     # code...
        //     //      $label = 'Bagus';
        //     // }else{
        //     //      $label = 'Buruk';
        //     // }

        //     $data2 = [
        //         'suhu' => $suhubaru,
        //         'ph' => $phbaru,
        //         'tds' => $tdsbaru,
        //         'label' => $data['label'],
        //         'id_alat' => $id_alat,
        //     ];

        //     $kualitas_air->fill($data2);
        //     $kualitas_air->save();

        //     $data = [$alat, $kualitas_air];
        //     return response()->json(
        //         [
        //             'message' => 'Data berhasil ditambahkan',
        //             'data' => $data,
        //         ]
        //     );
        // } catch (ServerException $e) {
        //     // Menangani kesalahan server
        //     return response()->json(
        //         [
        //             'message' => 'Terjadi kesalahan pada server',
        //             'error' => $e->getMessage()
        //         ],
        //         500 // Mengembalikan status code 500
        //     );
        // } catch (\Exception $e) {
        //     // Menangani kesalahan umum
        //     return response()->json(
        //         [
        //             'message' => 'Terjadi kesalahan',
        //             'error' => $e->getMessage()
        //         ],
        //         500 // Mengembalikan status code 500
        //     );
        // }
    }
}
