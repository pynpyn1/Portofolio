<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects | Rahmad Alvian</title>
    
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
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .lofi-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-cyan);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.2);
        }

        .project-img-wrapper {
            width: 100%; height: 200px;
            overflow: hidden; border-radius: 15px;
            margin-bottom: 15px;
            background: #111;
        }
        .project-img-wrapper img {
            width: 100%; height: 100%; object-fit: cover;
            transition: 0.5s ease;
        }
        .lofi-card:hover .project-img-wrapper img { transform: scale(1.1); }

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
        .nav-item.active { background: #ffffff; color: #000000 !important; box-shadow: 0 0 15px rgba(255, 255, 255, 0.3); }

        @media (max-width: 500px) {
            .nav-item { padding: 8px 10px; font-size: 0.75rem; }
        }
    </style>
</head>
<body>

    <div class="container pt-5 mt-lg-4" style="max-width: 1000px;">
        <div class="mb-5 text-center text-md-start" data-aos="fade-down">
            <h2 class="fw-bold display-6">Project<span class="text-neon">Saya</span></h2>
            <p class="text-white-50">Ini adalah project yang selama ini telah saya kerjakan.</p>
        </div>

        <div class="row g-4">
            @forelse($projects as $project)
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="lofi-card p-3">
                    <div class="project-img-wrapper">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                        @else
                            <div class="w-100 h-100 d-flex align-items-center justify-content-center bg-secondary opacity-25">
                                <i class="bi bi-code-square fs-1"></i>
                            </div>
                        @endif
                    </div>
                    <div class="px-2 pb-2 flex-grow-1">
                        <h5 class="fw-bold text-white mb-2">{{ $project->title }}</h5>
                        <p class="small text-white-50 mb-3" style="min-height: 45px;">{{ Str::limit($project->description, 90) }}</p>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-auto px-2">
                        @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="text-decoration-none text-info font-bold small">
                                LIHAT DETAIL <i class="bi bi-arrow-right"></i>
                            </a>
                        @else
                            <span class="small text-white-50 opacity-25">STAY TUNED</span>
                        @endif

                        <span class="badge bg-white bg-opacity-10 text-white-50" style="font-size: 10px;">
                            {{ $project->tech_stack ?? 'Web' }}
                        </span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="stat-card p-5">
                    <i class="bi bi-folder2-open display-1 text-white-50 mb-3"></i>
                    <p class="text-white-50">Belum ada project yang dipublikasikan.</p>
                </div>
            </div>
            @endforelse
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