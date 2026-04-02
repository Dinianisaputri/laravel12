@extends('layouts.app')

@section('title', 'FixLa - Laporkan Kerusakan Jalan Lamongan')

@section('content')

<div class="hero">
    <div class="hero-content">
        <h1>FixLa - Laporkan Kerusakan Jalan di Lamongan</h1>
        <p>Temukan, laporkan, dan pantau kerusakan jalan di wilayah Lamongan. Bersama kita perbaiki infrastruktur daerah!</p>
        <div class="hero-buttons">
            <a href="/laporan" class="btn btn-primary">Laporkan Sekarang</a>
            <a href="/fitur" class="btn btn-secondary">Lihat Fitur</a>
        </div>
    </div>
</div>

@endsection