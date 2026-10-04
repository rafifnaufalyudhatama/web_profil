<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NipponTravel - Agen Perjalanan Jepang Terbaik</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="brand-logo">Nippon<span>Travel</span> <i class="ph-fill ph-paper-plane-tilt"></i></a>
            <ul class="nav-links">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#destinations">Destinasi</a></li>
                <li><a href="#" class="btn-primary" onclick="openModal('Konsultasi Gratis', 'Hubungi kami sekarang untuk merencanakan perjalanan impian Anda ke Jepang.')">Hubungi Kami</a></li>
            </ul>
            <div class="mobile-menu" onclick="toggleMenu()">
                <i class="ph ph-list"></i>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="hero-section">
        <div class="hero-content fade-in-up">
            <h1>Temukan Keindahan <span>Jepang</span> Bersama Kami</h1>
            <p>Pengalaman wisata tak terlupakan dari kilauan kota Tokyo hingga ketenangan kuil di Kyoto.</p>
            <div class="hero-buttons">
                <a href="#destinations" class="btn-primary">Jelajahi Paket</a>
                <a href="#about" class="btn-secondary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="about-grid">
                <div class="about-text slide-in-left">
                    <h2>Mengapa Memilih NipponTravel?</h2>
                    <p>Kami adalah spesialis perjalanan wisata ke Jepang dengan pengalaman lebih dari 10 tahun. Kami menyediakan layanan perjalanan eksklusif yang dirancang khusus untuk memenuhi gaya hidup dan keinginan Anda.</p>
                    <ul class="features-list">
                        <li><i class="ph-fill ph-check-circle"></i> Pemandu Wisata Berbahasa Indonesia</li>
                        <li><i class="ph-fill ph-check-circle"></i> Hotel Bintang 4 & 5 Strategis</li>
                        <li><i class="ph-fill ph-check-circle"></i> Itinerary Fleksibel</li>
                    </ul>
                </div>
                <div class="about-image slide-in-right">
                    <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?q=80&w=800&auto=format&fit=crop" alt="Pemandangan Jepang">
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="destinations-section">
        <div class="container glass-section fade-in-on-scroll">
            <h2 class="section-title">Destinasi Favorit</h2>
            <p class="section-subtitle">Pilih paket liburan impian Anda ke Negeri Sakura</p>
            
            <div class="carousel-container">
                <div class="carousel-track" id="carouselTrack">
                <!-- Card 1 -->
                <div class="card fade-in-on-scroll">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1542051841857-5f90071e7989?q=80&w=600&auto=format&fit=crop" alt="Tokyo">
                        <span class="badge">Musim Semi</span>
                    </div>
                    <div class="card-content">
                        <h3>Pesona Tokyo & Fuji</h3>
                        <p>7 Hari 6 Malam menjelajahi metropolis Tokyo dan keindahan Gunung Fuji.</p>
                        <div class="card-footer">
                            <span class="price">Mulai Rp 15 Juta</span>
                            <button class="btn-outline" onclick="openModal('Pesona Tokyo & Fuji', 'Paket 7 Hari 6 Malam. Termasuk tiket pesawat, hotel, dan makan. Silakan isi form untuk booking.')">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card fade-in-on-scroll" style="transition-delay: 0.2s">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1493780474015-ba834fd0ce2f?q=80&w=600&auto=format&fit=crop" alt="Kyoto">
                        <span class="badge">Budaya</span>
                    </div>
                    <div class="card-content">
                        <h3>Eksplorasi Kyoto & Osaka</h3>
                        <p>6 Hari 5 Malam menikmati budaya tradisional di Kyoto dan kuliner Osaka.</p>
                        <div class="card-footer">
                            <span class="price">Mulai Rp 14 Juta</span>
                            <button class="btn-outline" onclick="openModal('Eksplorasi Kyoto & Osaka', 'Paket 6 Hari 5 Malam. Dapatkan pengalaman memakai kimono otentik dan kulineran malam di Osaka.')">Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card fade-in-on-scroll" style="transition-delay: 0.4s">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1522273400909-fd1a8f77637e?q=80&w=600&auto=format&fit=crop" alt="Shirakawa-go">
                        <span class="badge">Musim Dingin</span>
                    </div>
                    <div class="card-content">
                        <h3>Winter di Shirakawa-go</h3>
                        <p>5 Hari 4 Malam melihat desa warisan dunia yang tertutup salju.</p>
                        <div class="card-footer">
                            <span class="price">Mulai Rp 18 Juta</span>
                            <button class="btn-outline" onclick="openModal('Winter di Shirakawa-go', 'Paket spesial musim dingin 5 Hari 4 Malam. Nikmati light-up event di Shirakawa-go dan pemandian air panas (Onsen).')">Detail</button>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Carousel Controls -->
                <div class="carousel-controls fade-in-on-scroll">
                    <button class="carousel-btn" id="prevBtn" aria-label="Previous"><i class="ph-bold ph-caret-left"></i></button>
                    <button class="carousel-btn" id="nextBtn" aria-label="Next"><i class="ph-bold ph-caret-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div class="footer-brand">
                <h3>Nippon<span>Travel</span></h3>
                <p>Membawa Anda lebih dekat dengan keajaiban Jepang.</p>
            </div>
            <div class="footer-links">
                <a href="#"><i class="ph-fill ph-instagram-logo"></i></a>
                <a href="#"><i class="ph-fill ph-facebook-logo"></i></a>
                <a href="#"><i class="ph-fill ph-twitter-logo"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 NipponTravel. All rights reserved.</p>
        </div>
    </footer>

    <!-- Popup Modal -->
    <div id="popupModal" class="modal-overlay">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()"><i class="ph ph-x"></i></span>
            <h3 id="modalTitle">Judul Modal</h3>
            <p id="modalDesc">Deskripsi modal akan muncul di sini.</p>
            <form class="modal-form">
                <input type="text" placeholder="Nama Anda" required>
                <input type="email" placeholder="Email Anda" required>
                <button type="submit" class="btn-primary" onclick="event.preventDefault(); alert('Permintaan Anda telah terkirim!'); closeModal();">Kirim Permintaan</button>
            </form>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
