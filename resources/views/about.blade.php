<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang | Rahmad Alvian</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            /* --- TEMA: DEEP NAVY & VIVID SKY --- */
            --bg-body: #0f172a;       /* Navy Gelap */
            --bg-card: #1e293b;       /* Navy Medium */
            
            --accent-color: #38bdf8;  /* Sky Blue Neon */
            
            /* WARNA TEKS DITINGKATKAN (LEBIH TERANG) */
            --text-main: #ffffff;     /* Putih Murni */
            --text-body: #f1f5f9;     /* Putih Tulang (Sangat Terang) */
            --text-dim: #cbd5e1;      /* Silver Terang (Bukan Abu Gelap) */
        }

        body { 
            background-color: var(--bg-body); 
            color: var(--text-body); 
            font-family: 'Quicksand', sans-serif; 
            padding-bottom: 120px; 
        }

        /* Judul Menyala */
        h1, h2, h3, h4, h5 { 
            color: var(--text-main); 
            text-shadow: 0 0 10px rgba(0,0,0,0.5); /* Shadow agar teks pop-out */
        }

        /* --- PROFILE CARD --- */
        .profile-card {
            background-color: var(--bg-card);
            border-radius: 24px; 
            padding: 0; 
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.4); 
            border: 1px solid rgba(255, 255, 255, 0.15); /* Border lebih tegas */
        }

        .profile-header {
            padding: 3rem 2rem;
            background: linear-gradient(to bottom, #1e293b, #172033);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .profile-details {
            padding: 2rem;
            background-color: rgba(15, 23, 42, 0.8); 
        }

        .info-label {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--text-dim); /* Silver terang */
            margin-bottom: 5px;
            font-weight: 700;
        }

        .info-value {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-main); /* Putih Murni */
        }

        /* --- CONTENT CARDS --- */
        .content-card {
            background: rgba(30, 41, 59, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 1.5rem;
            transition: 0.3s;
        }
        
        .content-card:hover {
            border-color: var(--accent-color);
            background: rgba(30, 41, 59, 0.8);
            box-shadow: 0 5px 20px rgba(56, 189, 248, 0.1);
        }

        /* --- NAVIGASI --- */
        .nav-chill { 
            position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%); 
            background: rgba(30, 41, 59, 0.95); 
            backdrop-filter: blur(10px);
            padding: 10px 20px; border-radius: 50px; 
            display: flex; gap: 15px; z-index: 1000; 
            box-shadow: 0 10px 40px rgba(0,0,0,0.5); 
            border: 1px solid rgba(255,255,255,0.2); 
        }
        .nav-item { 
            color: var(--text-dim); padding: 10px 15px; text-decoration: none; 
            font-weight: 700; border-radius: 20px; transition: 0.3s; 
        }
        .nav-item:hover, .nav-item.active { 
            color: var(--accent-color); 
            background: rgba(56, 189, 248, 0.15); 
            text-shadow: 0 0 10px rgba(56, 189, 248, 0.5);
        }

        /* Helper Styles */
        .text-neon { color: var(--accent-color) !important; text-shadow: 0 0 10px rgba(56, 189, 248, 0.3); }
        .border-neon { border-color: var(--accent-color) !important; }
        .list-item-custom { border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.8rem; margin-bottom: 1rem; }
    </style>
</head>
<body>

    <div class="container pt-5" style="max-width: 800px;">
        
        <div class="mb-5" data-aos="fade-down">
            <h2 class="fw-bold display-6">Profil Mahasiswa</h2>
            <p style="color: var(--text-dim);">Informasi akademik dan keahlian.</p>
        </div>

        <div class="profile-card mb-5" data-aos="fade-up">
            
            <div class="profile-header d-flex flex-column flex-md-row align-items-center gap-4">
                <div style="width: 130px; height: 130px; flex-shrink: 0;">
                    <img src="{{ asset('img/foto-profil.png') }}" 
                         class="w-100 h-100 rounded-circle object-fit-cover border border-4 border-light shadow" 
                         alt="Foto Profil">
                </div>
                
                <div class="text-center text-md-start">
                    <h1 class="fw-bold mb-2">{{ $nama }}</h1>
                    <p class="fs-5 mb-3" style="color: var(--text-body);">Informatics Engineering Student</p>
                    
                    <span class="badge bg-transparent text-neon border border-neon fw-bold px-3 py-2 rounded-pill">
                        <i class="bi bi-circle-fill me-2" style="font-size: 8px;"></i>Active Student
                    </span>
                </div>
            </div>

            <div class="profile-details">
                <div class="row g-4">
                    <div class="col-6 col-md-4">
                        <div class="info-label"><i class="bi bi-bookmark-fill me-2 text-neon"></i>Kelas</div>
                        <div class="info-value">{{ $kelas }}</div>
                    </div>
                    
                    <div class="col-6 col-md-4">
                        <div class="info-label"><i class="bi bi-building-fill me-2 text-neon"></i>Universitas</div>
                        <div class="info-value">Duta Bangsa</div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="info-label"><i class="bi bi-geo-alt-fill me-2 text-neon"></i>Domisili</div>
                        <div class="info-value">Sukoharjo, ID</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                <div class="content-card">
                    <h4 class="fw-bold mb-3 text-neon">Tentang Saya</h4>
                    <p class="mb-0 fs-5" style="line-height: 1.8; color: var(--text-body);">
                        Saya adalah mahasiswa yang memiliki ketertarikan mendalam pada infrastruktur IT. Selain fokus pada perkuliahan, saya menghabiskan waktu luang untuk mengembangkan <strong class="text-white">Home Server</strong> pribadi menggunakan Proxmox dan mempelajari <strong class="text-white">Web Development</strong> dengan Laravel.
                    </p>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="content-card h-100">
                    <h5 class="fw-bold mb-4 text-neon"><i class="bi bi-code-slash me-2"></i>Development</h5>
                    <ul class="list-unstyled" style="color: var(--text-body);">
                        <li class="list-item-custom d-flex justify-content-between">
                            <span class="fw-bold">PHP / Laravel</span> <i class="bi bi-check-circle-fill text-neon"></i>
                        </li>
                        <li class="list-item-custom d-flex justify-content-between">
                            <span class="fw-bold">Python Scripting</span> <i class="bi bi-check-circle-fill text-neon"></i>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="fw-bold">C++ Basics</span> <i class="bi bi-check-circle-fill text-neon"></i>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="content-card h-100">
                    <h5 class="fw-bold mb-4 text-warning"><i class="bi bi-hdd-rack me-2"></i>Server & Infra</h5>
                     <div class="d-flex flex-wrap gap-2">
                        @foreach($hobi as $h)
                        <span class="badge bg-dark border border-secondary text-white fw-normal p-2 px-3">{{ $h }}</span>
                        @endforeach
                        <span class="badge bg-dark border border-secondary text-white fw-normal p-2 px-3">Ubuntu</span>
                        <span class="badge bg-dark border border-secondary text-white fw-normal p-2 px-3">Proxmox VE</span>
                        <span class="badge bg-dark border border-secondary text-white fw-normal p-2 px-3">Networking</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <nav class="nav-chill">
        <a href="/home" class="nav-item"><i class="bi bi-house-door"></i></a>
        <a href="/about" class="nav-item active"><i class="bi bi-person"></i></a>
        <a href="/kontak" class="nav-item"><i class="bi bi-chat-dots"></i></a>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init(); </script>
</body>
</html>