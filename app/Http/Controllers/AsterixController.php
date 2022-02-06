<?php

namespace App\Http\Controllers;

use App\item;
use App\Pinjam;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Whoops\Run;

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
    
    public function ngitung(Request $request){
        $total = 0;
        $total = $request->harga_item*$request->lama_pinjam;

        return view ('asterix.struk', [
            'total' => $total,
            'data' => $request->all()
        ]);
        
    }

    public function bayar(Request $request){
        $payload=$request->all();
        $bayar=Pinjam::create(array_merge($payload, ['nama_user'=>Auth::user()->name]));
        if($bayar){
            $item=item::find($payload['id_item']);
            $item->status_item=1;
            $item->update();
            // $item->status_item=1; ini buat set value nya
            // $item->update(); ini buat ngejalanin perintah update value di kolom
            return back();
        }else{
            return back()->withErrors('error','gagal bayar ok');
        };
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

    public function tambah_item(){
        return view ('asterix.admin.form.create_item');
    }

    //Request $request = buat ngambil data inputan dari view
    public function store(Request $request){
        $payload = $request->all();
        item::create($payload);
        return back()->with('success', 'data berhasil ditambahkan');
    }
    
    // didalem update ada ($id) soalnya id nya dipanggil di routing
    public function update(Request $request, $id){
        // kenapa pake $request->all karena name input sama nama kolom db itu sama
        // $data = item::find($id);
        item::where('id', $id)->update([
            "jenis_item" => $request->jenis_item,
            "nama_item" => $request->nama_item,
            "gambar_item" => '',
            "status_item" => $request->status_item,
            "harga_item" => $request->harga_item,
            "harga_item" => $request->harga_item,
            "deskripsi_item" => $request->deskripsi_item,
            
        ]);
        return back()->with('success', 'data berhasil diedit');
    }

    // didalem update ada ($id) soalnya id nya dipanggil di routing
    public function edit_item($id){
        $data = item::find($id);
        $optionJenisItem = [
            "Alat Musik",
            "Alat Studio",
            "Ruang Studio"
        ];

        $optionStatusItem = [
            "0",
            "1"
        ];

        return view ('asterix.admin.form.edit_item', [
            'dataDetail' => $data,
            'jenis' => $optionJenisItem,
            'status' => $optionStatusItem
        ]);
    }
}
