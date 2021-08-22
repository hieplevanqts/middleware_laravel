<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(LoginRequest $request)
    {
        if($request->username=="admin@gmail.com" && $request->password=="123456")
        {
            session()->put("email", $request->username);
            return redirect("admin");
        }
    }

    public function getLogin()
    {
        return view("Login.index");
    }
}
