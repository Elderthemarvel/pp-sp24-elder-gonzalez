<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function framework(): string
    {
        return view('framework');
    }

    public function aplicaciones(): string
    {
        return view('aplicaciones');
    }

    public function creditos(): string
    {
        return view('creditos');
    }

}
