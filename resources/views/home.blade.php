<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda | Rahmad Alvian</title>
    
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
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(112, 0, 255, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(0, 242, 255, 0.05) 0%, transparent 40%);
            color: var(--text-body);
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding-bottom: 120px;
        }

        .text-neon {
            background: linear-gradient(to right, var(--accent-cyan), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        .lofi-card {
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: 0.3s;
        }

        .lofi-card:hover {
            border-color: var(--accent-cyan);
            transform: translateY(-5px);
        }

        .profile-container { position: relative; z-index: 1; }
        .profile-container::after {
            content: ""; position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%); width: 300px; height: 300px;
            background: var(--accent-purple); filter: blur(80px); opacity: 0.3; z-index: -1;
        }

        .profile-img {
            border: 4px solid rgba(255, 255, 255, 0.1);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morph 6s ease-in-out infinite;
        }

        @keyframes morph {
            0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { border-radius: 50% 50% 30% 70% / 50% 30% 70% 50%; }
            100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        }

        .btn-neon {
            background: linear-gradient(45deg, var(--accent-cyan), var(--accent-purple));
            border: none; color: white; font-weight: 700;
            padding: 12px 30px; border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 242, 255, 0.3); transition: 0.3s;
        }

        /* --- NAVIGASI FLOAT FIX --- */
        .chill-nav {
            position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%);
            background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);
            padding: 6px; border-radius: 20px; display: flex; gap: 4px; z-index: 9999;
            border: 1px solid rgba(255, 255, 255, 0.1); width: auto; max-width: 95%; white-space: nowrap;
        }
        .nav-item {
            color: #64748b; padding: 10px 16px; text-decoration: none; 
            font-weight: 700; font-size: 0.85rem; border-radius: 15px; transition: 0.3s;
        }
        .nav-item.active { background: #ffffff; color: #000000 !important; box-shadow: 0 0 15px rgba(255, 255, 255, 0.3); }
    </style>
</head>
<body>

    <div class="container pt-5 mt-lg-5" style="max-width: 1000px;">
        <div class="row align-items-center g-5 min-vh-75">
            <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-right">
                <h1 class="display-3 fw-bolder mb-3">
                    Halo, Saya <span class="text-neon">Rahmad!</span>
                </h1>
                <p class="fs-5 mb-4 text-white-50" style="line-height: 1.6;">
                    Mahasiswa Teknik Informatika yang berfokus pada <span class="text-info">Backend Development</span> dan pengelolaan <span class="text-warning">Linux Server</span>. 
                    Membangun sistem yang efisien adalah prioritas saya.
                </p>
                <div class="d-flex gap-3 mb-5">
                    <a href="/about" class="btn-neon text-decoration-none">Profil Saya</a>
                    <a href="/projects" class="btn btn-outline-light px-4 py-2 border-secondary rounded-3 text-decoration-none">Projects Saya</a>
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="lofi-card p-3 d-flex align-items-center gap-3">
                            <i class="bi bi-code-slash fs-3 text-info"></i>
                            <span class="small fw-bold text-white">Web Development</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="lofi-card p-3 d-flex align-items-center gap-3">
                            <i class="bi bi-cpu fs-3 text-purple" style="color: var(--accent-purple);"></i>
                            <span class="small fw-bold text-white">Server Management</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center" data-aos="zoom-in">
                <div class="profile-container">
                    <img src="{{ asset('img/foto-profil.png') }}" class="img-fluid profile-img" style="width: 320px; height: 320px; object-fit: cover;" alt="Rahmad Alvian">
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