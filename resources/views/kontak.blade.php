<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak | Rahmad Alvian</title>
    
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
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-bottom: 120px;
        }

        .contact-card {
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: 0.3s;
        }

        .contact-card:hover {
            transform: scale(1.03);
            border-color: var(--accent-cyan);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.15);
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        /* --- NAVIGASI FLOAT FIX (ANTI MONCRAT) --- */
        .chill-nav {
            position: fixed; 
            bottom: 30px; 
            left: 50%; 
            transform: translateX(-50%);
            background: rgba(15, 23, 42, 0.85); 
            backdrop-filter: blur(15px); 
            -webkit-backdrop-filter: blur(15px);
            padding: 6px; 
            border-radius: 20px; 
            display: flex; 
            gap: 4px; 
            z-index: 9999;
            border: 1px solid rgba(255, 255, 255, 0.1); 
            width: auto; 
            max-width: 95%; 
            white-space: nowrap;
        }
        
        .nav-item {
            color: #64748b; 
            padding: 10px 16px; 
            text-decoration: none; 
            font-weight: 700; 
            font-size: 0.85rem; 
            border-radius: 15px; 
            transition: 0.3s;
        }
        
        .nav-item:hover { color: #fff; background: rgba(255, 255, 255, 0.05); }
        
        .nav-item.active { 
            background: #ffffff; 
            color: #000000 !important; 
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3); 
        }

        @media (max-width: 500px) {
            .nav-item { padding: 8px 10px; font-size: 0.75rem; }
        }
    </style>
</head>
<body>

    <div class="container" style="max-width: 550px;">
        <div class="text-center mb-5" data-aos="zoom-in">
            <h1 class="fw-bold text-white mb-2">Hubungi Saya</h1>
            <p class="text-white-50">Kalian boleh tanya tentang server atau apapun itu.</p>
        </div>

        <div class="d-grid gap-3">
            <a href="mailto:rahmadalvin54@gmail.com" class="contact-card" data-aos="fade-up">
                <div class="icon-box bg-info bg-opacity-10 text-info">
                    <i class="bi bi-envelope-at"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="fw-bold text-white mb-0">Email</h6>
                    <small class="text-white-50">rahmadalvin54@gmail.com</small>
                </div>
                <i class="bi bi-chevron-right text-muted"></i>
            </a>

            <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box bg-primary bg-opacity-10 text-primary">
                    <i class="bi bi-discord"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="fw-bold text-white mb-0">Discord</h6>
                    <small class="text-white-50">Username: actzy_</small>
                </div>
                <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill px-3 py-1">Aktif</span>
            </div>

            <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box bg-danger bg-opacity-10 text-danger">
                    <i class="bi bi-building"></i>
                </div>
                <div class="flex-grow-1">
                    <h6 class="fw-bold text-white mb-0">Tempat Tinggal</h6>
                    <small class="text-white-50">Sukoharjo, Jawa Tengah</small>
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
    <script> AOS.init({ duration: 1000, once: true }); </script>
</body>
</html>