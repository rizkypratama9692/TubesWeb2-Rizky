<?php

namespace App\Http\Controllers;

use App\item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AsterixController extends Controller
{
    public function index() {
        return view ('asterix.index');
        // echo "ini teh index";
    }

    public function toko() {
        $semua = item::paginate(6);
        $ruangStudio = item::where('jenis_item', 'Ruang Studio')->get();
        $alatStudio = item::where('jenis_item', 'Alat Studio')->get();
        $alatMusik = item::where('jenis_item', 'Alat Musik')->get();

        // contoh object
        // [
        //     "key" => "value"
        // ];
        
        return view ('asterix.toko', [
            "dataSemua" => $semua,
            "dataRuangStudio" => $ruangStudio,
            "dataAlatStudio" => $alatStudio,
            "dataAlatMusik" => $alatMusik
        ]); //list data teh nama variable buat dikirim ke halaman toko buat nampilin data tinu database gitu ok siga foreach
        // echo "ini teh index";
    }

    public function register(Request $request) {
        User::create([
            // "name" = buat nama kolom dari database => $request buat ngambil data ->name teh nama textbox yg ada di form
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => "penyewa"
        ]);

        return back()->with("success", "Akun berhasil dibuat");
    }
}
