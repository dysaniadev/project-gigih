<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index(): string
    {
        return view('v_dashboard');
    }
}
