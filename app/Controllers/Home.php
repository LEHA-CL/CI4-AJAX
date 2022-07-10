<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Front/home');
    }

    public function listar()
    {
        return view('Front/crud/listar');
    }
}
