<?php

namespace App\Http\Controllers;

use App\item;
use Illuminate\Http\Request;

class AsterixController extends Controller
{
    public function index() {
        return view ('asterix.index');
        // echo "ini teh index";
    }

    public function toko() {
        $ruangStudio = item::where('jenis_item', 'Ruang Studio')->get();
        $alatStudio = item::where('jenis_item', 'Alat Studio')->get();
        $alatMusik = item::where('jenis_item', 'Alat Musik')->get();

        // contoh object
        // [
        //     "key" => "value"
        // ];
        
        return view ('asterix.toko', [
            "dataRuangStudio" => $ruangStudio,
            "dataAlatStudio" => $alatStudio,
            "dataAlatMusik" => $alatMusik
        ]); //list data teh nama variable buat dikirim ke halaman toko buat nampilin data tinu database gitu ok siga foreach
        // echo "ini teh index";
    }
}
