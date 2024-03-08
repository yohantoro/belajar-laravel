<?php 
/**
 * Layout Utama 
 * 
 * Penggunaannya bisa menggunakan sintaks blade @extends('layouts.main')
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        .navbar {
            background-color: antiquewhite; 
            padding: 15px; 
            font-weight: bold;
        }
        ul.menu li {
            display:inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    {{-- navbar menu --}}
    <nav class="navbar">
        <ul class="menu">
            <li>
                <a href="{{ url('/') }}">Beranda</a>
            </li>
            <li>
                <a href="{{ url('menu-1') }}">Menu 1</a>
            </li>
            <li>
                <a href="{{ url('menu-2') }}">Menu 2</a>
            </li>
        </ul>
    </nav>
    
    {{-- sintaks blade @yield di bawah ini berfungsi sebagai tempat untuk menampilkan konten/output --}}
    @yield('content')

</body>
</html>