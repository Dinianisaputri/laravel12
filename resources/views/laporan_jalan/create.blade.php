@extends('laporan_jalan.app')

@section('title', 'Tambah Laporan Jalan')

@section('content')
<div class="py-4">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">

<div>
<h1 class="h3 mb-1">Tambah Laporan Jalan</h1>
<p class="text-muted mb-0">Masukkan informasi laporan jalan rusak baru ke dalam sistem.</p>
</div>
<a href="{{ route('laporan-jalan.index') }}" class="btn btn-outline-secondary">
<i class="bi bi-arrow-left me-1"></i> Kembali
</a>
</div>

<div class="card shadow-sm rounded-4">
<div class="card-body p-4">
<form action="{{ route('laporan-jalan.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="row g-3">
<div class="col-12 col-md-6">
<label class="form-label">No Tiket</label>
<input type="text" name="nomor_tiket" value="{{ old('nomor_tiket') }}" class="form-control @error('nomor_tiket') is-invalid @enderror" placeholder="Masukkan nomor tiket laporan">
@error('nomor_tiket')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="col-12 col-md-6">
<label class="form-label">Judul</label>
<input type="text" name="judul" value="{{ old('judul') }}" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul laporan jalan rusak">
@error('judul')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="col-12 col-md-6">
<label class="form-label">Kategori</label>
<input type="text" name="kategori" value="{{ old('kategori') }}" class="form-control @error('kategori') is-invalid @enderror" placeholder="Contoh: Jalan Rusak, Lubang Aspal">
@error('kategori')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="col-12 col-md-6">
<label class="form-label">Foto</label>
<input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
@error('foto')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
<small class="text-muted">Opsional, maksimal 2MB.</small>
</div>

<div class="col-12">
<label class="form-label">Deskripsi</label>
<textarea name="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi lengkap kerusakan jalan">{{ old('deskripsi') }}</textarea>

@error('deskripsi')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
</div>

<div class="d-flex justify-content-end gap-2 mt-4">
<a href="{{ route('laporan-jalan.index') }}" class="btn btn-outline-secondary">Batal</a>
<button type="submit" class="btn btn-primary">Simpan Data</button>
</div>
</form>
</div>
</div>
</div>
@endsection

