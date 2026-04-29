@extends('laporan_jalan.app')

@section('title', 'Detail Laporan Jalan')

@section('content')
<div class="py-4">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
<div>
<h1 class="h3 mb-1">Detail Laporan Jalan</h1>
<p class="text-muted mb-0">Informasi lengkap laporan jalan yang dipilih.</p>
</div>
<a href="{{ route('laporan-jalan.index') }}" class="btn btn-outline-secondary">
<i class="bi bi-arrow-left me-1"></i> Kembali
</a>
</div>

<div class="row g-4">
<div class="col-12 col-xl-4">
<div class="card shadow-sm rounded-4 text-center p-4">
<div class="mb-4">
@if($laporanJalan->foto)
<img src="{{ asset('storage/' . $laporanJalan->foto) }}" alt="Foto Laporan" class="profile-thumb mb-3">
@else
<span class="d-inline-block bg-secondary rounded-circle profile-thumb"></span>
@endif
</div>
<h2 class="h5 mb-1">{{ $laporanJalan->judul }}</h2>
<p class="text-muted mb-0">{{ $laporanJalan->kategori }}</p>
</div>
</div>
<div class="col-12 col-xl-8">
<div class="card shadow-sm rounded-4 p-4">
<div class="row g-3">
<div class="col-12 col-md-6">
<span class="text-uppercase text-muted small">No Tiket</span>
<div class="fw-semibold">{{ $laporanJalan->nomor_tiket }}</div>
</div>
<div class="col-12 col-md-6">
<span class="text-uppercase text-muted small">Kategori</span>
<div class="fw-semibold">{{ $laporanJalan->kategori }}</div>
</div>
<div class="col-12">
<span class="text-uppercase text-muted small">Deskripsi</span>
<div class="fw-semibold">{{ $laporanJalan->deskripsi }}</div>
</div>
</div>

<div class="d-flex justify-content-end gap-2 mt-4">
<a href="{{ route('laporan-jalan.edit', $laporanJalan) }}" class="btn btn-warning">
<i class="bi bi-pencil-square me-1"></i> Edit
</a>
<a href="{{ route('laporan-jalan.index') }}" class="btn btn-outline-secondary">Kembali</a>
</div>
</div>
</div>
</div>
</div>
@endsection

