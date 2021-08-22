<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(LoginRequest $request)
    {
        echo 1;
        die;
    }

    public function getLogin()
    {
        return view("Login.index");
    }
}
