@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="admin-header">
    <div class="admin-title">
        <h1>Dashboard Admin</h1>
        <p>Selamat datang kembali, {{ Auth::user()->name ?? 'Admin' }}</p>
    </div>
    <form action="{{ url('/admin/logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit" class="btn btn-secondary">Keluar</button>
    </form>
</div>

<section class="section">
    <div class="stats-grid">
        <div class="stat-card animate-on-scroll">
            <div class="stat-icon">📋</div>
            <div class="stat-number">128</div>
            <div class="stat-label">Total Laporan</div>
        </div>
        <div class="stat-card animate-on-scroll">
            <div class="stat-icon">⏳</div>
            <div class="stat-number">42</div>
            <div class="stat-label">Menunggu</div>
        </div>
        <div class="stat-card animate-on-scroll">
            <div class="stat-icon">🔧</div>
            <div class="stat-number">56</div>
            <div class="stat-label">Dalam Proses</div>
        </div>
        <div class="stat-card animate-onscroll">
            <div class="stat-icon">✅</div>
            <div class="stat-number">30</div>
            <div class="stat-label">Selesai</div>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-6 mb-4">
            <a href="{{ route('admin.laporan.index') }}" class="action-card dashboard-link h-100">
                <div class="action-icon">📊</div>
                <h3>Kelola Laporan</h3>
                <p>Lihat semua laporan, edit status, hapus</p>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <a href="{{ route('admin.users.index') }}" class="action-card dashboard-link h-100">
                <div class="action-icon">👥</div>
                <h3>Kelola Pengguna</h3>
                <p>Tambah/edit/hapus users dan admins</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h3 class="section-title mb-4">Laporan Terbaru (5 terakhir)</h3>
            @if(isset($recentLaporans) && $recentLaporans->count() > 0)
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentLaporans as $laporan)
                        <tr>
                            <td>#{{ $laporan->id }}</td>
                            <td>{{ Str::limit($laporan->judul, 20) }}</td>
                            <td>{{ Str::limit($laporan->lokasi, 20) }}</td>
                            <td>
                                @switch($laporan->status)
                                    @case('pending') <span class="badge bg-warning text-dark">Pending</span> @break
                                    @case('diproses') <span class="badge bg-info">Diproses</span> @break
                                    @case('selesai') <span class="badge bg-success">Selesai</span> @break
                                    @default <span class="badge bg-secondary">{{ ucfirst($laporan->status) }}</span>
                                @endswitch
                            </td>
                            <td>{{ $laporan->created_at->format('d/m') }}</td>
                            <td><a href="{{ route('admin.laporan.show', $laporan) }}" class="table-link">Detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p class="text-muted">Belum ada laporan.</p>
            @endif
        </div>
        <div class="col-md-4">
            <h3 class="section-title mb-4">Statistik Pengguna</h3>
            <div class="stat-card">
                <div class="stat-number">{{ $totalUsers ?? 0 }}</div>
                <div class="stat-label">Total Pengguna</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $adminCount ?? 0 }}</div>
                <div class="stat-label">Admin</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $userCount ?? 0 }}</div>
                <div class="stat-label">Users</div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
.dashboard-link {
    text-decoration: none;
    color: inherit;
    transition: transform 0.2s, box-shadow 0.2s;
}
.dashboard-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
</style>


