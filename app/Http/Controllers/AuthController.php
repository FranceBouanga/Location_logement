<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{ 
    public function login()
{
    $data = json_decode(file_get_contents(storage_path('json/auth-data.json')), true);
    return view('auth.login', compact('data'));

    return view('auth.login');
}

public function register()
{
    return view('auth.register');
}

}
