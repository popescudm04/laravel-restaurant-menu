<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\View;



class loginController extends Controller
{
    public function showLoginForm()
    {
        $loginForm = View::make('login')->render();
        return response()->json(['loginForm' => $loginForm]);
    }


    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $admin = Admin::where('email', $email)
            ->where('password', $password)
            ->first();

        if ($admin) {
            return redirect('admin');
        } else {
            return back()->withErrors(['email' => 'Invalid email or password']);
        }
    }
}
