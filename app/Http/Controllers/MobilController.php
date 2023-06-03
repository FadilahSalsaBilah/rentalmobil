<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    protected $arrayMobil = [];

    function index() 
    {
        $dataMobil = session()->get('dataMobilNew');
        return view('pages.mobil.index', compact('dataMobil'));
    }

    function create()
    {
        return view('pages.mobil.form');
    }

    function store(Request $request)
    {
        //menampung input dari form
        $namaMobil = $request->nama_mobil; 
        $merkMobil = $request->merk_mobil;
        $CC = $request->CC;

        // menampung data mobil dari input ke array assosiatif
        $dataMobilBaru = [
            'namaMobil' => $namaMobil,
            'merkMobil' => $merkMobil,
            'CC' => $CC
        ];

        //push data ke arrayMobil
        array_push($this->arrayMobil, $dataMobilBaru);

        return redirect()->to('/mobil')->with('dataMobilNew',$this->arrayMobil);

    }
}
