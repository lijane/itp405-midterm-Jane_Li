<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        /* I tried to use Auth::attempt to make sure the user logged in is the admin, but it didn't work. 
        I also tried using Auth::user() */ 

        $email = 'dtang@usc.edu';
        $password = 'laravel';

        if (Auth::attempt(['email'=> $email, 'password' => $password ])){
        return $next($request);
        }

        else {
            return redirect('/login');
        }

        // if (Auth::check()) {
        //     return $next($request);
        // } else {
        //     return redirect('/login');
        // }
    }
}