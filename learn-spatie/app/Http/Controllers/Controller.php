<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
     $name = $request -> name;
     $email = $request -> email;
     $password = $request -> password;
     
     $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($password)
     ]);
    }
}
