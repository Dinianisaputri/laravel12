
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - Dini Anisa Putri</title>
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
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
            flex: 1;
        }
        
        .page-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        
        .page-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #1e3a8a;
            margin-bottom: 50px;
            font-weight: 500;
        }
        
        .about-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .about-card h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #1e3a8a;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .about-card h2 .emoji {
            font-size: 1.5rem;
        }
        
        .about-card p {
            margin-bottom: 20px;
            color: #555;
            line-height: 1.8;
            text-align: justify;
        }
        
        .about-card p:last-child {
            margin-bottom: 0;
        }
        
        .about-card strong {
            color: #333;
        }
        
        .about-card a {
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 600;
        }
        
        .about-card a:hover {
            text-decoration: underline;
        }
        
        /* Info Cards */
        .info-section {
            margin-top: 50px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        
        .info-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            text-align: center;
        }
        
        .info-card .icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .info-card h3 {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 10px;
        }
        
        .info-card p {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 0;
        }
        
        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
            color: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            margin-top: 50px;
        }
        
        .contact-section h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        
        .contact-section p {
            opacity: 0.9;
            margin-bottom: 20px;
        }
        
        .contact-section a {
            display: inline-block;
            padding: 12px 30px;
            background: white;
            color: #1e3a8a;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .contact-section a:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }
            
            .about-card {
                padding: 25px;
            }
            
            .about-card h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    @include('navbar')
    
    <!-- About Section -->
    <section class="about">
        <div class="container">
            <h1 class="page-title">Tentang Saya</h1>
            <p class="page-subtitle">Mengubah ide menjadi karya visual yang menarik</p>
            
            <div class="about-card">
                <h2><span class="emoji">👋</span> Halo! Aku Dini</h2>
                <p>
                    Aku adalah seseorang yang sangat tertarik dengan dunia <strong>multimedia</strong> 
                    seperti desain grafis, video editing, dan cinematography. Bagiku, multimedia 
                    adalah tempat untuk mengekspresikan ide, kreativitas, dan imajinasi 
                    menjadi karya visual yang menarik.
                </p>
                
                <p>
                    Aku telah aktif mengikuti berbagai kegiatan kreatif seperti cinematography, 
                    produksi film pendek, dan editing video. Aku pernah menjadi editor dalam 
                    beberapa proyek film pendek yang bahkan sempat diproduksi dan dijual.
                </p>
                
                <p>
                    Ke depan, aku ingin terus mengembangkan kemampuan di dunia multimedia dan 
                    membangun <strong>freelance desain grafis</strong> agar bisa menghasilkan 
                    karya yang bermanfaat dan inspiratif untuk banyak orang.
                </p>
            </div>
            
            <!-- Info Cards -->
            <div class="info-section">
                <div class="info-grid">
                    <div class="info-card">
                        <div class="icon">🎨</div>
                        <h3>Desain Grafis</h3>
                        <p>Pembuatan identitas visual, logo, banner, dan materi promosi.</p>
                    </div>
                    <div class="info-card">
                        <div class="icon">🎥</div>
                        <h3>Video Editing</h3>
                        <p>Editing video profesional untuk konten YouTube dan film pendek.</p>
                    </div>
                    <div class="info-card">
                        <div class="icon">📹</div>
                        <h3>Cinematography</h3>
                        <p>Pengambilan gambar dan sinematografi untuk proyek video.</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Section -->
            <div class="contact-section">
                <h2>📩 Mari Berkolaborasi!</h2>
                <p>Kalau ingin berkolaborasi atau ngobrol tentang desain dan multimedia, jangan ragu untuk hubungi aku!</p>
                <a href="mailto:dini@example.com">dini@example.com</a>
            </div>
        </div>
    </section>
    
    <!-- Include Footer -->
    @include('footer')
</body>
</html>

