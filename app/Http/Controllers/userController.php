<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    public function user() {
        $user = User::all();

        return view ('asterix.admin.user.user', [
            "dataUser" => $user,
        ]);
    }
    
}
