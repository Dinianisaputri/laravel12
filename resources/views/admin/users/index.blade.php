@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
<div class="container-fluid">
@yield('styles')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Pengguna</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal" onclick="resetModal()">
            <i class="fas fa-plus"></i> Tambah Pengguna
        </button>
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
                <input type="text" name="search" class="form-control" placeholder="Cari nama atau email..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <select name="role" class="form-select">
                    <option value="">Semua Role</option>
                    <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-outline-secondary">Cari</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Reset</a>
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Terdaftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>#{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @switch($user->role)
                            @case('admin')
                                <span class="badge badge-danger">Admin</span>
                                @break
                            @case('user')
                                <span class="badge badge-primary">User</span>
                                @break
                            @default
                                <span class="badge badge-secondary">{{ ucfirst($user->role) }}</span>
                        @endswitch
                    </td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-outline-primary">Detail</a>
        <button class="btn btn-sm btn-outline-warning edit-btn" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-role="{{ $user->role }}" data-bs-toggle="modal" data-bs-target="#userModal">Edit</button>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus pengguna ini? (tidak bisa di-undo)')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada pengguna ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $users->appends(request()->query())->links() }}
        </div>
    </div>
</div>

<!-- CRUD Modal (Note: Password handling simplified - full auth would need more security) -->
<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="userForm" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3" id="passwordGroup">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <div class="form-text">Biarkan kosong untuk tidak mengubah password.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select name="role" id="role" class="form-select">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetUserForm()">Batal</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function resetUserForm() {
    document.getElementById('userForm').reset();
    document.getElementById('passwordGroup').style.display = 'block';
    document.getElementById('modalTitle').textContent = 'Tambah Pengguna';
    document.getElementById('editId').value = '';
    document.getElementById('userForm').action = '{{ route("admin.users.store") }}';
    document.getElementById('submitBtn').textContent = 'Simpan';
    let methodInput = document.getElementById('userForm').querySelector('input[name="_method"]');
    if (methodInput) methodInput.remove();
    const modal = bootstrap.Modal.getInstance(document.getElementById('userModal'));
    modal.hide();
}

document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.getElementById('editId').value = this.dataset.id;
        document.getElementById('name').value = this.dataset.name;
        document.getElementById('email').value = this.dataset.email;
        document.getElementById('role').value = this.dataset.role;
        document.getElementById('password').required = false;
        document.getElementById('password').placeholder = 'Kosongkan untuk tidak ubah';
        document.getElementById('passwordGroup').style.display = 'block';
        document.getElementById('modalTitle').textContent = 'Edit Pengguna';
        document.getElementById('userForm').action = `{{ url("admin/users") }}/${this.dataset.id}`;
        document.getElementById('submitBtn').textContent = 'Update';
        
        let methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'PUT';
        document.getElementById('userForm').appendChild(methodInput);
    });
});
</script>

@endsection

