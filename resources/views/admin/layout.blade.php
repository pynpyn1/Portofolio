<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C-Panel | Portofolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        :root {
            --bg-body: #0B1120; 
            --bg-card: rgba(30, 41, 59, 0.6); 
            --accent-primary: #14b8a6; 
            --text-main: #f8fafc;
            --text-body: #cbd5e1;
        }
        body { background-color: var(--bg-body); color: var(--text-body); font-family: 'Quicksand', sans-serif; display: flex; min-height: 100vh; }
        
        .sidebar { width: 260px; background: rgba(15, 23, 42, 0.8); border-right: 1px solid rgba(255,255,255,0.08); padding: 2rem 1.5rem; display: flex; flex-direction: column; }
        .sidebar a { color: var(--text-body); text-decoration: none; padding: 12px 20px; border-radius: 12px; margin-bottom: 10px; font-weight: 600; transition: 0.3s; }
        .sidebar a:hover, .sidebar a.active { background: rgba(20, 184, 166, 0.15); color: var(--accent-primary); }
        
        .main-content { flex-grow: 1; padding: 2rem 3rem; overflow-y: auto; }
        
        .admin-card { background: var(--bg-card); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; padding: 1.5rem; backdrop-filter: blur(16px); }
        
        /* Form Inputs */
        .form-control, .form-control:focus { background: rgba(15,23,42,0.8); border: 1px solid rgba(255,255,255,0.1); color: white; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4 class="fw-bold text-white mb-5"><i class="bi bi-terminal-dash" style="color: var(--accent-primary);"></i> C-Panel</h4>
        <a href="{{ route('dashboard.index') }}" class="{{ request()->routeIs('dashboard.*') ? 'active' : '' }}"><i class="bi bi-speedometer2 me-2"></i> Overview</a>
        <a href="{{ route('projects.index') }}" class="{{ request()->routeIs('projects.*') ? 'active' : '' }}"><i class="bi bi-folder me-2"></i> Kelola Proyek</a>
        
        <div class="mt-auto">
            <a href="/home" target="_blank"><i class="bi bi-box-arrow-up-right me-2"></i> Lihat Web</a>
        </div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>