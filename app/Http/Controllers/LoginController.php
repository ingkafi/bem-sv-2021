<?php


namespace App\Http\Controllers;

use App\Models\User;

class Loginontroller extends Controller
{
    public function login()
    {
        $user = User::all();
    }
}
