<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function showAuthenticationPage()
    {
        return view('auth.authentication');
    }
}
