<?php

namespace App\Http\Controllers;

use App\item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AsterixController extends Controller
{
    public function index() {
        return view ('asterix.index');
        // return view buat nampilin halaman berdasarkan file dari folder view ok
    }

    public function toko() {
        $semua = item::paginate(6);
        // item::where teh fungsi orm buat select anu where anu
        // contoh item::where =  'nama kolom dari db' where 'value dari kolom nya'
        // get() buat ngambil data
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
        ]); //list data teh nama variable buat dikirim ke halaman toko buat nampilin data tinu database ke kek foreach
    }

    public function register(Request $request) {
        User::create([
            // "name" nama kolom dari db => $request buat ngambil data ->name teh nama textbox yg ada di form
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => "penyewa"
        ]);
        // return back buat kembali ke halaman sebeleumnay
        return back()->with("success", "Akun berhasil dibuat");
    }

    // dapet dari dokumentasi larapel genep
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // auth attempt buat login bawaan larapel
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect("/asterix");
            // return redirect nampilin halaman pake url routing
        }
    }

    public function ngitung(){
        return view ('asterix.struk');
    }

    public function admin_alat(){
        // $items = item::all(); kalo all tuh semua
        // return view('asterix.admin.alat', [
        //     'dataItems' => $items
        // ]);
        $ruangStudio = item::where('jenis_item', 'Ruang Studio')->get();
        $alatStudio = item::where('jenis_item', 'Alat Studio')->get();
        $alatMusik = item::where('jenis_item', 'Alat Musik')->get();

        return view('asterix.admin.alat', [
            "dataRuangStudio" => $ruangStudio,
            "dataAlatStudio" => $alatStudio,
            "dataAlatMusik" => $alatMusik
        ]);
    }

    // /pungsi logot dari dokumentasi larapel genep
    public function logout(){
        // auth logout fungsi logout dari larapel
        Auth::logout();
        return back();
    }
}
