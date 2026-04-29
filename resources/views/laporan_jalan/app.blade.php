<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Manajemen Laporan Jalan - FixLa')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
body{background:#f4f7fb}
.card{border:none;border-radius:22px;box-shadow:0 18px 45px rgba(15,23,42,.08)}
.navbar-brand{font-weight:700;letter-spacing:.04em}
.profile-thumb{width:56px;height:56px;object-fit:cover;border-radius:.75rem;border:3px solid #fff;box-shadow:0 12px 28px rgba(15,23,42,.12)}
.table thead th{border-bottom-width:2px}
.form-control:focus{box-shadow:0 0 0 .2rem rgba(13,110,253,.15)}
.badge-soft-primary{color:#0d6efd;background:rgba(13,110,253,.12)}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
<div class="container">
<a class="navbar-brand" href="{{ route('laporan-jalan.index') }}">FixLa - Laporan Jalan</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link" href="{{ route('laporan-jalan.index') }}">Daftar</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('laporan-jalan.create') }}">Tambah</a>
</li>
</ul>
</div>
</div>
</nav>
<main class="container py-4">
@yield('content')
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
