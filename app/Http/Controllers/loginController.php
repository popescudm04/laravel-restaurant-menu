<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;



class loginController extends Controller
{

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
