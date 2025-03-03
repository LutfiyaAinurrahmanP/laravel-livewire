<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckSession
{
    public function handle(Request $request, Closure $next): Response
    {
        // Jika user belum login, maka redirect ke halaman utama (login)
        if (!Session::has('user_name') && !$request->is('/')) {
            return redirect('/');
        }

        // Jika user sudah login dan mencoba akses halaman login, redirect ke dashboard
        if (Session::has('user_name') && $request->is('/')) {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
