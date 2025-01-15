<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home'); // Pastikan view 'home.php' ada di folder Views
    }
}
