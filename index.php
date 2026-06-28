<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Khaekal Lazib Luth - Portfolio</title>

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <!-- ======================== PROGRESS SCROLL BAR ======================== -->
    <div class="scroll-progress">
        <div class="scroll-progress-bar" id="scrollProgressBar"></div>
    </div>

    <!-- ======================== NAVBAR ======================== -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">HY_<span class="text-primary">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link active" href="#home">HOME<span class="text-primary">+</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">SERVICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pages">PAGES<span class="text-primary">+</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ======================== HERO / HOME ======================== -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill mb-3">
                        <i class="bi bi-star-fill me-2"></i>KHAEKAL LAZIB LUTH
                    </span>
                    <h1 class="display-1 fw-bold mb-3 hero-title">
                        IMAGINATION <br />
                        <span class="text-primary">IS MORE</span><br />
                        IMPORTANT THAN<br />
                        <span class="text-primary">KNOWLEDGE</span>
                    </h1>
                    <p class="lead text-white-50 mb-4" style="max-width: 550px; font-size: 1.2rem;">
                        Together we the people achieve more than any single person could ever do alone.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                       <a href="https://www.tiktok.com/@hy_lzb?is_from_webapp=1&sender_device=pc" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                            <i class="bi bi-rocket-takeoff me-2"></i>GETTING STARTED
                        </a>
                        <a href="#portfolio" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">
                            <i class="bi bi-grid me-2"></i>VIEW WORK
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="hero-image">
                    <img src="haekal.jpeg" 
                        alt="Khaekal Lazib Luth" 
                        class="img-fluid rounded-circle shadow-lg" 
                        style="width: 380px; height: 380px; object-fit: cover; border: 8px solid rgba(13,110,253,0.3);" />
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== ABOUT ======================== -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill mb-3">TENTANG SAYA</span>
                <h2 class="display-4 fw-bold mb-4">Mengenal <span class="text-primary">Lebih Dekat</span></h2>
                <p class="lead text-secondary">
                    Saya adalah seorang pengembang web dengan pengalaman dalam membangun
                    aplikasi web responsif, dinamis, dan berorientasi pengguna.
                    Saya memiliki semangat tinggi dalam mempelajari teknologi baru
                    dan menciptakan solusi yang berdampak.
                </p>
            </div>
        </div>

        <!-- ====== IDENTITAS SAYA ====== -->
        <div class="row mt-5 pt-4 border-top border-light border-opacity-10">
            <div class="col-12">
                <h3 class="fw-bold text-center mb-4"><span class="text-primary">Identitas</span> Saya</h3>
                <div class="row g-4 justify-content-center">
                    <!-- Card 1: Lulusan -->
                    <div class="col-md-4">
                        <div class="card-horizontal h-100">
                            <div class="icon-box">
                                <i class="bi bi-mortarboard fs-2 text-primary"></i>
                            </div>
                            <div>
                                <h5>Lulusan</h5>
                                <p>
                                    S1 Informatika<br>
                                    <span class="sub-detail">Universitas Pancasakti Tegal - 2027</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2: Pengalaman Kerja -->
                    <div class="col-md-4">
                        <div class="card-horizontal h-100">
                            <div class="icon-box">
                                <i class="bi bi-briefcase fs-2 text-primary"></i>
                            </div>
                            <div>
                                <h5>Pengalaman Kerja</h5>
                                <p>
                                    PT Elektra Inti Perkasa (PLN) - 2023<br>
                                    <span class="sub-detail">Cyber Security Analyst - 2024</span><br>
                                    <span class="sub-detail">Developer - 2025</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3: Hobi -->
                    <div class="col-md-4">
                        <div class="card-horizontal h-100">
                            <div class="icon-box">
                                <i class="bi bi-heart fs-2 text-primary"></i>
                            </div>
                            <div>
                                <h5>Hobi</h5>
                                <p>
                                    bulu tangkis<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== REKOMENDASI / KEAHLIAN ====== -->
        <div class="row mt-5 pt-4 border-top border-light border-opacity-10">
            <div class="col-12">
                <h3 class="fw-bold text-center mb-4"><span class="text-primary">Keahlian</span> Saya</h3>
                <div class="row g-4 justify-content-center">
                    <!-- Card 4: Web Developer -->
                    <div class="col-md-4">
                        <div class="card-horizontal h-100">
                            <div class="icon-box">
                                <i class="bi bi-code-square fs-2 text-primary"></i>
                            </div>
                            <div>
                                <h5>Web Developer</h5>
                                <p>Membangun website modern dengan teknologi terkini.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5: UI/UX Designer -->
                    <div class="col-md-4">
                        <div class="card-horizontal h-100">
                            <div class="icon-box">
                                <i class="bi bi-palette fs-2 text-primary"></i>
                            </div>
                            <div>
                                <h5>UI/UX Designer</h5>
                                <p>Mendesain antarmuka yang intuitif dan menarik.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6: Problem Solver -->
                    <div class="col-md-4">
                        <div class="card-horizontal h-100">
                            <div class="icon-box">
                                <i class="bi bi-rocket-takeoff fs-2 text-primary"></i>
                            </div>
                            <div>
                                <h5>Problem Solver</h5>
                                <p>Menyelesaikan tantangan dengan pendekatan kreatif.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ======================== SERVICES ======================== -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill mb-3">LAYANAN</span>
                    <h2 class="display-4 fw-bold mb-4">Apa yang <span class="text-primary">Saya Tawarkan</span></h2>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary mx-auto mb-3">
                            <i class="bi bi-display fs-1"></i>
                        </div>
                        <h5 class="fw-bold text-primary">Web Development</h5>
                        <p class="text-secondary small">Membangun website responsif dengan teknologi modern seperti Laravel, React, dan Bootstrap.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary mx-auto mb-3">
                            <i class="bi bi-pencil-square fs-1"></i>
                        </div>
                        <h5 class="fw-bold text-primary">UI/UX Design</h5>
                        <p class="text-secondary small">Mendesain antarmuka yang intuitif dan pengalaman pengguna yang memukau.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary mx-auto mb-3">
                            <i class="bi bi-database fs-1"></i>
                        </div>
                        <h5 class="fw-bold text-primary">Database Management</h5>
                        <p class="text-secondary small">Merancang dan mengelola database MySQL yang efisien dan aman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== PORTFOLIO ======================== -->
    <!-- ======================== PORTFOLIO / KARYA TERBARU ======================== -->
