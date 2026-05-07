<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang | Rahmad Alvian</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --bg-body: #050816;
            --bg-card: rgba(17, 25, 40, 0.75);
            --accent-cyan: #00f2ff;
            --accent-purple: #7000ff;
            --text-main: #ffffff;
            --text-body: #94a3b8;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-body);
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding-bottom: 120px;
        }

        h1, h2, h3, h4, h5 { color: var(--text-main); }

        .text-neon {
            background: linear-gradient(to right, var(--accent-cyan), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .profile-card, .content-card {
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            transition: 0.3s;
        }

        .content-card:hover {
            border-color: var(--accent-cyan);
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.1);
        }

        .info-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--accent-cyan);
            margin-bottom: 4px;
            font-weight: 700;
        }

        .info-value {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .skill-badge {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 8px 16px;
            border-radius: 12px;
            font-size: 0.85rem;
        }

        /* --- NAVIGASI FLOAT FIX --- */
        .chill-nav {
            position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%);
            background: rgba(15, 23, 42, 0.8); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);
            padding: 6px; border-radius: 20px; display: flex; gap: 4px; z-index: 9999;
            border: 1px solid rgba(255, 255, 255, 0.1); width: auto; max-width: 95%; white-space: nowrap;
        }
        .nav-item {
            color: #64748b; padding: 10px 16px; text-decoration: none; 
            font-weight: 700; font-size: 0.85rem; border-radius: 15px; transition: 0.3s;
        }
        .nav-item:hover { color: #fff; background: rgba(255, 255, 255, 0.05); }
        .nav-item.active { background: #ffffff; color: #000000 !important; box-shadow: 0 0 15px rgba(255, 255, 255, 0.3); }

        @media (max-width: 500px) {
            .nav-item { padding: 8px 10px; font-size: 0.75rem; }
        }
    </style>
</head>
<body>

    <div class="container pt-5 mt-lg-4" style="max-width: 850px;">
        <div class="mb-5 text-center text-md-start" data-aos="fade-down">
            <h2 class="fw-bold display-6">Profil <span class="text-neon">Pribadi</span></h2>
            <p class="text-white-50">Detail tentang saya dan kompetensi teknis.</p>
        </div>

        <div class="profile-card mb-5 overflow-hidden" data-aos="fade-up">
            <div class="p-4 p-md-5">
                <div class="row align-items-center g-4">
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('img/foto-profil.png') }}" 
                             class="rounded-circle border border-2 border-info p-1 shadow" 
                             style="width: 150px; height: 150px; object-fit: cover;"
                             alt="Foto Profil">
                    </div>
                    <div class="col-md-9 text-center text-md-start">
                        <h1 class="fw-bold mb-1">{{ $nama }}</h1>
                        <p class="fs-5 text-info mb-3">Mahasiswa Teknik Informatika</p>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill px-3 py-2">
                            <i class="bi bi-check-circle-fill me-2"></i>Status: Mahasiswa Aktif
                        </span>
                    </div>
                </div>
            </div>

            <div class="p-4" style="background: rgba(0,0,0,0.2);">
                <div class="row g-4 text-center text-md-start">
                    <div class="col-6 col-md-4">
                        <div class="info-label">Program Studi</div>
                        <div class="info-value">{{ $kelas }}</div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="info-label">Universitas</div>
                        <div class="info-value">Universitas Duta Bangsa</div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="info-label">Lokasi</div>
                        <div class="info-value">Surakarta, Jawa Tengah</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-7" data-aos="fade-right">
                <div class="content-card h-100 p-4">
                    <h4 class="fw-bold mb-3 text-white">Tentang <span class="text-neon">Saya</span></h4>
                    <p class="mb-3 text-white-50" style="line-height: 1.8;">
                        Halo! Saya Rahmad Alvian, mahasiswa Teknik Informatika yang memiliki ketertarikan mendalam pada pengembangan perangkat lunak dan infrastruktur server.
                    </p>
                    <p class="mb-0 text-white-50" style="line-height: 1.8;">
                        Saat ini saya aktif mengeksplorasi ekosistem <strong class="text-white">Home Server</strong> menggunakan Proxmox dan Ubuntu. Saya percaya bahwa pemahaman mendalam tentang infrastruktur akan sangat membantu dalam membangun aplikasi web yang efisien dan *scalable*.
                    </p>
                </div>
            </div>

            <div class="col-md-5" data-aos="fade-left">
                <div class="content-card h-100 p-4">
                    <h5 class="fw-bold mb-4 text-white"><i class="bi bi-cpu me-2 text-info"></i>Tech Stack</h5>
                    <div class="mb-4">
                        <div class="info-label mb-2">Development</div>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-badge">Laravel</span>
                            <span class="skill-badge">Python</span>
                            <span class="skill-badge">C++</span>
                        </div>
                    </div>
                    <div>
                        <div class="info-label mb-2">Infrastruktur</div>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-badge">Ubuntu Server</span>
                            <span class="skill-badge">Proxmox</span>
                            <span class="skill-badge">CasaOS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="chill-nav">
        <a href="/home" class="nav-item {{ request()->is('home') ? 'active' : '' }}">Home</a>
        <a href="/about" class="nav-item {{ request()->is('about') ? 'active' : '' }}">About</a>
        <a href="/dashboard" class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="/projects" class="nav-item {{ request()->is('projects') ? 'active' : '' }}">Project</a>
        <a href="/kontak" class="nav-item {{ request()->is('kontak') ? 'active' : '' }}">Contact</a>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({ duration: 1000 }); </script>
</body>
</html>