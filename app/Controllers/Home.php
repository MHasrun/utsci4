<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Lakukan apa pun yang perlu dilakukan untuk menampilkan halaman beranda
        return view('home/index');
    }
}
