    <!doctype html>
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beranda | Rahmad Alvian</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>
            :root {
                /* Palette: Deep Navy & Vivid Sky */
                --bg-body: #0f172a;       /* Navy Gelap */
                --bg-card: #1e293b;       /* Navy Medium */
                
                /* WARNA TEKS LEBIH HIDUP */
                --text-main: #ffffff;     /* Putih Murni (Judul) */
                --text-body: #e2e8f0;     /* Abu Terang (Isi Paragraf - Jauh lebih terang) */
                --text-dim: #94a3b8;      /* Abu Sedang (Hanya untuk label kecil) */
                
                --accent-color: #38bdf8;  /* Biru Langit Cerah */
                --accent-glow: 0 0 20px rgba(56, 189, 248, 0.4);
            }

            body {
                background-color: var(--bg-body);
                color: var(--text-body);  /* Menggunakan warna terang untuk default */
                font-family: 'Quicksand', sans-serif;
                padding-bottom: 120px;
            }

            h1, h2, h3, h4, h5, h6 {
                color: var(--text-main); /* Judul selalu putih bersih */
            }

            /* --- CARD STYLE --- */
            .lofi-card {
                background-color: var(--bg-card);
                border-radius: 30px;
                padding: 2.5rem;
                border: 1px solid rgba(255, 255, 255, 0.1); /* Border lebih tegas */
                box-shadow: 0 10px 30px rgba(0,0,0,0.3);
                transition: transform 0.3s ease;
            }

            .lofi-card:hover {
                transform: translateY(-5px);
                border-color: var(--accent-color);
            }

            /* --- TOMBOL --- */
            .btn-chill {
                background-color: var(--accent-color);
                color: #0f172a; /* Teks tombol gelap agar kontras */
                border-radius: 50px;
                padding: 12px 30px;
                font-weight: 700;
                border: none;
                box-shadow: var(--accent-glow);
                transition: 0.3s;
            }
            .btn-chill:hover {
                background-color: #7dd3fc;
                color: #0f172a;
                transform: scale(1.05);
                box-shadow: 0 0 30px rgba(56, 189, 248, 0.6);
            }
            
            .btn-chill-outline {
                background: transparent;
                border: 2px solid var(--accent-color);
                color: var(--accent-color);
                border-radius: 50px;
                padding: 10px 28px;
                font-weight: 700;
                transition: 0.3s;
            }
            .btn-chill-outline:hover {
                background: var(--accent-color);
                color: #0f172a;
                box-shadow: var(--accent-glow);
            }

            /* --- SKILL PILLS --- */
            .skill-pill {
                background: rgba(56, 189, 248, 0.15); /* Background sedikit lebih tebal */
                color: #7dd3fc; /* Teks Biru Terang */
                padding: 8px 20px;
                border-radius: 20px;
                font-weight: 600;
                font-size: 0.9rem;
                display: inline-block;
                margin-right: 5px; margin-bottom: 5px;
                border: 1px solid rgba(56, 189, 248, 0.2);
            }

            /* --- NAVIGASI FLOAT --- */
            .chill-nav {
                position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%);
                background: rgba(30, 41, 59, 0.95);
                backdrop-filter: blur(10px);
                padding: 10px 20px; border-radius: 50px;
                display: flex; gap: 15px; z-index: 1000;
                box-shadow: 0 10px 40px rgba(0,0,0,0.5);
                border: 1px solid rgba(255,255,255,0.15);
            }
            .nav-item-chill {
                color: var(--text-dim); padding: 10px 15px; text-decoration: none; 
                font-weight: 700; border-radius: 20px; transition: 0.3s;
            }
            .nav-item-chill:hover, .nav-item-chill.active {
                color: var(--accent-color); background: rgba(56, 189, 248, 0.1);
                text-shadow: 0 0 10px rgba(56, 189, 248, 0.5);
            }

            /* Foto */
            .profile-img {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                border: 4px solid var(--accent-color);
                box-shadow: 0 0 30px rgba(56, 189, 248, 0.2);
                transition: 5s ease-in-out;
                animation: morph 8s ease-in-out infinite;
            }
            @keyframes morph {
                0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
                50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
                100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
            }
        </style>
    </head>
    <body>

        <div class="container pt-5" style="max-width: 900px;">

            <div class="row align-items-center g-5">
                
                <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-3 text-white">
                        Rahmad Alvian <br><span style="color: var(--accent-color); text-shadow: 0 0 20px rgba(56, 189, 248, 0.5);">Andrianto.</span>
                    </h1>
                    
                    <p class="fs-5 mb-4" style="line-height: 1.8; color: var(--text-body);">
                        Mahasiswa santai yang suka ngoding di tengah malam. <br>
                        Fokus saya sekarang ada di <strong class="text-white">Web Development</strong> dan eksperimen <strong class="text-white">Home Server</strong>.
                    </p>
                    
                    <div class="d-flex gap-3 mb-5">
                        <a href="/about" class="btn-chill text-decoration-none">Tentang saya</a>
                        <a href="https://github.com/actzy" target="_blank" class="btn-chill-outline text-decoration-none"><i class="bi bi-github"></i> Github</a>
                    </div>

                    <div>
                        <p class="small fw-bold mb-2 text-uppercase ls-1" style="color: var(--text-dim);">Sering Pakai:</p>
                        <div>
                            <span class="skill-pill">Laravel</span>
                            <span class="skill-pill">C++</span>
                            <span class="skill-pill">Python</span>
                            <span class="skill-pill">CasaOS</span>
                            <span class="skill-pill">Ubuntu</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 text-center" data-aos="zoom-in">
                    <div class="position-relative d-inline-block">
                        <div style="position: absolute; top: 20%; left: 20%; width: 60%; height: 60%; background: var(--accent-color); filter: blur(80px); opacity: 0.5; z-index: -1;"></div>
                        
                        <img src="{{ asset('img/foto-profil.png') }}" class="img-fluid profile-img" style="width: 320px; height: 320px; object-fit: cover;" alt="Alvian">
                    </div>
                </div>

            </div>

            <div class="row mt-5 g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="lofi-card d-flex align-items-center gap-3 py-4">
                        <i class="bi bi-hdd-rack fs-2" style="color: var(--accent-color);"></i>
                        <div>
                            <h5 class="fw-bold mb-1 text-white">Server Lab</h5>
                            <p class="small mb-0" style="color: var(--text-body);">Ngoprek Proxmox & IoT</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="lofi-card d-flex align-items-center gap-3 py-4">
                        <i class="bi bi-geo-alt fs-2 text-warning"></i>
                        <div>
                            <h5 class="fw-bold mb-1 text-white">Lokasi</h5>
                            <p class="small mb-0" style="color: var(--text-body);">Surakarta, Jawa Tengah</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <nav class="chill-nav">
            <a href="/home" class="nav-item-chill active"><i class="bi bi-house-door"></i></a>
            <a href="/about" class="nav-item-chill"><i class="bi bi-person"></i></a>
            <a href="/kontak" class="nav-item-chill"><i class="bi bi-chat-dots"></i></a>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script> AOS.init(); </script>
    </body>
    </html>