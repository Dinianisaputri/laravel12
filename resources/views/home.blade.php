
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dini Anisa Putri - Portfolio</title>
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
            padding: 120px 0;
            text-align: center;
            flex: 1;
            display: flex;
            align-items: center;
        }
        
        .hero-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            width: 100%;
        }
        
        .hero-text {
            text-align: left;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .hero .tagline {
            font-size: 1.5rem;
            margin-bottom: 10px;
            opacity: 0.95;
        }
        
        .hero .subtagline {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.85;
        }
        
        .btn {
            display: inline-block;
            padding: 15px 35px;
            background-color: #fff;
            color: #1e3a8a;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin: 5px;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .hero-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fff 0%, #f0f0f0 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10rem;
            box-shadow: 0 25px 80px rgba(0,0,0,0.25);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                padding: 80px 0;
            }
            
            .hero h1 {
                font-size: 2.5rem;
                text-align: center;
            }
            
            .hero .tagline {
                font-size: 1.2rem;
                text-align: center;
            }
            
            .hero .subtagline {
                font-size: 1rem;
                text-align: center;
            }
            
            .hero-text {
                text-align: center;
            }
            
            .hero-image {
                width: 200px;
                height: 200px;
                font-size: 6rem;
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
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Dini Anisa Putri</h1>
                    <p class="tagline">Multimedia Enthusiast</p>
                    <p class="subtagline">Desainer Grafis & Video Editor</p>
                    <a href="/about" class="btn">Tentang Saya</a>
                    <a href="/contact" class="btn" style="background: transparent; border: 2px solid white; color: white;">Hubungi Saya</a>
                </div>
                <div class="hero-image">
                    🎬
                </div>
            </div>
        </div>
    </section>
    
    <!-- Include Footer -->
    @include('footer')
</body>
</html>

