
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Saya - Dini Anisa Putri</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .hero p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
            flex: 1;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }
        
        .contact-info {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        
        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #1e3a8a;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 40px;
        }
        
        .contact-text h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: #333;
        }
        
        .contact-text p {
            color: #666;
            margin: 0;
        }
        
        .contact-text a {
            color: #1e3a8a;
            text-decoration: none;
        }
        
        .contact-text a:hover {
            text-decoration: underline;
        }
        
        /* Form */
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        
        .contact-form h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #1e3a8a;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #1e3a8a;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(79, 172, 254, 0.4);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .contact-info,
            .contact-form {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    @include('navbar')
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Hubungi Saya</h1>
            <p>Saya siap collaborate dengan Anda!</p>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p><a href="mailto:dini@example.com">dinianisa521@gmail.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📱</div>
                        <div class="contact-text">
                            <h4>Telepon</h4>
                            <p><a href="tel:+62123456789">+62 8581 5515 489 </a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-text">
                            <h4>Lokasi</h4>
                            <p>Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">🕐</div>
                        <div class="contact-text">
                            <h4>Jam Operasional</h4>
                            <p>Senin - Minggu: 09:00 - 21:00</p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form">
                    <h3>Kirim Pesan</h3>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" placeholder="Masukkan subjek pesan" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn-submit">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Include Footer -->
    @include('footer')
</body>
</html>

