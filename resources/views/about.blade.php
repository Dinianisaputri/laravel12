@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1>Tentang FixLa</h1>
        <p>Inisiatif masyarakat untuk infrastruktur jalan yang lebih baik di Lamongan.</p>
    </div>
</div>

<section class="features">
    <div class="features">
        <h2>Misi Kami</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>🚧 Perbaikan Cepat</h3>
                <p>Mempercepat proses perbaikan kerusakan jalan melalui pelaporan langsung.</p>
            </div>
            <div class="feature-item">
                <h3>📊 Data Transparan</h3>
                <p>Semua laporan dapat dipantau publik untuk transparansi penuh.</p>
            </div>
            <div class="feature-item">
                <h3>🤝 Kolaborasi</h3>
                <p>Bekerja sama dengan pemerintah daerah dan komunitas lokal.</p>
            </div>
            <div class="feature-item">
                <h3>🌟 Gratis</h3>
                <p>Layanan pelaporan 100% gratis untuk semua warga Lamongan.</p>
            </div>
        </div>
    </div>
</section>

<section class="stats">
    <div class="stat-item">
        <h3>2020</h3>
        <p>Didirikan</p>
    </div>
    <div class="stat-item">
        <h3>100%</h3>
        <p>Gratis</p>
    </div>
    <div class="stat-item">
        <h3>Lamongan</h3>
        <p>Cakupan</p>
    </div>
</section>
@endsection