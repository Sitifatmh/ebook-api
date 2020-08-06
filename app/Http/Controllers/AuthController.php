<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            "nis" => 3103118125,
            "name" => "Siti Fatimah",
            "gender" => "Perempuan",
            "phone" => 628227950477,
            "class" => "XII RPL 4"
        ];
    }
}
