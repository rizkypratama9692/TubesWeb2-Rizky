<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsterixController extends Controller
{
    public function index() {
        return view ('asterix.index');
        // echo "ini teh index";
    }
}
