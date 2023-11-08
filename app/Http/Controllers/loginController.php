<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class loginController extends Controller
{
    public function showLoginForm()
    {
        $loginForm = View::make('login')->render();
        return response()->json(['loginForm' => $loginForm]);
    }
}

