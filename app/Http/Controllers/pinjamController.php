<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;

class pinjamController extends Controller
{
    public function pinjam() {
        $pinjam = Pinjam::all();

        return view ('asterix.admin.pinjam.pinjam', [
            "dataPinjam" => $pinjam,
        ]);
    }
}
