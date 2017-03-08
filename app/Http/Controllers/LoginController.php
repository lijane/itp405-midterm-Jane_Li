<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $loginWasSuccessful = Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        // $name = request('name');
        // return $name;

        if ($loginWasSuccessful) {

            // $name = request('name');

            return redirect('/admin')
            ->with('successStatus','Welcome back,');

            /* I just spent the last hour trying to figure out how to flash message the name dynamically (and finish Question 4) :(
                I've tried saving it as a variable and then concatenating it into the flash message, using double quotes, 
                and adding it as a secord portion in index.blade.php. */

        } else {
            return redirect('/login')
            ->with('failStatus','Invalid credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
