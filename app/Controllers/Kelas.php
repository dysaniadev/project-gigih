<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    public function index(): string
    {
        return view('v_dashboard');
    }
}
