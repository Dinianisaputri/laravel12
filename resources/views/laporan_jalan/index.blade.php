@extends('laporan_jalan.app')

@section('title', 'Data Laporan Jalan')

@section('content')
<div class="py-4">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
<div>
<h1 class="h3 mb-1">Manajemen Laporan Jalan</h1>
<p class="text-muted mb-0">Lihat, tambah, dan kelola data laporan jalan rusak dengan antarmuka modern.</p>
</div>
<a href="{{ route('laporan-jalan.create') }}" class="btn btn-primary btn-lg shadow-sm">
<i class="bi bi-plus-lg me-2"></i> Tambah Laporan
</a>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show rounded-4" role="alert">
<i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row gy-4">
<div class="col-12 col-xl-4">
<div class="card p-4 bg-white shadow-sm rounded-4 h-100">
<div class="d-flex align-items-center justify-content-between mb-3">
<div>
<h2 class="h5 mb-1">Ringkasan</h2>
<p class="text-muted mb-0">Jumlah laporan yang terdaftar.</p>
</div>
<span class="badge rounded-pill bg-primary py-2 px-3">Aktif</span>
</div>
<div class="display-6 fw-bold">{{ $data->total() }}</div>
<div class="mt-3 text-muted">Data terbaru diambil dari database.</div>
</div>
</div>
<div class="col-12 col-xl-8">
<div class="card p-4 shadow-sm rounded-4 bg-white">
<div class="mb-3">

<div class="input-group bg-light rounded-3 overflow-hidden">
<span class="input-group-text bg-white border-end-0">
<i class="bi bi-search"></i>
</span>
<input type="search" class="form-control border-start-0" placeholder="Cari laporan..." disabled>
</div>
</div>
<div class="table-responsive">
<table class="table table-hover align-middle mb-0">
<thead class="table-light">
<tr>
<th>#</th>
<th>Judul</th>
<th>No Tiket</th>
<th>Kategori</th>
<th>Deskripsi</th>
<th class="text-center">Aksi</th>
</tr>
</thead>
<tbody>
@forelse($data as $item)
<tr>
<td>{{ $loop->iteration }}</td>
<td>
<div class="fw-semibold">{{ $item->judul }}</div>
<div class="text-muted small">{{ $item->kategori }}</div>
</td>
<td>{{ $item->nomor_tiket }}</td>
<td>{{ $item->kategori }}</td>
<td>{{ \Illuminate\Support\Str::limit($item->deskripsi, 50) }}</td>
<td class="text-center">
<a href="{{ route('laporan-jalan.show', $item) }}" class="btn btn-sm btn-outline-primary me-1" title="Lihat">
<i class="bi bi-eye"></i>
</a>
<a href="{{ route('laporan-jalan.edit', $item) }}" class="btn btn-sm btn-outline-warning me-1" title="Edit">
<i class="bi bi-pencil-square"></i>
</a>
<form action="{{ route('laporan-jalan.destroy', $item) }}" method="POST" class="d-inline">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus laporan ini?')">
<i class="bi bi-trash"></i>
</button>
</form>
</td>
</tr>
@empty
<tr>
<td colspan="6" class="text-center py-5 text-muted">Belum ada data laporan. Klik tombol "Tambah Laporan" untuk mulai menambahkan.</td>
</tr>
@endforelse
</tbody>
</table>
</div>

@if($data->hasPages())
<div class="mt-4">
{{ $data->links('pagination::bootstrap-5') }}
</div>
@endif>
</div>
</div>
</div>
</div>
</div>
@endsection

