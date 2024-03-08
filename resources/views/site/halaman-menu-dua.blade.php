{{-- gunakan template dari resources/views/layouts/main.blade.php --}}
@extends('layouts.main')

{{-- masukkan konten ke @yield('content') yang ada di layout --}}
@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $text }}</p>    
@endsection