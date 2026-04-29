@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<div class="auth-container">
    <div class="auth-card animate-on-scroll">
        <div class="auth-header">
            <div class="auth-icon">🔐</div>
            <h1>Login Admin</h1>
            <p>Masuk ke panel admin FixLa</p>
        </div>

        <form action="{{ url('/admin/login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="admin@fixla.com" required value="{{ old('email') }}">
            </div>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-primary btn-full">Masuk</button>
        </form>

        <div class="auth-footer">
            <p><a href="{{ url('/') }}">← Kembali ke Beranda</a></p>
        </div>
    </div>
</div>
@endsection

