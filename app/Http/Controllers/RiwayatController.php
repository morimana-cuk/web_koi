<?php

namespace App\Http\Controllers;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function riwayatTemperature()
    {
        return view('riwayat/temperature');
    }

    public function riwayatHumidity()
    {
        return view('riwayat/humidity');
    }

    public function riwayatAmonia()
    {
        return view('riwayat/amonia');
    }

    public function riwayatDioksida()
    {
        return view('riwayat/dioksida');
    }

    public function riwayatMetana()
    {
        return view('riwayat/metana');
    }
}
