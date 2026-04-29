@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1>Hubungi Kami</h1>
        <p>Ada pertanyaan? Kirim pesan sekarang dan tim kami akan segera merespon.</p>
    </div>
</div>

<section class="section">
    <div class="contact-wrapper animate-on-scroll">
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Pesan Anda..." rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>

    <div class="contact-info animate-on-scroll">
        <p><strong>Email:</strong> info@fixla.com</p>
        <p><strong>Phone:</strong> +62 123 456 789</p>
    </div>
</section>
@endsection

