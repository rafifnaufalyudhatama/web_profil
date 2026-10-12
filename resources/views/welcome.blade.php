<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourJepang - Spesialis Private Tour & Sewa Mobil di Jepang</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <!-- Nav Overlay for Mobile -->
    <div class="nav-overlay" id="navOverlay" onclick="toggleMenu()"></div>

    <!-- Top Announcement Bar -->
    <div class="top-bar">
        <div class="container top-bar-container">
            <div class="top-bar-left">
                <span><i class="ph-fill ph-check-circle"></i> Layanan Resmi Private Tour & Sewa Mobil Jepang</span>
                <span class="top-divider">•</span>
                <span><i class="ph-fill ph-user-circle"></i> Driver & Guide Berbahasa Indonesia</span>
            </div>
            <div class="top-bar-right">
                <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="top-social-link">
                    <i class="ph-fill ph-instagram-logo"></i> @rafifnaufal64
                </a>
                <a href="https://wa.me/081392254657" target="_blank" rel="noopener" class="top-social-link wa-text">
                    <i class="ph-fill ph-whatsapp-logo"></i> 0813-9225-4657
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="brand-logo">
                <span class="logo-red">Tour</span><span class="logo-dark">Jepang</span>
                <span class="logo-badge">PRO</span>
            </a>
            
            <ul class="nav-links">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#fleet">Armada</a></li>
                <li><a href="#packages">Paket Tour</a></li>
                <li><a href="#why-us">Keunggulan</a></li>
                <li><a href="#inclusions">Fasilitas</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li class="nav-cta-item">
                    <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="btn-ig-nav">
                        <i class="ph-fill ph-instagram-logo"></i> Instagram
                    </a>
                </li>
                <li class="nav-cta-item">
                    <a href="https://wa.me/081392254657?text=Halo%20Tour%20Jepang,%20saya%20tertarik%20untuk%20konsultasi%20paket%20tour%20dan%20sewa%20mobil%20di%20Jepang" target="_blank" rel="noopener" class="btn-wa-nav">
                        <i class="ph-fill ph-whatsapp-logo"></i> Chat WhatsApp
                    </a>
                </li>
            </ul>

            <div class="mobile-menu" onclick="toggleMenu()" aria-label="Toggle Menu">
                <i class="ph ph-list"></i>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="hero-section">
        <div class="hero-content fade-in-up">
            <div class="hero-badge">
                <i class="ph-fill ph-sparkle"></i> Spesialis Private Tour & Sewa Mobil Jepang Terpercaya
            </div>
            <h1>Jelajahi Keindahan <span>Jepang</span> Lebih Nyaman & Eksklusif</h1>
            <p>Nikmati liburan impian ke Tokyo, Mount Fuji, Kyoto, Osaka, Shirakawa-go hingga Hokkaido. Armada mobil mewah (Alphard, Hiace, Coaster), driver berbahasa Indonesia, dan jadwal fleksibel bebas diatur sesuka hati.</p>
            
            <div class="hero-buttons">
                <a href="https://wa.me/081392254657?text=Halo%20Tour%20Jepang,%20saya%20ingin%20konsultasi%20paket%20liburan%20dan%20sewa%20mobil%20ke%20Jepang" target="_blank" rel="noopener" class="btn-wa">
                    <i class="ph-fill ph-whatsapp-logo"></i> Konsultasi WhatsApp (0813-9225-4657)
                </a>
                <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="btn-ig">
                    <i class="ph-fill ph-instagram-logo"></i> Instagram @rafifnaufal64
                </a>
                <a href="#packages" class="btn-secondary">
                    <i class="ph-fill ph-compass"></i> Lihat Paket Wisata
                </a>
            </div>

            <!-- Trust Highlights Grid -->
            <div class="hero-highlights">
                <div class="highlight-item">
                    <div class="highlight-icon"><i class="ph-fill ph-car"></i></div>
                    <div class="highlight-text">
                        <strong>100% Private Car</strong>
                        <span>Tidak digabung peserta lain</span>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon"><i class="ph-fill ph-user-check"></i></div>
                    <div class="highlight-text">
                        <strong>Driver & Guide Indonesia</strong>
                        <span>Komunikasi lancar & ramah</span>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon"><i class="ph-fill ph-clock-countdown"></i></div>
                    <div class="highlight-text">
                        <strong>Itinerary Fleksibel</strong>
                        <span>Atur rute & tempo sesuka hati</span>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon"><i class="ph-fill ph-shield-check"></i></div>
                    <div class="highlight-text">
                        <strong>Harga All-In Transparan</strong>
                        <span>Termasuk mobil, BBM, tol & parkir</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Layanan Utama Section (Core Services like tourjepang.net) -->
    <section id="services" class="services-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="section-header">
                <span class="sub-badge"><i class="ph-fill ph-squares-four"></i> LAYANAN KAMI</span>
                <h2 class="section-title">Layanan Utama Tour & Transportasi di Jepang</h2>
                <p class="section-subtitle">Solusi lengkap perjalanan wisata privat untuk keluarga, pasangan, maupun rombongan corporate di seluruh Jepang.</p>
            </div>

            <div class="services-grid">
                <!-- Service 1: Private 1-Day Tour -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="ph-fill ph-steering-wheel"></i>
                    </div>
                    <h3>Private 1-Day Tour</h3>
                    <p>Sewa mobil privat dan driver harian (10-12 jam) untuk menjelajahi spot ikonik kota dengan santai tanpa terburu-buru.</p>
                    <ul class="service-points">
                        <li><i class="ph-fill ph-check"></i> Tokyo City Tour & Shopping</li>
                        <li><i class="ph-fill ph-check"></i> Mount Fuji & Lake Kawaguchiko</li>
                        <li><i class="ph-fill ph-check"></i> Hakone Onsen & Lake Ashi</li>
                        <li><i class="ph-fill ph-check"></i> Kyoto Heritage & Osaka Day Trip</li>
                    </ul>
                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20ingin%20tanya%20seputar%20layanan%20Private%201-Day%20Tour%20Jepang" target="_blank" rel="noopener" class="service-btn">
                        <i class="ph-fill ph-whatsapp-logo"></i> Pesan 1-Day Tour
                    </a>
                </div>

                <!-- Service 2: Airport Transfer -->
                <div class="service-card featured">
                    <div class="popular-ribbon">Rekomendasi</div>
                    <div class="service-icon-box">
                        <i class="ph-fill ph-airplane-landing"></i>
                    </div>
                    <h3>Airport Transfer</h3>
                    <p>Antar-jemput bandara tepat waktu dan nyaman langsung ke lobi hotel tujuan tanpa repot menggeret koper naik tangga stasiun.</p>
                    <ul class="service-points">
                        <li><i class="ph-fill ph-check"></i> Bandara Haneda (HND) ↔ Tokyo Hotel</li>
                        <li><i class="ph-fill ph-check"></i> Bandara Narita (NRT) ↔ Tokyo Hotel</li>
                        <li><i class="ph-fill ph-check"></i> Bandara Kansai (KIX) ↔ Osaka / Kyoto</li>
                        <li><i class="ph-fill ph-check"></i> Penjemputan di Arrival Gate dengan Nameboard</li>
                    </ul>
                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20ingin%20booking%20Airport%20Transfer%20Bandara%20Jepang" target="_blank" rel="noopener" class="service-btn btn-highlight">
                        <i class="ph-fill ph-whatsapp-logo"></i> Booking Airport Transfer
                    </a>
                </div>

                <!-- Service 3: One-Way Intercity Transfer -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="ph-fill ph-path"></i>
                    </div>
                    <h3>One-Way & Intercity Transfer</h3>
                    <p>Layanan transportasi privat antarkota di Jepang. Perjalanan point-to-point tanpa repot berganti peron kereta cepat dengan banyak barang bawaan.</p>
                    <ul class="service-points">
                        <li><i class="ph-fill ph-check"></i> Tokyo ↔ Mount Fuji / Hakone</li>
                        <li><i class="ph-fill ph-check"></i> Tokyo ↔ Nagoya / Kyoto / Osaka</li>
                        <li><i class="ph-fill ph-check"></i> Osaka ↔ Kyoto / Nara / Kobe</li>
                        <li><i class="ph-fill ph-check"></i> Berhenti sejenak di spot wisata sepanjang rute</li>
                    </ul>
                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20ingin%20tanya%20tarif%20One-Way%20Transfer%20antarkota%20Jepang" target="_blank" rel="noopener" class="service-btn">
                        <i class="ph-fill ph-whatsapp-logo"></i> Cek Tarif Antarkota
                    </a>
                </div>

                <!-- Service 4: Custom Private Tour -->
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="ph-fill ph-map-trifold"></i>
                    </div>
                    <h3>Custom Private Tour (Multi-Day)</h3>
                    <p>Paket liburan impian multi-hari yang dirancang khusus dari A sampai Z sesuai preferensi waktu, budget, dan minat keluarga Anda.</p>
                    <ul class="service-points">
                        <li><i class="ph-fill ph-check"></i> Itinerary dipersonalisasi 100% bebas</li>
                        <li><i class="ph-fill ph-check"></i> Rekomendasi hotel bintang 4 & 5 strategis</li>
                        <li><i class="ph-fill ph-check"></i> Rekomendasi kuliner halal & ramen otentik</li>
                        <li><i class="ph-fill ph-check"></i> Pendampingan guide Indonesia berpengalaman</li>
                    </ul>
                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20ingin%20merancang%20Custom%20Private%20Tour%20multi-hari%20di%20Jepang" target="_blank" rel="noopener" class="service-btn">
                        <i class="ph-fill ph-whatsapp-logo"></i> Rancang Custom Tour
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Armada Mobil Section (Fleet Showcase) -->
    <section id="fleet" class="fleet-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="section-header">
                <span class="sub-badge"><i class="ph-fill ph-car-profile"></i> PILIHAN ARMADA</span>
                <h2 class="section-title">Armada Mobil Mewah, Bersih & Nyaman</h2>
                <p class="section-subtitle">Semua unit armada kami dalam kondisi prima, terawat, ber-AC sejuk, dan dilengkapi lisensi operasional resmi di Jepang.</p>
            </div>

            <div class="fleet-grid">
                <!-- Fleet 1: Toyota Alphard -->
                <div class="fleet-card">
                    <div class="fleet-image">
                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=80&w=800&auto=format&fit=crop" alt="Toyota Alphard Luxury Van">
                        <span class="fleet-tag">VVIP & Family Choice</span>
                    </div>
                    <div class="fleet-content">
                        <h3>Toyota Alphard / Vellfire</h3>
                        <p class="fleet-desc">Kendaraan mewah paling disukai untuk pasangan, honeymoon, dan keluarga kecil yang mengutamakan kenyamanan maksimal.</p>
                        
                        <div class="fleet-specs">
                            <div class="spec-item">
                                <i class="ph-fill ph-users"></i>
                                <span><strong>Kapasitas:</strong> 4 - 5 Orang</span>
                            </div>
                            <div class="spec-item">
                                <i class="ph-fill ph-suitcase"></i>
                                <span><strong>Bagasi:</strong> 4 Koper Besar</span>
                            </div>
                            <div class="spec-item">
                                <i class="ph-fill ph-armchair"></i>
                                <span><strong>Fitur:</strong> Captain Seat Reclining, Suspensi Empuk</span>
                            </div>
                        </div>

                        <div class="fleet-action">
                            <a href="https://wa.me/081392254657?text=Halo,%20saya%20ingin%20tanya%20ketersediaan%20dan%20harga%20sewa%20Toyota%20Alphard%20di%20Jepang" target="_blank" rel="noopener" class="btn-wa-fleet">
                                <i class="ph-fill ph-whatsapp-logo"></i> Sewa Toyota Alphard
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Fleet 2: Toyota Hiace Grand Cabin -->
                <div class="fleet-card featured-fleet">
                    <div class="fleet-badge-top">Paling Populer</div>
                    <div class="fleet-image">
                        <img src="https://images.unsplash.com/photo-1570125909232-eb263c188f7e?q=80&w=800&auto=format&fit=crop" alt="Toyota Hiace Grand Cabin">
                        <span class="fleet-tag">Best Value for Groups</span>
                    </div>
                    <div class="fleet-content">
                        <h3>Toyota Hiace Grand Cabin</h3>
                        <p class="fleet-desc">Pilihan nomor satu untuk rombongan keluarga besar atau grup sahabat. Kabin luas, atap tinggi, dan bagasi sangat lapang.</p>
                        
                        <div class="fleet-specs">
                            <div class="spec-item">
                                <i class="ph-fill ph-users"></i>
                                <span><strong>Kapasitas:</strong> 8 - 9 Orang</span>
                            </div>
                            <div class="spec-item">
                                <i class="ph-fill ph-suitcase"></i>
                                <span><strong>Bagasi:</strong> 8 - 9 Koper Besar</span>
                            </div>
                            <div class="spec-item">
                                <i class="ph-fill ph-arrows-out-cardinal"></i>
                                <span><strong>Fitur:</strong> Kabin Tinggi, Legroom Luas, AC Merata</span>
                            </div>
                        </div>

                        <div class="fleet-action">
                            <a href="https://wa.me/081392254657?text=Halo,%20saya%20ingin%20tanya%20ketersediaan%20dan%20harga%20sewa%20Toyota%20Hiace%20Grand%20Cabin%20di%20Jepang" target="_blank" rel="noopener" class="btn-wa-fleet btn-highlight">
                                <i class="ph-fill ph-whatsapp-logo"></i> Sewa Hiace Grand Cabin
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Fleet 3: Toyota Coaster Microbus -->
                <div class="fleet-card">
                    <div class="fleet-image">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=800&auto=format&fit=crop" alt="Toyota Coaster Microbus">
                        <span class="fleet-tag">Big Group & Corporate</span>
                    </div>
                    <div class="fleet-content">
                        <h3>Toyota Coaster / Microbus</h3>
                        <p class="fleet-desc">Kendaraan berkapasitas besar untuk family gathering skala besar, corporate trip, komunitas, atau rombongan instansi.</p>
                        
                        <div class="fleet-specs">
                            <div class="spec-item">
                                <i class="ph-fill ph-users"></i>
                                <span><strong>Kapasitas:</strong> 15 - 18 Orang</span>
                            </div>
                            <div class="spec-item">
                                <i class="ph-fill ph-suitcase"></i>
                                <span><strong>Bagasi:</strong> 15+ Koper Besar</span>
                            </div>
                            <div class="spec-item">
                                <i class="ph-fill ph-microphone"></i>
                                <span><strong>Fitur:</strong> Audio Guide System, Suspensi Bus Halus</span>
                            </div>
                        </div>

                        <div class="fleet-action">
                            <a href="https://wa.me/081392254657?text=Halo,%20saya%20ingin%20tanya%20ketersediaan%20dan%20harga%20sewa%20Toyota%20Coaster%20Microbus%20di%20Jepang" target="_blank" rel="noopener" class="btn-wa-fleet">
                                <i class="ph-fill ph-whatsapp-logo"></i> Sewa Toyota Coaster
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket Tour Populer Section (Signature Packages like tourjepang.net) -->
    <section id="packages" class="destinations-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="section-header">
                <span class="sub-badge"><i class="ph-fill ph-airplane-tilt"></i> PAKET WISATA POPULER</span>
                <h2 class="section-title">Paket Liburan Jepang Terfavorit</h2>
                <p class="section-subtitle">Rangkaian rute pilihan yang paling banyak diminati wisatawan Indonesia dengan destinasi memukau dan pengalaman otentik.</p>
            </div>
            
            <div class="carousel-container">
                <div class="carousel-track" id="carouselTrack">
                    
                    <!-- Package 1: Tokyo & Fuji -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1542051841857-5f90071e7989?q=80&w=600&auto=format&fit=crop" alt="Tokyo & Mount Fuji">
                            <span class="badge">Best Seller</span>
                            <span class="duration-badge"><i class="ph-fill ph-clock"></i> 5 Hari 4 Malam</span>
                        </div>
                        <div class="card-content">
                            <h3>Amazing Tokyo & Mount Fuji</h3>
                            <p class="pkg-desc">Kombinasi gemerlap kota Tokyo, belanja di Shibuya & Ginza, serta pesona magis Gunung Fuji dan Danau Kawaguchiko.</p>
                            <div class="pkg-highlights">
                                <span><i class="ph-fill ph-map-pin"></i> Shibuya Crossing & Sky</span>
                                <span><i class="ph-fill ph-map-pin"></i> Asakusa Sensoji & Skytree</span>
                                <span><i class="ph-fill ph-map-pin"></i> Mt. Fuji Oishi Park</span>
                                <span><i class="ph-fill ph-map-pin"></i> Gotemba Premium Outlets</span>
                            </div>
                            <div class="card-footer">
                                <div class="price-wrap">
                                    <span class="price-label">Mulai Dari</span>
                                    <span class="price">Rp 14,5 Juta<small>/pax</small></span>
                                </div>
                                <div class="pkg-buttons">
                                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20tertarik%20dengan%20paket%20Amazing%20Tokyo%20%26%20Mount%20Fuji%205D4N.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-wa-pkg" title="Chat via WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i> WA
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Amazing Tokyo & Mount Fuji 5D4N', 'Jelajahi Shibuya, Asakusa, Danau Kawaguchiko Gunung Fuji, dan Gotemba Outlets. Paket termasuk mobil privat, driver Indonesia, bensin, tol dan tiket wisata.', 'Halo, saya tertarik dengan paket Amazing Tokyo & Mount Fuji 5D4N. Bisa info jadwal dan harganya?')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package 2: Osaka, Kyoto & Nara -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1493780474015-ba834fd0ce2f?q=80&w=600&auto=format&fit=crop" alt="Kyoto & Osaka">
                            <span class="badge badge-accent">Favorit Budaya</span>
                            <span class="duration-badge"><i class="ph-fill ph-clock"></i> 5 Hari 4 Malam</span>
                        </div>
                        <div class="card-content">
                            <h3>Wonderful Osaka, Kyoto & Nara</h3>
                            <p class="pkg-desc">Eksplorasi keindahan kuil bersejarah Kyoto, interaksi rusa jinak di Nara Park, dan surga kuliner malam Dotonbori Osaka.</p>
                            <div class="pkg-highlights">
                                <span><i class="ph-fill ph-map-pin"></i> Fushimi Inari 10.000 Torii</span>
                                <span><i class="ph-fill ph-map-pin"></i> Arashiyama Bamboo Forest</span>
                                <span><i class="ph-fill ph-map-pin"></i> Nara Deer Park</span>
                                <span><i class="ph-fill ph-map-pin"></i> Dotonbori & Osaka Castle</span>
                            </div>
                            <div class="card-footer">
                                <div class="price-wrap">
                                    <span class="price-label">Mulai Dari</span>
                                    <span class="price">Rp 13,9 Juta<small>/pax</small></span>
                                </div>
                                <div class="pkg-buttons">
                                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20tertarik%20dengan%20paket%20Wonderful%20Osaka%2C%20Kyoto%20%26%20Nara%205D4N.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-wa-pkg" title="Chat via WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i> WA
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Wonderful Osaka, Kyoto & Nara 5D4N', 'Rasakan sensasi mengenakan kimono otentik di Arashiyama, berfoto di Fushimi Inari, dan menikmati street food takoyaki di Dotonbori dengan mobil privat.', 'Halo, saya tertarik dengan paket Wonderful Osaka, Kyoto & Nara 5D4N. Tolong rincian biayanya.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package 3: Japan Golden Route -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1503899036084-c55cdd92da26?q=80&w=600&auto=format&fit=crop" alt="Japan Golden Route">
                            <span class="badge">Rute Terlengkap</span>
                            <span class="duration-badge"><i class="ph-fill ph-clock"></i> 7 Hari 6 Malam</span>
                        </div>
                        <div class="card-content">
                            <h3>Japan Golden Route (Tokyo - Osaka)</h3>
                            <p class="pkg-desc">Pilihan paling legendaris yang merangkum esensi utama Jepang: Tokyo, Fuji, Kyoto, Nara, hingga Osaka dalam satu perjalanan sempurna.</p>
                            <div class="pkg-highlights">
                                <span><i class="ph-fill ph-map-pin"></i> Tokyo Metropolis Tour</span>
                                <span><i class="ph-fill ph-map-pin"></i> Mount Fuji & Onsen</span>
                                <span><i class="ph-fill ph-map-pin"></i> Kyoto Heritage Temples</span>
                                <span><i class="ph-fill ph-map-pin"></i> Osaka Gastronomy & Shopping</span>
                            </div>
                            <div class="card-footer">
                                <div class="price-wrap">
                                    <span class="price-label">Mulai Dari</span>
                                    <span class="price">Rp 19,5 Juta<small>/pax</small></span>
                                </div>
                                <div class="pkg-buttons">
                                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20tertarik%20dengan%20paket%20Japan%20Golden%20Route%207D6N.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-wa-pkg" title="Chat via WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i> WA
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Japan Golden Route 7D6N', 'Rute klasik paling direkomendasikan untuk pengalaman pertama ke Jepang! Mengunjungi Tokyo, Fuji, Kyoto, Nara, dan Osaka secara privat dan santai.', 'Halo, saya tertarik dengan paket Japan Golden Route 7D6N. Mohon info ketersediaan tanggalnya.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package 4: Shirakawa-go & Golden Route -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1522273400909-fd1a8f77637e?q=80&w=600&auto=format&fit=crop" alt="Shirakawa-go Village">
                            <span class="badge badge-accent">World Heritage</span>
                            <span class="duration-badge"><i class="ph-fill ph-clock"></i> 8 Hari 7 Malam</span>
                        </div>
                        <div class="card-content">
                            <h3>Golden Route + Shirakawa-go</h3>
                            <p class="pkg-desc">Menikmati desa dongeng tradisional Shirakawa-go (UNESCO) dan kota tua Takayama, dipadukan rute Golden Route spektakuler.</p>
                            <div class="pkg-highlights">
                                <span><i class="ph-fill ph-map-pin"></i> Shirakawa-go Gassho Village</span>
                                <span><i class="ph-fill ph-map-pin"></i> Takayama Sanmachi Suji</span>
                                <span><i class="ph-fill ph-map-pin"></i> Mt. Fuji Panorama</span>
                                <span><i class="ph-fill ph-map-pin"></i> Tokyo & Kyoto Highlights</span>
                            </div>
                            <div class="card-footer">
                                <div class="price-wrap">
                                    <span class="price-label">Mulai Dari</span>
                                    <span class="price">Rp 22,8 Juta<small>/pax</small></span>
                                </div>
                                <div class="pkg-buttons">
                                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20tertarik%20dengan%20paket%20Golden%20Route%20%2B%20Shirakawa-go%208D7N.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-wa-pkg" title="Chat via WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i> WA
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Golden Route + Shirakawa-go 8D7N', 'Paket impian menuju desa tradisional beratapkan jerami di Shirakawa-go, kuliner daging Hida Beef di Takayama, dan rute Tokyo-Osaka privat.', 'Halo, saya ingin menanyakan paket Golden Route + Shirakawa-go 8D7N.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package 5: Hokkaido Winter Wonderland -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1517411032315-54ef2cb783bb?q=80&w=600&auto=format&fit=crop" alt="Hokkaido Winter">
                            <span class="badge">Salju & Onsen</span>
                            <span class="duration-badge"><i class="ph-fill ph-clock"></i> 6 Hari 5 Malam</span>
                        </div>
                        <div class="card-content">
                            <h3>Hokkaido Winter Wonderland</h3>
                            <p class="pkg-desc">Sensasi salju terlembut (powder snow), parade penguin di Asahiyama Zoo, kanal romantis Otaru, dan seafood segar Sapporo.</p>
                            <div class="pkg-highlights">
                                <span><i class="ph-fill ph-map-pin"></i> Sapporo Odori & Ramen Alley</span>
                                <span><i class="ph-fill ph-map-pin"></i> Otaru Romantic Canal</span>
                                <span><i class="ph-fill ph-map-pin"></i> Asahiyama Zoo (Penguins)</span>
                                <span><i class="ph-fill ph-map-pin"></i> Niseko Snow & Ski Resort</span>
                            </div>
                            <div class="card-footer">
                                <div class="price-wrap">
                                    <span class="price-label">Mulai Dari</span>
                                    <span class="price">Rp 24,5 Juta<small>/pax</small></span>
                                </div>
                                <div class="pkg-buttons">
                                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20tertarik%20dengan%20paket%20Hokkaido%20Winter%20Wonderland%206D5N.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-wa-pkg" title="Chat via WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i> WA
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Hokkaido Winter Wonderland 6D5N', 'Jelajahi surga salju Hokkaido dengan kendaraan 4WD nyaman dan driver berpengalaman melintasi jalanan musim dingin bersalju.', 'Halo, saya tertarik dengan paket Hokkaido Winter 6D5N. Mohon info selengkapnya.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package 6: Sakura & Autumn Special -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?q=80&w=600&auto=format&fit=crop" alt="Cherry Blossom Sakura">
                            <span class="badge badge-accent">Musim Spesial</span>
                            <span class="duration-badge"><i class="ph-fill ph-clock"></i> 7 Hari 6 Malam</span>
                        </div>
                        <div class="card-content">
                            <h3>Sakura Spring & Autumn Momiji Special</h3>
                            <p class="pkg-desc">Momen berburu mekarnya bunga Sakura merah muda atau warna-warni daun emas Momiji di spot tercantik Jepang.</p>
                            <div class="pkg-highlights">
                                <span><i class="ph-fill ph-map-pin"></i> Shinjuku Gyoen & Ueno Sakura</span>
                                <span><i class="ph-fill ph-map-pin"></i> Kawaguchiko Momiji Tunnel</span>
                                <span><i class="ph-fill ph-map-pin"></i> Kyoto Kiyomizudera Garden</span>
                                <span><i class="ph-fill ph-map-pin"></i> Osaka Castle Park Hanami</span>
                            </div>
                            <div class="card-footer">
                                <div class="price-wrap">
                                    <span class="price-label">Mulai Dari</span>
                                    <span class="price">Rp 21,0 Juta<small>/pax</small></span>
                                </div>
                                <div class="pkg-buttons">
                                    <a href="https://wa.me/081392254657?text=Halo,%20saya%20tertarik%20dengan%20paket%20Sakura%20Spring%20%2F%20Autumn%20Momiji%20Special.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-wa-pkg" title="Chat via WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i> WA
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Sakura & Autumn Special 7D6N', 'Itinerary fleksibel yang disesuaikan dengan prakiraan mekarnya bunga sakura (Cherry Blossom Forecast) atau puncak warna daun momiji di Jepang.', 'Halo, saya tertarik dengan paket Sakura / Autumn Special 7D6N. Mohon infokan jadwal keberangkatan.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Carousel Controls -->
                <div class="carousel-controls">
                    <button class="carousel-btn" id="prevBtn" aria-label="Previous"><i class="ph-bold ph-caret-left"></i></button>
                    <button class="carousel-btn" id="nextBtn" aria-label="Next"><i class="ph-bold ph-caret-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Kenapa Memilih Kami Section (6 Keunggulan Utama like tourjepang.net) -->
    <section id="why-us" class="why-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="section-header">
                <span class="sub-badge"><i class="ph-fill ph-seal-check"></i> 6 KEUNGGULAN UTAMA</span>
                <h2 class="section-title">Mengapa Memilih Layanan Kami?</h2>
                <p class="section-subtitle">Pengalaman bertahun-tahun melayani ribuan wisatawan Indonesia dengan standar pelayanan tertinggi dan kehangatan khas Nusantara.</p>
            </div>

            <div class="why-grid">
                <!-- Advantage 1 -->
                <div class="why-card">
                    <div class="why-icon"><i class="ph-fill ph-lock-key"></i></div>
                    <h3>100% Private Car Eksklusif</h3>
                    <p>Kendaraan sepenuhnya hanya untuk Anda dan rombongan Anda. Tidak digabung peserta asing sehingga privasi, kebersihan, dan kenyamanan keluarga Anda terjaga sempurna.</p>
                </div>

                <!-- Advantage 2 -->
                <div class="why-card">
                    <div class="why-icon"><i class="ph-fill ph-chats-circle"></i></div>
                    <h3>Driver & Guide Bahasa Indonesia</h3>
                    <p>Tidak perlu khawatir dengan kendala bahasa Jepang. Driver kami ramah, santun, fasih berbahasa Indonesia, serta siap merekomendasikan kuliner halal dan spot foto terbaik.</p>
                </div>

                <!-- Advantage 3 -->
                <div class="why-card">
                    <div class="why-icon"><i class="ph-fill ph-sliders-horizontal"></i></div>
                    <h3>Fleksibilitas Itinerary Penuh</h3>
                    <p>Bebas menentukan ritme perjalanan. Ingin santai menikmati suasana di Danau Kawaguchiko atau puas berbelanja di Ginza? Jadwal sepenuhnya mengikuti kenyamanan Anda.</p>
                </div>

                <!-- Advantage 4 -->
                <div class="why-card">
                    <div class="why-icon"><i class="ph-fill ph-shield-star"></i></div>
                    <h3>Armada Terbaru, Prima & Legal</h3>
                    <p>Seluruh armada (Alphard, Hiace Grand Cabin, Coaster) dalam kondisi wangi, dingin, terawat berkala, dan berizin resmi transportasi turis di Jepang dengan perlindungan asuransi.</p>
                </div>

                <!-- Advantage 5 -->
                <div class="why-card">
                    <div class="why-icon"><i class="ph-fill ph-receipt"></i></div>
                    <h3>Harga All-In Tanpa Biaya Tersembunyi</h3>
                    <p>Biaya sewa mobil sudah mencakup bensin (BBM), tarif tol jalan bebas hambatan (Highway fee), tiket parkir destinasi, serta akomodasi & uang makan pengemudi.</p>
                </div>

                <!-- Advantage 6 -->
                <div class="why-card">
                    <div class="why-icon"><i class="ph-fill ph-headset"></i></div>
                    <h3>Konsultasi & Pendampingan 24/7</h3>
                    <p>Tim admin kami standby mendampingi Anda mulai dari konsultasi rute, rekomendasi hotel, persiapan visa Jepang, hingga pendampingan aktif selama trip berlangsung via WhatsApp.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas Termasuk & Tidak Termasuk Section (Inclusions/Exclusions like tourjepang.net) -->
    <section id="inclusions" class="inclusions-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="section-header">
                <span class="sub-badge"><i class="ph-fill ph-list-checks"></i> TRANSPARANSI BIAYA</span>
                <h2 class="section-title">Fasilitas Termasuk & Tidak Termasuk</h2>
                <p class="section-subtitle">Semua rincian biaya dijelaskan secara transparan di awal tanpa ada biaya siluman saat perjalanan.</p>
            </div>

            <div class="inclusions-grid">
                <!-- Included Box -->
                <div class="inc-box inc-yes">
                    <div class="inc-header">
                        <div class="inc-badge"><i class="ph-fill ph-check-circle"></i> SUDAH TERMASUK</div>
                        <h3>Fasilitas yang Anda Dapatkan</h3>
                    </div>
                    <ul class="inc-list">
                        <li><i class="ph-fill ph-check-circle"></i> Sewa Mobil Privat (Alphard / Hiace / Coaster)</li>
                        <li><i class="ph-fill ph-check-circle"></i> Driver Profesional Berbahasa Indonesia / Jepang</li>
                        <li><i class="ph-fill ph-check-circle"></i> Bahan Bakar Minyak (Bensin / BBM) selama perjalanan</li>
                        <li><i class="ph-fill ph-check-circle"></i> Biaya Jalan Tol Bebas Hambatan (Highway Toll Fee)</li>
                        <li><i class="ph-fill ph-check-circle"></i> Biaya Tiket Parkir di seluruh tempat wisata & hotel</li>
                        <li><i class="ph-fill ph-check-circle"></i> Biaya Penginapan & Uang Makan Driver selama trip</li>
                        <li><i class="ph-fill ph-check-circle"></i> Air Mineral Botol gratis di dalam mobil</li>
                        <li><i class="ph-fill ph-check-circle"></i> Bantuan penyusunan & konsultasi itinerary kustom</li>
                    </ul>
                </div>

                <!-- Excluded Box -->
                <div class="inc-box inc-no">
                    <div class="inc-header">
                        <div class="inc-badge"><i class="ph-fill ph-x-circle"></i> BELUM TERMASUK</div>
                        <h3>Fasilitas di Luar Paket</h3>
                    </div>
                    <ul class="inc-list">
                        <li><i class="ph-fill ph-x-circle"></i> Tiket Pesawat Internasional Pulang-Pergi (PP)</li>
                        <li><i class="ph-fill ph-x-circle"></i> Biaya Pengurusan Visa Masuk Jepang (Bisa kami bantu pandu)</li>
                        <li><i class="ph-fill ph-x-circle"></i> Tiket Masuk Objek Wisata Berbayar (Disneyland, USJ, Shibuya Sky)</li>
                        <li><i class="ph-fill ph-x-circle"></i> Makan Siang & Makan Malam Pribadi</li>
                        <li><i class="ph-fill ph-x-circle"></i> Pengeluaran Belanja Pribadi & Oleh-oleh</li>
                        <li><i class="ph-fill ph-x-circle"></i> Tipping Sukarela untuk Driver / Pemandu Wisata</li>
                    </ul>
                </div>
            </div>

            <div class="inclusions-cta">
                <p>Punya rencana rute khusus atau ingin paket all-in termasuk hotel dan tiket wahana?</p>
                <a href="https://wa.me/081392254657?text=Halo%20Tour%20Jepang,%20saya%20ingin%20tanya%20paket%20kustom%20lengkap%20dengan%20hotel%20dan%20tiket%20wisata" target="_blank" rel="noopener" class="btn-wa">
                    <i class="ph-fill ph-whatsapp-logo"></i> Diskusikan Rencana Anda via WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Testimoni Pelanggan Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="section-header">
                <span class="sub-badge"><i class="ph-fill ph-star"></i> ULASAN WISATAWAN</span>
                <h2 class="section-title">Cerita & Pengalaman Wisatawan</h2>
                <p class="section-subtitle">Kepuasan dan senyum bahagia keluarga yang telah mempercayakan liburan mereka ke Jepang bersama kami.</p>
            </div>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                    </div>
                    <p class="testi-text">"Sangat puas sewa Hiace untuk keluarga 8 orang keliling Golden Route (Tokyo-Fuji-Kyoto-Osaka). Drivernya orang Indonesia, ramah banget, fotoin kita bagus-bagus dan paham banget spot makan halal. Anak-anak dan orang tua gak ada yang kecapekan!"</p>
                    <div class="client-info">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format&fit=crop" alt="Bpk. Hendra Wijaya">
                        <div>
                            <h4>Bpk. Hendra Wijaya</h4>
                            <span>Keluarga dari Jakarta • Paket Golden Route 7D6N</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                    </div>
                    <p class="testi-text">"Perjalanan ke Fuji dan Shirakawa-go nyaman banget pakai Alphard. Mobil super wangi dan bersih. Itinerary fleksibel jadi bisa santai foto tanpa diburu-buru waktu. Komunikasi via WhatsApp Mas Rafif juga fast response banget!"</p>
                    <div class="client-info">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=150&auto=format&fit=crop" alt="Ibu Cynthia Permata">
                        <div>
                            <h4>Ibu Cynthia Permata</h4>
                            <span>Surabaya • Sewa Toyota Alphard Shirakawa-go</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                    </div>
                    <p class="testi-text">"Airport transfer dari Haneda langsung ke hotel Shinjuku benar-benar penyelamat setelah 7 jam penerbangan membawa 4 koper besar. Driver tepat waktu di arrival hall dan sangat sopan. Pelayanan bintang 5!"</p>
                    <div class="client-info">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150&auto=format&fit=crop" alt="Dr. Pratama">
                        <div>
                            <h4>Dr. Pratama</h4>
                            <span>Bandung • Airport Transfer Haneda - Shinjuku</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="section-header">
                <span class="sub-badge"><i class="ph-fill ph-question"></i> PERTANYAAN UMUM</span>
                <h2 class="section-title">Frequently Asked Questions (FAQ)</h2>
                <p class="section-subtitle">Pertanyaan yang paling sering diajukan mengenai sewa mobil dan private tour di Jepang.</p>
            </div>

            <div class="faq-accordion">
                <!-- FAQ 1 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Apakah itinerary dan destinasi bisa diubah di tengah perjalanan?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Tentu saja! Karena ini adalah private tour, Anda memiliki kebebasan penuh untuk menyesuaikan destinasi, urutan kunjungan, maupun durasi tinggal di setiap lokasi selama masih dalam batas durasi operasional harian mobil (maksimal 10-12 jam).</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Apakah pengemudi (driver) bisa berbahasa Indonesia?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Ya! Sebagian besar armada kami dikemudikan oleh driver warga negara Indonesia yang telah bertahun-tahun tinggal dan berlisensi di Jepang, atau driver lokal Jepang yang didampingi guide berbahasa Indonesia. Komunikasi dijamin sangat lancar dan bersahabat.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Bagaimana cara pemesanan dan sistem pembayaran?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Pemesanan sangat mudah: cukup hubungi WhatsApp kami di <strong>0813-9225-4657</strong> dengan menginfokan tanggal, jumlah peserta, dan rute impian. Tim kami akan mengirimkan invoice resmi. Pemesanan dikonfirmasi dengan Down Payment (DP) dan sisa pembayaran dapat dilunasi sesuai kesepakatan.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Apakah bisa dibantu untuk booking hotel, tiket wahana, atau restoran halal?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Tentu bisa! Kami siap membantu merekomendasikan hotel strategis dekat pusat perbelanjaan, pemesanan tiket Tokyo Disneyland/DisneySea, Universal Studios Japan (USJ), Shibuya Sky, Shinkansen, hingga reservasi restoran wagyu halal otentik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Call-to-Action & Instagram Showcase -->
    <section id="contact-banner" class="cta-banner-section">
        <div class="container fade-in-on-scroll">
            <div class="cta-banner-box">
                <div class="cta-banner-content">
                    <span class="cta-badge"><i class="ph-fill ph-chat-circle-dots"></i> KONSULTASI GRATIS</span>
                    <h2>Siap Menikmati Liburan Tak Terlupakan di Jepang?</h2>
                    <p>Konsultasikan rencana perjalanan Anda sekarang bersama kami. Dapatkan saran rute terbaik, penawaran harga sewa mobil hemat, serta update destinasi terkini di Instagram!</p>
                    
                    <div class="cta-buttons-wrap">
                        <a href="https://wa.me/081392254657?text=Halo%20Tour%20Jepang,%20saya%20ingin%20konsultasi%20paket%20tour%20dan%20sewa%20mobil%20ke%20Jepang" target="_blank" rel="noopener" class="btn-wa btn-lg">
                            <i class="ph-fill ph-whatsapp-logo"></i> Hubungi WhatsApp: 0813-9225-4657
                        </a>
                        <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="btn-ig btn-lg">
                            <i class="ph-fill ph-instagram-logo"></i> Follow Instagram: @rafifnaufal64
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div class="footer-brand">
                <h3>Tour<span>Jepang</span></h3>
                <p>Spesialis layanan Private Tour, Sewa Mobil Mewah (Alphard, Hiace, Coaster), dan Airport Transfer di Jepang dengan pengemudi & pemandu berbahasa Indonesia.</p>
                <div class="footer-contact-info">
                    <p><i class="ph-fill ph-whatsapp-logo"></i> WhatsApp: <a href="https://wa.me/081392254657" target="_blank" rel="noopener"><strong>0813-9225-4657</strong></a></p>
                    <p><i class="ph-fill ph-instagram-logo"></i> Instagram: <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener"><strong>@rafifnaufal64</strong></a></p>
                    <p><i class="ph-fill ph-clock"></i> Layanan Chat: 24 Jam Setiap Hari</p>
                    <p><i class="ph-fill ph-map-pin"></i> Area: Tokyo • Mt. Fuji • Kyoto • Osaka • Shirakawa-go • Hokkaido</p>
                </div>
            </div>

            <div class="footer-col">
                <h4>Layanan Unggulan</h4>
                <ul>
                    <li><a href="#services">Private 1-Day Tour</a></li>
                    <li><a href="#services">Airport Transfer Bandara</a></li>
                    <li><a href="#services">One-Way Intercity Transfer</a></li>
                    <li><a href="#services">Custom Multi-Day Tour</a></li>
                    <li><a href="#fleet">Sewa Toyota Alphard</a></li>
                    <li><a href="#fleet">Sewa Hiace Grand Cabin</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Paket Populer</h4>
                <ul>
                    <li><a href="#packages">Tokyo & Mt. Fuji 5D4N</a></li>
                    <li><a href="#packages">Osaka, Kyoto & Nara 5D4N</a></li>
                    <li><a href="#packages">Japan Golden Route 7D6N</a></li>
                    <li><a href="#packages">Shirakawa-go & Takayama 8D7N</a></li>
                    <li><a href="#packages">Hokkaido Winter Wonderland</a></li>
                    <li><a href="#packages">Sakura Spring Tour</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Hubungi & Ikuti Kami</h4>
                <p class="footer-desc-sm">Dapatkan update dokumentasi liburan, tips jalan-jalan di Jepang, dan promo menarik setiap minggunya.</p>
                <div class="footer-social-buttons">
                    <a href="https://wa.me/081392254657" target="_blank" rel="noopener" class="footer-btn-wa">
                        <i class="ph-fill ph-whatsapp-logo"></i> WhatsApp Chat
                    </a>
                    <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="footer-btn-ig">
                        <i class="ph-fill ph-instagram-logo"></i> Instagram Profile
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 TourJepang. All rights reserved. Spesialis Private Tour & Transportasi Wisata di Jepang.</p>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/081392254657?text=Halo%20Tour%20Jepang,%20saya%20ingin%20konsultasi%20seputar%20private%20tour%20dan%20sewa%20mobil%20ke%20Jepang" target="_blank" rel="noopener" class="floating-wa-btn" aria-label="Hubungi WhatsApp">
        <i class="ph-fill ph-whatsapp-logo"></i>
        <span class="floating-wa-tooltip">Chat WhatsApp (0813-9225-4657)</span>
    </a>

    <!-- Popup Modal -->
    <div id="popupModal" class="modal-overlay">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()"><i class="ph ph-x"></i></span>
            <span class="modal-badge"><i class="ph-fill ph-sparkle"></i> TourJepang Partner</span>
            <h3 id="modalTitle">Informasi Paket</h3>
            <p id="modalDesc">Silakan hubungi kami melalui WhatsApp untuk respon instan atau kirimkan form pertanyaan Anda.</p>
            
            <div class="modal-quick-actions">
                <a id="modalWaBtn" href="https://wa.me/081392254657" target="_blank" rel="noopener" class="btn-wa modal-wa-link">
                    <i class="ph-fill ph-whatsapp-logo"></i> Hubungi WhatsApp Sekarang
                </a>
                <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="btn-ig modal-ig-link">
                    <i class="ph-fill ph-instagram-logo"></i> Cek Foto Trip di Instagram
                </a>
            </div>

            <div class="modal-divider"><span>atau kirim pesan cepat</span></div>

            <form class="modal-form" onsubmit="handleFormSubmit(event)">
                <input type="text" id="formName" placeholder="Nama Lengkap Anda" required>
                <input type="tel" id="formPhone" placeholder="Nomor WhatsApp (contoh: 0812xxxx)" required>
                <textarea id="formMessage" placeholder="Rencana tanggal / jumlah orang / pertanyaan Anda" rows="3"></textarea>
                <button type="submit" class="btn-primary">
                    <i class="ph-fill ph-paper-plane-tilt"></i> Kirim Pertanyaan via WhatsApp
                </button>
            </form>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="/js/main.js"></script>
</body>
</html>
