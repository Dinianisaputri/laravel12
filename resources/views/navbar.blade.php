<div class="navbar-wrapper">
    <nav class="navbar">
        <div class="logo">Dini<span>Portfolio</span></div>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/about">Tentang</a></li>
            <li><a href="/contact">Kontak</a></li>
        </ul>
    </nav>
</div>

<style>
    .navbar-wrapper {
        background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
    }
    
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px 20px;
    }
    
    .navbar .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: white;
    }
    
    .navbar .logo span {
        font-weight: 400;
    }
    
    .navbar ul {
        display: flex;
        list-style: none;
        gap: 30px;
        margin: 0;
        padding: 0;
    }
    
    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        font-size: 1rem;
        transition: all 0.3s ease;
        padding: 8px 15px;
        border-radius: 20px;
    }
    
    .navbar ul li a:hover {
        background: rgba(255, 255, 255, 0.2);
    }
    
    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            gap: 15px;
        }
        
        .navbar ul {
            gap: 15px;
        }
    }
</style>

