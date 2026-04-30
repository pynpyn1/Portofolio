<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Rahmad Alvian</title>
    
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
            padding-bottom: 140px;
        }

        .text-neon {
            background: linear-gradient(to right, var(--accent-cyan), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        .stat-card {
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            transition: 0.3s;
            height: 100%;
        }

        .stat-card:hover {
            border-color: var(--accent-cyan);
            box-shadow: 0 0 25px rgba(0, 242, 255, 0.1);
            transform: translateY(-5px);
        }

        .github-stats img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        /* --- NAVIGASI FLOAT FIX (ANTI MONCRAT) --- */
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
        
        .nav-item:hover { color: #fff; background: rgba(255, 255, 255, 0.05); }
        
        .nav-item.active { 
            background: #ffffff; color: #000000 !important; box-shadow: 0 0 15px rgba(255, 255, 255, 0.3); 
        }

        @media (max-width: 500px) {
            .nav-item { padding: 8px 10px; font-size: 0.75rem; }
        }
    </style>
</head>
<body>

    <div class="container pt-5 mt-lg-4" style="max-width: 1000px;">
        <div class="text-center mb-5" data-aos="fade-down">
            <h1 class="fw-bold display-5">Personal <span class="text-neon">Dashboard</span></h1>
            <p class="text-white-50">Monitoring aktivitas koding dan produktivitas secara publik.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="stat-card github-stats">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold text-white mb-0"><i class="bi bi-github me-2"></i>GitHub Activity</h4>
                        <a href="https://github.com/pynpyn1" target="_blank" class="btn btn-sm btn-outline-info rounded-pill px-3">View Profile</a>
                    </div>
                    
                    <img src="https://github-readme-streak-stats.herokuapp.com/?user=pynpyn1&theme=tokyonight&hide_border=true&background=0D111700" alt="GitHub Streak">
                    
                    <img src="https://github-readme-stats.vercel.app/api?username=pynpyn1&show_icons=true&theme=tokyonight&hide_border=true&bg_color=0D111700" alt="GitHub Stats">
                    
                    <img src="https://github-readme-stats.vercel.app/api/top-langs/?username=pynpyn1&layout=compact&theme=tokyonight&hide_border=true&bg_color=0D111700" alt="Top Languages">
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left">
                <div class="stat-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold text-white mb-0"><i class="bi bi-keyboard me-2"></i>Monkeytype</h4>
                        <a href="https://monkeytype.com/profile/actzy_" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill px-3">Verify</a>
                    </div>

                    <div class="text-center py-4">
                        <div class="mb-4">
                            <span class="text-white-50 small text-uppercase tracking-widest">Personal Best (15s)</span>
                            <div class="display-1 fw-bold text-neon">95</div>
                            <div class="text-info font-monospace">Words Per Minute</div>
                        </div>

                        <div class="row g-0 border-top border-secondary border-opacity-25 pt-4">
                            <div class="col-6 border-end border-secondary border-opacity-25">
                                <div class="h3 fw-bold text-white mb-0">98%</div>
                                <div class="small text-white-50">Accuracy</div>
                            </div>
                            <div class="col-6">
                                <div class="h3 fw-bold text-white mb-0">218</div>
                                <div class="small text-white-50">Tests Taken</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 p-3 rounded-lg bg-black bg-opacity-25 border border-secondary border-opacity-10">
                        <p class="small mb-0 text-white-50 italic">"Ngetik cepet kaga guna kalo kodingannya error terus"</p>
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
    <script> AOS.init({ duration: 1000, once: true }); </script>
</body>
</html>