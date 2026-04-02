@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1>Hubungi Kami</h1>
        <p>Ada pertanyaan? Kirim pesan sekarang dan tim kami akan segera merespon.</p>
        
        <form class="contact-form">
            <div class="form-group">
                <input type="text" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea placeholder="Pesan Anda..." rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
        
        <div class="contact-info">
            <p><strong>Email:</strong> info@fixla.com</p>
            <p><strong>Phone:</strong> +62 123 456 789</p>
        </div>
    </div>
</div>
@endsection