<section id="portfolio" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill mb-3">PORTFOLIO</span>
                <h2 class="display-4 fw-bold mb-4">Karya <span class="text-primary">Terbaru</span></h2>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <!-- PROYEK 1: Hy-Plant Detection -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <img src="tanaman.png" class="card-img-top" alt="Hy-Plant Detection" style="height: 200px; object-fit: cover;" />
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Website</span>
                        <h5 class="card-title fw-bold">Hy-Plant Detection</h5>
                        <p class="card-text small text-secondary">Identifikasi tanaman berbasis pengolahan citra digital.</p>
                        <a href="https://hy-plant-detection-177735481250.asia-southeast1.run.app" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm rounded-pill px-4">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- PROYEK 2: Sistem Pengamatan Hilal Modern -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <img src="hilal.PNG" class="card-img-top" alt="Sistem Pengamatan Hilal" style="height: 200px; object-fit: cover;" />
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Website</span>
                        <h5 class="card-title fw-bold">Sistem Pengamatan Hilal Modern</h5>
                        <p class="card-text small text-secondary">Mengamati data keterlihatan waktu hilal di Indonesia pada 1442-1446 H.</p>
                        <a href="https://haykallazib.github.io/hilal-indonesia/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm rounded-pill px-4">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- PROYEK 3: Sistem Parkir Digital -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <img src="parkir.PNG" class="card-img-top" alt="Sistem Parkir Digital" style="height: 200px; object-fit: cover;" />
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Website</span>
                        <h5 class="card-title fw-bold">Sistem Parkir Digital</h5>
                        <p class="card-text small text-secondary">Sistem manajemen parkir berbasis teknologi digital.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ======================== HUBUNGI SAYA (LINK LINKEDIN) ======================== -->
<section id="pages" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill mb-3">
                    <i class="bi bi-linkedin me-2"></i>HUBUNGI SAYA
                </span>
                <h2 class="display-4 fw-bold mb-4">
                    Terhubung <span class="text-primary">Melalui</span> LinkedIn
                </h2>
                <p class="lead text-secondary mb-5" style="max-width: 600px; margin: 0 auto;">
                    Kunjungi profil LinkedIn saya untuk terhubung secara profesional, melihat portofolio, atau berdiskusi lebih lanjut.
                </p>
                <a href="https://www.linkedin.com/in/haykal-lazib-a3038933b/" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-lg" 
                   style="font-size: 1.2rem;">
                    <i class="bi bi-linkedin me-3 fs-3"></i> Kunjungi LinkedIn Saya
                </a>
                <div class="mt-5 pt-3 border-top border-light border-opacity-10">
                    <p class="text-secondary small">
                        <i class="bi bi-envelope me-2"></i> Atau hubungi saya melalui email:
                        <strong class="text-light">haykallazib8@gmail.com</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ======================== FOOTER ======================== -->
    <footer class="py-4 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 small">
                        &copy; 2026 <strong>Khaekal Lazib Luth</strong> — Dibuat dengan
                        <i class="bi bi-heart-fill text-danger"></i>
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white-50 me-3"><i class="bi bi-github"></i></a>
                    <a href="#" class="text-white-50 me-3"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white-50 me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white-50"><i class="bi bi-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>