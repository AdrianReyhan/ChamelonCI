<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }
    public function register(): string
    {
        return view('auth/register');
    }

    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function rmstock(): string
    {
        return view('RmStock');
    }
    public function defecttarget(): string
    {
        return view('DefectTargetQTY');
    }

}
