<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NipponTravel - Agen Perjalanan & Private Tour Jepang Terbaik</title>
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

    <!-- Mobile Navigation Overlay -->
    <div class="nav-overlay" id="navOverlay" onclick="toggleMenu()"></div>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="brand-logo">Nippon<span>Travel</span> <i class="ph-fill ph-paper-plane-tilt"></i></a>
            
            <ul class="nav-links">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#destinations">Destinasi</a></li>
                <li><a href="#fleet">Armada</a></li>
                <li><a href="#inclusions">Fasilitas</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>

            <div class="nav-actions">
                <!-- Theme Toggle Button -->
                <button type="button" class="theme-toggle-btn" id="themeToggle" onclick="toggleTheme()" aria-label="Toggle Mode" title="Ganti Mode Gelap / Terang">
                    <i class="ph-bold ph-moon"></i>
                </button>

                <!-- Minimalist Instagram Link -->
                <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="nav-social-link" title="Instagram @rafifnaufal64" aria-label="Instagram">
                    <i class="ph-fill ph-instagram-logo"></i>
                </a>

                <!-- Minimalist WhatsApp Link -->
                <a href="https://wa.me/081392254657" target="_blank" rel="noopener" class="nav-social-link nav-wa-link" title="WhatsApp 0813-9225-4657" aria-label="WhatsApp">
                    <i class="ph-fill ph-whatsapp-logo"></i>
                </a>

                <!-- Primary CTA Button -->
                <button type="button" class="btn-primary btn-nav-cta" onclick="openModal('Konsultasi Perjalanan', 'Hubungi kami sekarang untuk merencanakan liburan impian Anda ke Jepang.', 'Halo NipponTravel, saya ingin konsultasi rencana perjalanan ke Jepang.')">
                    Hubungi Kami
                </button>

                <!-- Mobile Hamburger Menu Button -->
                <div class="mobile-menu" onclick="toggleMenu()" aria-label="Menu">
                    <i class="ph ph-list"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="hero-section">
        <div class="hero-content fade-in-up">
            <div class="hero-tag">
                <i class="ph-fill ph-sparkle"></i> Private Tour & Sewa Mobil Jepang Berlisensi
            </div>
            <h1>Temukan Keindahan <span>Jepang</span> Bersama Kami</h1>
            <p>Pengalaman wisata privat & sewa mobil tak terlupakan dari kilauan kota Tokyo hingga ketenangan kuil di Kyoto. Jadwal fleksibel, armada mewah (Alphard & Hiace), serta pendampingan driver berbahasa Indonesia.</p>
            
            <div class="hero-buttons">
                <a href="#destinations" class="btn-primary">Jelajahi Paket</a>
                <a href="#services" class="btn-secondary">Layanan Kami</a>
                
                <!-- Minimalist WhatsApp Button -->
                <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20tertarik%20untuk%20konsultasi%20liburan%20ke%20Jepang" target="_blank" rel="noopener" class="btn-min-wa">
                    <i class="ph-fill ph-whatsapp-logo"></i> WhatsApp
                </a>

                <!-- Minimalist Instagram Button -->
                <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="btn-min-ig">
                    <i class="ph-fill ph-instagram-logo"></i> @rafifnaufal64
                </a>
            </div>

            <!-- Subtle Trust Highlights Strip -->
            <div class="hero-trust-strip">
                <div class="trust-item">
                    <i class="ph-fill ph-car"></i>
                    <span>100% Private Car</span>
                </div>
                <div class="trust-sep">•</div>
                <div class="trust-item">
                    <i class="ph-fill ph-user-check"></i>
                    <span>Driver Indonesia</span>
                </div>
                <div class="trust-sep">•</div>
                <div class="trust-item">
                    <i class="ph-fill ph-sliders-horizontal"></i>
                    <span>Itinerary Bebas</span>
                </div>
                <div class="trust-sep">•</div>
                <div class="trust-item">
                    <i class="ph-fill ph-shield-check"></i>
                    <span>Harga All-In Transparan</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Layanan Utama Section (Services inspired by TourJepang in NipponTravel style) -->
    <section id="services" class="services-section">
        <div class="container glass-section fade-in-on-scroll">
            <h2 class="section-title">Layanan Perjalanan Kami</h2>
            <p class="section-subtitle">Pilihan transportasi privat dan tur harian fleksibel untuk kenyamanan maksimal Anda di Jepang</p>

            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-icon"><i class="ph-fill ph-steering-wheel"></i></div>
                    <h3>Private 1-Day Tour</h3>
                    <p>Sewa mobil privat beserta pengemudi harian (10–12 jam) keliling spot terbaik kota dengan tempo santai.</p>
                    <ul class="card-features">
                        <li><i class="ph-fill ph-check-circle"></i> Tokyo City Tour & Shopping</li>
                        <li><i class="ph-fill ph-check-circle"></i> Mount Fuji & Lake Kawaguchiko</li>
                        <li><i class="ph-fill ph-check-circle"></i> Kyoto Heritage & Onsen Hakone</li>
                    </ul>
                    <div class="service-card-action">
                        <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20tanya%20sewa%20Private%201-Day%20Tour%20di%20Jepang" target="_blank" rel="noopener" class="btn-card-min-wa">
                            <i class="ph-fill ph-whatsapp-logo"></i> Pesan via WA
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-icon"><i class="ph-fill ph-airplane-landing"></i></div>
                    <h3>Airport Transfer</h3>
                    <p>Antar-jemput bandara tepat waktu dan nyaman langsung ke lobi hotel tanpa repot membawa koper naik kereta.</p>
                    <ul class="card-features">
                        <li><i class="ph-fill ph-check-circle"></i> Haneda Airport (HND) ↔ Tokyo</li>
                        <li><i class="ph-fill ph-check-circle"></i> Narita Airport (NRT) ↔ Tokyo</li>
                        <li><i class="ph-fill ph-check-circle"></i> Kansai Airport (KIX) ↔ Osaka / Kyoto</li>
                    </ul>
                    <div class="service-card-action">
                        <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20booking%20Airport%20Transfer%20Bandara%20Jepang" target="_blank" rel="noopener" class="btn-card-min-wa">
                            <i class="ph-fill ph-whatsapp-logo"></i> Booking via WA
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-icon"><i class="ph-fill ph-path"></i></div>
                    <h3>One-Way Intercity Transfer</h3>
                    <p>Layanan perjalanan privat antarkota di Jepang. Point-to-point tanpa repot berganti peron stasiun dengan banyak barang.</p>
                    <ul class="card-features">
                        <li><i class="ph-fill ph-check-circle"></i> Tokyo ↔ Mount Fuji / Hakone</li>
                        <li><i class="ph-fill ph-check-circle"></i> Tokyo ↔ Nagoya / Kyoto / Osaka</li>
                        <li><i class="ph-fill ph-check-circle"></i> Osaka ↔ Kyoto / Nara / Kobe</li>
                    </ul>
                    <div class="service-card-action">
                        <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20tanya%20tarif%20One-Way%20Transfer%20antarkota" target="_blank" rel="noopener" class="btn-card-min-wa">
                            <i class="ph-fill ph-whatsapp-logo"></i> Cek Tarif via WA
                        </a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-card">
                    <div class="service-icon"><i class="ph-fill ph-map-trifold"></i></div>
                    <h3>Custom Private Tour</h3>
                    <p>Paket liburan multi-hari yang dirancang khusus mengikuti tanggal perjalanan, budget, dan preferensi keluarga Anda.</p>
                    <ul class="card-features">
                        <li><i class="ph-fill ph-check-circle"></i> Itinerary 100% fleksibel & custom</li>
                        <li><i class="ph-fill ph-check-circle"></i> Rekomendasi hotel bintang 4 & 5</li>
                        <li><i class="ph-fill ph-check-circle"></i> Rekomendasi kuliner halal & ramen otentik</li>
                    </ul>
                    <div class="service-card-action">
                        <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20merancang%20Custom%20Private%20Tour%20di%20Jepang" target="_blank" rel="noopener" class="btn-card-min-wa">
                            <i class="ph-fill ph-whatsapp-logo"></i> Rancang via WA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (Enhanced Original About) -->
    <section id="about" class="about-section">
        <div class="container glass-section fade-in-on-scroll">
            <div class="about-grid">
                <div class="about-text slide-in-left">
                    <h2>Mengapa Memilih NipponTravel?</h2>
                    <p>Kami adalah spesialis perjalanan wisata ke Jepang dengan pengalaman lebih dari 10 tahun. Kami menyediakan layanan perjalanan eksklusif dan privat yang dirancang khusus untuk memenuhi gaya hidup, kenyamanan, dan keinginan Anda.</p>
                    <ul class="features-list">
                        <li><i class="ph-fill ph-check-circle"></i> <strong>100% Private Car:</strong> Kendaraan eksklusif khusus Anda & keluarga tanpa digabung peserta lain.</li>
                        <li><i class="ph-fill ph-check-circle"></i> <strong>Driver & Guide Indonesia:</strong> Komunikasi lancar dan ramah tanpa hambatan bahasa.</li>
                        <li><i class="ph-fill ph-check-circle"></i> <strong>Itinerary Fleksibel:</strong> Waktu dan destinasi dapat disesuaikan dengan ritme santai keluarga.</li>
                        <li><i class="ph-fill ph-check-circle"></i> <strong>Armada Nyaman & Prima:</strong> Toyota Alphard, Hiace Grand Cabin, dan Coaster dalam kondisi wangi & berizin resmi.</li>
                        <li><i class="ph-fill ph-check-circle"></i> <strong>Harga All-In Transparan:</strong> Biaya sudah termasuk mobil, BBM, tol jalan raya, dan parkir.</li>
                        <li><i class="ph-fill ph-check-circle"></i> <strong>Bantuan 24/7:</strong> Konsultasi rute, rekomendasi hotel, hingga pendampingan aktif selama trip.</li>
                    </ul>
                </div>
                <div class="about-image slide-in-right">
                    <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?q=80&w=800&auto=format&fit=crop" alt="Pemandangan Jepang">
                </div>
            </div>
        </div>
    </section>

    <!-- Pilihan Armada Section (Fleet) -->
    <section id="fleet" class="fleet-section">
        <div class="container glass-section fade-in-on-scroll">
            <h2 class="section-title">Pilihan Armada Nyaman</h2>
            <p class="section-subtitle">Unit kendaraan prima, bersih, dan berizin resmi transportasi turis di Jepang</p>

            <div class="fleet-grid">
                <!-- Fleet 1: Alphard -->
                <div class="fleet-card">
                    <div class="fleet-img-wrap">
                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=80&w=800&auto=format&fit=crop" alt="Toyota Alphard">
                        <span class="fleet-badge">VVIP Choice</span>
                    </div>
                    <div class="fleet-body">
                        <h3>Toyota Alphard / Vellfire</h3>
                        <p>Kendaraan mewah favorit untuk pasangan, honeymoon, dan keluarga kecil yang menginginkan kenyamanan berkelas tinggi.</p>
                        <div class="fleet-specs">
                            <span><i class="ph-fill ph-users"></i> 4–5 Penumpang</span>
                            <span><i class="ph-fill ph-suitcase"></i> 4 Koper Besar</span>
                            <span><i class="ph-fill ph-armchair"></i> Captain Seat Reclining</span>
                        </div>
                        <div class="fleet-footer">
                            <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20tanya%20sewa%20Toyota%20Alphard" target="_blank" rel="noopener" class="btn-card-min-wa">
                                <i class="ph-fill ph-whatsapp-logo"></i> Tanya Ketersediaan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Fleet 2: Hiace -->
                <div class="fleet-card featured-fleet">
                    <div class="fleet-img-wrap">
                        <img src="https://images.unsplash.com/photo-1570125909232-eb263c188f7e?q=80&w=800&auto=format&fit=crop" alt="Toyota Hiace">
                        <span class="fleet-badge">Paling Populer</span>
                    </div>
                    <div class="fleet-body">
                        <h3>Toyota Hiace Grand Cabin</h3>
                        <p>Pilihan utama untuk keluarga besar atau grup teman. Ruang kabin beratap tinggi yang lega dengan kapasitas bagasi ekstra lapang.</p>
                        <div class="fleet-specs">
                            <span><i class="ph-fill ph-users"></i> 8–9 Penumpang</span>
                            <span><i class="ph-fill ph-suitcase"></i> 8–9 Koper Besar</span>
                            <span><i class="ph-fill ph-arrows-out-cardinal"></i> Kabin Tinggi & Lega</span>
                        </div>
                        <div class="fleet-footer">
                            <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20tanya%20sewa%20Toyota%20Hiace%20Grand%20Cabin" target="_blank" rel="noopener" class="btn-card-min-wa">
                                <i class="ph-fill ph-whatsapp-logo"></i> Tanya Ketersediaan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Fleet 3: Coaster -->
                <div class="fleet-card">
                    <div class="fleet-img-wrap">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=800&auto=format&fit=crop" alt="Toyota Coaster">
                        <span class="fleet-badge">Group & Corporate</span>
                    </div>
                    <div class="fleet-body">
                        <h3>Toyota Coaster / Microbus</h3>
                        <p>Kendaraan berkapasitas besar untuk rombongan kantor, study tour, atau komunitas keluarga besar yang bepergian bersama.</p>
                        <div class="fleet-specs">
                            <span><i class="ph-fill ph-users"></i> 15–18 Penumpang</span>
                            <span><i class="ph-fill ph-suitcase"></i> 15+ Koper Besar</span>
                            <span><i class="ph-fill ph-microphone"></i> Audio Tour Guide Mic</span>
                        </div>
                        <div class="fleet-footer">
                            <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20tanya%20sewa%20Toyota%20Coaster%20Microbus" target="_blank" rel="noopener" class="btn-card-min-wa">
                                <i class="ph-fill ph-whatsapp-logo"></i> Tanya Ketersediaan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section (Original Carousel Enhanced) -->
    <section id="destinations" class="destinations-section">
        <div class="container glass-section fade-in-on-scroll">
            <h2 class="section-title">Destinasi & Paket Favorit</h2>
            <p class="section-subtitle">Pilih paket liburan impian Anda ke Negeri Sakura dengan fasilitas lengkap</p>
            
            <div class="carousel-container">
                <div class="carousel-track" id="carouselTrack">
                    
                    <!-- Card 1: Tokyo & Fuji -->
                    <div class="card fade-in-on-scroll">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1542051841857-5f90071e7989?q=80&w=600&auto=format&fit=crop" alt="Tokyo">
                            <span class="badge">Musim Semi</span>
                        </div>
                        <div class="card-content">
                            <h3>Pesona Tokyo & Fuji</h3>
                            <p>5 Hari 4 Malam menjelajahi metropolis Tokyo, belanja Shibuya & Ginza, serta pesona magis Danau Kawaguchiko Gunung Fuji.</p>
                            <div class="card-footer">
                                <span class="price">Mulai Rp 14,5 Juta</span>
                                <div class="card-actions">
                                    <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20tertarik%20dengan%20paket%20Pesona%20Tokyo%20%26%20Fuji.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-min-icon-wa" title="Tanya via WA" aria-label="WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i>
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Pesona Tokyo & Fuji', 'Paket 5 Hari 4 Malam. Termasuk mobil privat, driver Indonesia, bensin, tol, dan tiket wisata.', 'Halo NipponTravel, saya tertarik dengan paket Pesona Tokyo & Fuji.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Kyoto & Osaka -->
                    <div class="card fade-in-on-scroll" style="transition-delay: 0.15s">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1493780474015-ba834fd0ce2f?q=80&w=600&auto=format&fit=crop" alt="Kyoto">
                            <span class="badge">Budaya</span>
                        </div>
                        <div class="card-content">
                            <h3>Eksplorasi Kyoto & Osaka</h3>
                            <p>5 Hari 4 Malam menikmati budaya tradisional di Fushimi Inari, Arashiyama Bamboo Grove, dan kuliner Dotonbori Osaka.</p>
                            <div class="card-footer">
                                <span class="price">Mulai Rp 13,9 Juta</span>
                                <div class="card-actions">
                                    <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20tertarik%20dengan%20paket%20Eksplorasi%20Kyoto%20%26%20Osaka.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-min-icon-wa" title="Tanya via WA" aria-label="WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i>
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Eksplorasi Kyoto & Osaka', 'Paket 5 Hari 4 Malam. Pengalaman memakai kimono otentik, kuil bersejarah Kyoto, dan kulineran malam di Osaka.', 'Halo NipponTravel, saya tertarik dengan paket Eksplorasi Kyoto & Osaka.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Shirakawa-go -->
                    <div class="card fade-in-on-scroll" style="transition-delay: 0.3s">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1522273400909-fd1a8f77637e?q=80&w=600&auto=format&fit=crop" alt="Shirakawa-go">
                            <span class="badge">Musim Dingin</span>
                        </div>
                        <div class="card-content">
                            <h3>Winter di Shirakawa-go</h3>
                            <p>5 Hari 4 Malam melihat desa warisan dunia UNESCO dengan rumah atap jerami tradisional yang tertutup salju indah.</p>
                            <div class="card-footer">
                                <span class="price">Mulai Rp 18 Juta</span>
                                <div class="card-actions">
                                    <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20tertarik%20dengan%20paket%20Winter%20di%20Shirakawa-go.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-min-icon-wa" title="Tanya via WA" aria-label="WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i>
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Winter di Shirakawa-go', 'Paket spesial musim dingin 5 Hari 4 Malam. Menikmati pesona desa Shirakawa-go, kuliner daging Hida Beef di Takayama, dan Onsen privat.', 'Halo NipponTravel, saya tertarik dengan paket Winter di Shirakawa-go.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Japan Golden Route -->
                    <div class="card fade-in-on-scroll" style="transition-delay: 0.45s">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1503899036084-c55cdd92da26?q=80&w=600&auto=format&fit=crop" alt="Golden Route">
                            <span class="badge">Rute Terlengkap</span>
                        </div>
                        <div class="card-content">
                            <h3>Japan Golden Route</h3>
                            <p>7 Hari 6 Malam menjelajahi Tokyo, Gunung Fuji, Kyoto, Nara, hingga Osaka. Rute klasik paling lengkap dan direkomendasikan.</p>
                            <div class="card-footer">
                                <span class="price">Mulai Rp 19,5 Juta</span>
                                <div class="card-actions">
                                    <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20tertarik%20dengan%20paket%20Japan%20Golden%20Route%207D6N.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-min-icon-wa" title="Tanya via WA" aria-label="WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i>
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Japan Golden Route 7D6N', 'Rute klasik paling populer mencakup Tokyo, Fuji, Kyoto, Nara, dan Osaka dengan mobil privat dan driver Indonesia.', 'Halo NipponTravel, saya tertarik dengan paket Japan Golden Route 7D6N.')">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Hokkaido Snow Wonderland -->
                    <div class="card fade-in-on-scroll" style="transition-delay: 0.6s">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1517411032315-54ef2cb783bb?q=80&w=600&auto=format&fit=crop" alt="Hokkaido">
                            <span class="badge">Salju & Onsen</span>
                        </div>
                        <div class="card-content">
                            <h3>Hokkaido Snow Wonderland</h3>
                            <p>6 Hari 5 Malam menikmati serunya salju bubuk di Niseko, kanal romantis Otaru, dan parade pinguin di Asahiyama Zoo.</p>
                            <div class="card-footer">
                                <span class="price">Mulai Rp 24,5 Juta</span>
                                <div class="card-actions">
                                    <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20tertarik%20dengan%20paket%20Hokkaido%20Snow%20Wonderland.%20Bisa%20info%20detailnya%3F" target="_blank" rel="noopener" class="btn-min-icon-wa" title="Tanya via WA" aria-label="WhatsApp">
                                        <i class="ph-fill ph-whatsapp-logo"></i>
                                    </a>
                                    <button class="btn-outline" onclick="openModal('Hokkaido Snow Wonderland 6D5N', 'Jelajahi surga salju Hokkaido dengan kendaraan 4WD nyaman dan driver berpengalaman melintasi jalanan musim dingin.', 'Halo NipponTravel, saya tertarik dengan paket Hokkaido Snow Wonderland.')">Detail</button>
                                </div>
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

    <!-- Transparansi Fasilitas (Inclusions & Exclusions) -->
    <section id="inclusions" class="inclusions-section">
        <div class="container glass-section fade-in-on-scroll">
            <h2 class="section-title">Transparansi Fasilitas</h2>
            <p class="section-subtitle">Rincian biaya jelas sejak awal tanpa biaya siluman saat perjalanan berlangsung</p>

            <div class="inclusions-grid">
                <!-- Included -->
                <div class="inc-card inc-card-yes">
                    <div class="inc-title">
                        <i class="ph-fill ph-check-circle"></i> Sudah Termasuk (Included)
                    </div>
                    <ul class="inc-items">
                        <li><i class="ph-fill ph-check"></i> Sewa mobil privat (Alphard / Hiace / Coaster)</li>
                        <li><i class="ph-fill ph-check"></i> Driver profesional berbahasa Indonesia / Jepang</li>
                        <li><i class="ph-fill ph-check"></i> Bahan Bakar Minyak (Bensin / BBM) selama perjalanan</li>
                        <li><i class="ph-fill ph-check"></i> Biaya tol jalan bebas hambatan (Highway Toll Fee)</li>
                        <li><i class="ph-fill ph-check"></i> Biaya tiket parkir di seluruh lokasi destinasi</li>
                        <li><i class="ph-fill ph-check"></i> Akomodasi & makan driver selama bertugas</li>
                        <li><i class="ph-fill ph-check"></i> Air mineral botol di dalam kendaraan</li>
                    </ul>
                </div>

                <!-- Excluded -->
                <div class="inc-card inc-card-no">
                    <div class="inc-title">
                        <i class="ph-fill ph-x-circle"></i> Belum Termasuk (Excluded)
                    </div>
                    <ul class="inc-items">
                        <li><i class="ph-fill ph-x"></i> Tiket pesawat internasional pulang-pergi (PP)</li>
                        <li><i class="ph-fill ph-x"></i> Biaya pengurusan visa masuk Jepang</li>
                        <li><i class="ph-fill ph-x"></i> Tiket masuk objek wisata berbayar (Disney, USJ, Shibuya Sky)</li>
                        <li><i class="ph-fill ph-x"></i> Makan siang & makan malam pribadi</li>
                        <li><i class="ph-fill ph-x"></i> Pengeluaran belanja pribadi & oleh-oleh</li>
                        <li><i class="ph-fill ph-x"></i> Tipping sukarela untuk driver / guide</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Wisatawan -->
    <section id="testimonials" class="testimonials-section">
        <div class="container glass-section fade-in-on-scroll">
            <h2 class="section-title">Apa Kata Mereka?</h2>
            <p class="section-subtitle">Cerita kepuasan keluarga yang telah mempercayakan liburan mereka ke Jepang bersama NipponTravel</p>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testi-card">
                    <div class="testi-stars">
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                    </div>
                    <p class="testi-quote">"Sangat puas sewa Hiace untuk keluarga 8 orang keliling Golden Route. Drivernya orang Indonesia, ramah banget, fotoin kita bagus-bagus dan paham tempat makan halal di Tokyo & Kyoto!"</p>
                    <div class="testi-user">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format&fit=crop" alt="Bpk. Hendra Wijaya">
                        <div>
                            <h4>Bpk. Hendra Wijaya</h4>
                            <span>Jakarta • Paket Golden Route 7D6N</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testi-card">
                    <div class="testi-stars">
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                    </div>
                    <p class="testi-quote">"Perjalanan ke Fuji dan Shirakawa-go nyaman banget pakai Alphard. Mobil wangi dan bersih. Itinerary fleksibel jadi anak-anak gak kecapekan. Komunikasi via WhatsApp Mas Rafif sangat cepat tanggap!"</p>
                    <div class="testi-user">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=150&auto=format&fit=crop" alt="Ibu Cynthia Permata">
                        <div>
                            <h4>Ibu Cynthia Permata</h4>
                            <span>Surabaya • Sewa Alphard Shirakawa-go</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testi-card">
                    <div class="testi-stars">
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                    </div>
                    <p class="testi-quote">"Airport transfer dari Haneda langsung ke hotel Shinjuku rasanya penyelamat setelah 7 jam penerbangan membawa 4 koper besar. Driver tepat waktu di arrival hall dan sangat sopan. Pasti pakai lagi!"</p>
                    <div class="testi-user">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150&auto=format&fit=crop" alt="Dr. Pratama">
                        <div>
                            <h4>Dr. Pratama</h4>
                            <span>Bandung • Airport Transfer Haneda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
        <div class="container glass-section fade-in-on-scroll">
            <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
            <p class="section-subtitle">Informasi seputar sewa mobil dan private tour di Jepang</p>

            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>Apakah rute dan destinasi bisa diubah di tengah perjalanan?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Tentu saja! Karena layanan kami 100% private tour, Anda bebas menyesuaikan destinasi, urutan kunjungan, maupun durasi singgah di tiap lokasi selama masih dalam batas jam operasional mobil (10–12 jam sehari).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>Apakah pengemudi (driver) bisa berbahasa Indonesia?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Ya, armada kami dikemudikan oleh driver warga Indonesia yang telah bertahun-tahun berdomisili serta berlisensi di Jepang, atau driver lokal Jepang yang didampingi guide berbahasa Indonesia. Komunikasi dijamin lancar dan nyaman.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>Bagaimana prosedur booking dan pembayaran?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Hubungi WhatsApp kami di <strong>0813-9225-4657</strong> dengan menginfokan tanggal, jumlah rombongan, dan destinasi yang diinginkan. Kami akan mengirimkan estimasi rute dan invoice resmi. Pemesanan dikonfirmasi dengan Down Payment (DP).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>Apakah bisa dibantu booking tiket wahana seperti Disneyland atau USJ?</span>
                        <i class="ph-bold ph-caret-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Bisa! Kami siap membantu pemesanan tiket Tokyo Disneyland/DisneySea, Universal Studios Japan (USJ), Shibuya Sky, tiket Shinkansen, hingga reservasi restoran ramah muslim / halal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div class="footer-brand">
                <h3>Nippon<span>Travel</span></h3>
                <p>Membawa Anda lebih dekat dengan keajaiban Jepang. Solusi perjalanan privat dan sewa mobil terbaik untuk pengalaman berlibur yang berkesan.</p>
                <div class="footer-contacts">
                    <span><i class="ph-fill ph-whatsapp-logo"></i> WA: <a href="https://wa.me/081392254657" target="_blank" rel="noopener">0813-9225-4657</a></span>
                    <span><i class="ph-fill ph-instagram-logo"></i> IG: <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener">@rafifnaufal64</a></span>
                </div>
            </div>
            <div class="footer-links">
                <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" title="Instagram @rafifnaufal64" aria-label="Instagram"><i class="ph-fill ph-instagram-logo"></i></a>
                <a href="https://wa.me/081392254657" target="_blank" rel="noopener" title="WhatsApp 0813-9225-4657" aria-label="WhatsApp"><i class="ph-fill ph-whatsapp-logo"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 NipponTravel. All rights reserved.</p>
        </div>
    </footer>

    <!-- Floating Minimalist WhatsApp Button -->
    <a href="https://wa.me/081392254657?text=Halo%20NipponTravel,%20saya%20ingin%20konsultasi%20paket%20tour%20ke%20Jepang" target="_blank" rel="noopener" class="floating-wa" aria-label="WhatsApp" title="Chat WhatsApp (0813-9225-4657)">
        <i class="ph-fill ph-whatsapp-logo"></i>
        <span class="floating-wa-label">WhatsApp</span>
    </a>

    <!-- Popup Modal -->
    <div id="popupModal" class="modal-overlay">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()"><i class="ph ph-x"></i></span>
            <h3 id="modalTitle">Konsultasi Perjalanan</h3>
            <p id="modalDesc">Hubungi kami sekarang untuk merencanakan perjalanan impian Anda ke Jepang.</p>
            
            <div class="modal-social-actions">
                <a id="modalWaBtn" href="https://wa.me/081392254657" target="_blank" rel="noopener" class="btn-min-wa modal-act-btn">
                    <i class="ph-fill ph-whatsapp-logo"></i> Chat WhatsApp (0813-9225-4657)
                </a>
                <a href="https://www.instagram.com/rafifnaufal64/" target="_blank" rel="noopener" class="btn-min-ig modal-act-btn">
                    <i class="ph-fill ph-instagram-logo"></i> Instagram @rafifnaufal64
                </a>
            </div>

            <div class="modal-divider"><span>atau tinggalkan pesan</span></div>

            <form class="modal-form" onsubmit="handleFormSubmit(event)">
                <input type="text" id="formName" placeholder="Nama Anda" required>
                <input type="tel" id="formPhone" placeholder="Nomor WhatsApp" required>
                <textarea id="formMessage" placeholder="Rencana tanggal / pertanyaan Anda" rows="3"></textarea>
                <button type="submit" class="btn-primary">Kirim Permintaan via WhatsApp</button>
            </form>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="/js/main.js"></script>
</body>
</html>
