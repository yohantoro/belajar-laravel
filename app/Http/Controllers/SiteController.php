<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        $text = 'Ini adalah halaman beranda';

        // render file di direktori resources/views/site/halaman-beranda.blade.php
        return view('site.halaman-beranda', [
            'title' => $title,
            'text' => $text
        ]);
    }

    public function tampilkanMenuSatu()
    {
        $title = 'Menu 1';
        $text = 'Ini adalah halaman dari menu satu';

        // render file di direktori resources/views/site/halaman-menu-satu.blade.php
        return view('site.halaman-menu-satu', [
            'title' => $title,
            'text' => $text
        ]);
    }

    public function tampilkanMenuDua()
    {
        $title = 'Menu 2';
        $text = 'Ini adalah halaman dari menu dua';

        // render file di direktori resources/views/site/halaman-menu-dua.blade.php
        return view('site.halaman-menu-dua', [
            'title' => $title,
            'text' => $text
        ]);
    }
}
