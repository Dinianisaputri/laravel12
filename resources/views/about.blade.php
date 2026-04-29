@extends('layouts.app')

@section('title', 'Tentang FixLa')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1>Tentang FixLa</h1>
        <p>Inisiatif masyarakat untuk infrastruktur jalan yang lebih baik di Lamongan.</p>
    </div>
</div>

<section class="section">
    <h2 class="section-title animate-on-scroll">Misi Kami</h2>
    <div class="feature-grid">
        <div class="feature-item animate-on-scroll">
            <div class="icon">🚧</div>
            <h3>Perbaikan Cepat</h3>
            <p>Mempercepat proses perbaikan kerusakan jalan melalui pelaporan langsung.</p>
        </div>
        <div class="feature-item animate-on-scroll">
            <div class="icon">📊</div>
            <h3>Data Transparan</h3>
            <p>Semua laporan dapat dipantau publik untuk transparansi penuh.</p>
        </div>
        <div class="feature-item animate-on-scroll">
            <div class="icon">🤝</div>
            <h3>Kolaborasi</h3>
            <p>Bekerja sama dengan pemerintah daerah dan komunitas lokal.</p>
        </div>
        <div class="feature-item animate-on-scroll">
            <div class="icon">🌟</div>
            <h3>Gratis</h3>
            <p>Layanan pelaporan 100% gratis untuk semua warga Lamongan.</p>
        </div>
    </div>
</section>

<section class="stats">
    <div class="stat-item animate-on-scroll">
        <h3>2020</h3>
        <p>Didirikan</p>
    </div>
    <div class="stat-item animate-on-scroll">
        <h3>100%</h3>
        <p>Gratis</p>
    </div>
    <div class="stat-item animate-on-scroll">
        <h3>Lamongan</h3>
        <p>Cakupan</p>
    </div>
</section>
@endsection

