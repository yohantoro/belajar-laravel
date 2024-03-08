<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        $text = 'Ini adalah halaman beranda';

        return view('site.halaman-beranda', [
            'title' => $title,
            'text' => $text
        ]);
    }

    public function tampilkanMenuSatu()
    {
        $title = 'Menu 1';
        $text = 'Ini adalah halaman dari menu satu';

        return view('site.halaman-menu-satu', [
            'title' => $title,
            'text' => $text
        ]);
    }

    public function tampilkanMenuDua()
    {
        $title = 'Menu 2';
        $text = 'Ini adalah halaman dari menu dua';

        return view('site.halaman-menu-dua', [
            'title' => $title,
            'text' => $text
        ]);
    }
}
