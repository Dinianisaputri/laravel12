@extends('layouts.app')

@section('title', 'Fitur FixLa')

@section('content')
<section class="section">
    <div class="text-center animate-on-scroll">
        <h2 class="section-title">Fitur FixLa</h2>
        <p class="section-subtitle">Solusi pelaporan jalan rusak yang cepat dan mudah</p>
    </div>

    <div class="feature-grid">
        <div class="feature-item animate-on-scroll">
            <div class="icon">📍</div>
            <h3>Laporan Lokasi</h3>
            <p>Kirim laporan dengan titik lokasi akurat menggunakan peta.</p>
        </div>
        <div class="feature-item animate-on-scroll">
            <div class="icon">📸</div>
            <h3>Upload Foto</h3>
            <p>Tambahkan bukti foto kondisi jalan rusak.</p>
        </div>
        <div class="feature-item animate-on-scroll">
            <div class="icon">📊</div>
            <h3>Tracking Status</h3>
            <p>Pantau perkembangan laporan secara real-time.</p>
        </div>
        <div class="feature-item animate-on-scroll">
            <div class="icon">⚡</div>
            <h3>Respon Cepat</h3>
            <p>Laporan langsung diteruskan untuk penanganan cepat.</p>
        </div>
        <div class="feature-item animate-on-scroll">
            <div class="icon">🔒</div>
            <h3>Data Aman</h3>
            <p>Data pengguna dijaga dengan sistem keamanan.</p>
        </div>
    </div>
</section>
@endsection

