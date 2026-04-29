@extends('layouts.app')

@section('title', 'Kelola Laporan')

@section('content')
<div class="container-fluid">
@yield('styles')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Laporan</h2>
        <a href="{{ route('admin.laporan.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Laporan
            </a>
    </div>
    
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
    
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- Search Form -->
    <form method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-5">
                <input type="text" name="search" class="form-control" placeholder="Cari judul atau lokasi..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <select name="status" class="form-select">
                    <option value="">Semua Status</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="diproses" {{ request('status') == 'diproses' ? 'selected' : '' }}>Diproses</option>
                    <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-outline-secondary">Cari</button>
                <a href="{{ route('admin.laporan.index') }}" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>

    <!-- Table -->
        <div class="table-responsive">
            <div class="table-container">
                <table class="table table-hover data-table table-responsive">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                    <th>User</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($laporans as $laporan)
                <tr>
                    <td>#{{ $laporan->id }}</td>
                    <td>{{ Str::limit($laporan->judul, 30) }}</td>
                    <td>{{ Str::limit($laporan->lokasi, 25) }}</td>
                    <td>
                        @switch($laporan->status)
                            @case('pending')
                                <span class="badge badge-warning">Pending</span>
                                @break
                            @case('diproses')
                                <span class="badge badge-info">Diproses</span>
                                @break
                            @case('selesai')
                                <span class="badge badge-success">Selesai</span>
                                @break
                            @default
                                <span class="badge badge-secondary">{{ ucfirst($laporan->status) }}</span>
                        @endswitch
                    </td>
                    <td>{{ $laporan->user->name ?? 'N/A' }}</td>
                    <td>{{ $laporan->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.laporan.show', $laporan) }}" class="btn btn-sm btn-outline-primary">Detail</a>
        <button class="btn btn-sm btn-outline-warning edit-btn" data-id="{{ $laporan->id }}" data-judul="{{ $laporan->judul }}" data-deskripsi="{{ $laporan->deskripsi }}" data-lokasi="{{ $laporan->lokasi }}" data-status="{{ $laporan->status }}" data-bs-toggle="modal" data-bs-target="#laporanModal">Edit</button>
                        <form action="{{ route('admin.laporan.destroy', $laporan) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus laporan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada laporan ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $laporans->appends(request()->query())->links() }}
        </div>
    </div>
</div>

<!-- CRUD Modal -->
<div class="modal fade" id="laporanModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Tambah Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="laporanForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="pending">Pending</option>
                                <option value="diproses">Diproses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetForm()">Batal</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function resetForm() {
    document.getElementById('laporanForm').reset();
    document.getElementById('modalTitle').textContent = 'Tambah Laporan';
    document.getElementById('editId').value = '';
    document.getElementById('laporanForm').action = '{{ route("admin.laporan.store") }}';
    document.getElementById('submitBtn').textContent = 'Simpan';
    const modal = bootstrap.Modal.getInstance(document.getElementById('laporanModal'));
    modal.hide();
}

document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.getElementById('editId').value = this.dataset.id;
        document.getElementById('judul').value = this.dataset.judul;
        document.getElementById('deskripsi').value = this.dataset.deskripsi;
        document.getElementById('lokasi').value = this.dataset.lokasi;
        document.getElementById('status').value = this.dataset.status;
        document.getElementById('modalTitle').textContent = 'Edit Laporan';
        document.getElementById('laporanForm').action = `{{ url("admin/laporan") }}/${this.dataset.id}`;
        document.getElementById('submitBtn').textContent = 'Update';
        document.getElementById('laporanForm').method = 'POST';
        // Add _method=PUT for update
        let methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'PUT';
        document.getElementById('laporanForm').appendChild(methodInput);
    });
});

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>
@endsection

