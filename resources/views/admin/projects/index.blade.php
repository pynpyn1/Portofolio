<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management | Rahmad Cloud</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        :root {
            --bg-body: #02040a;
            --bg-card: rgba(13, 17, 23, 0.8);
            --accent-cyan: #00f2ff;
            --accent-purple: #7000ff;
            --border-glass: rgba(255, 255, 255, 0.08);
        }

        body {
            background-color: var(--bg-body);
            color: #e6edf3;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image: 
                radial-gradient(circle at top right, rgba(112, 0, 255, 0.1), transparent 400px),
                radial-gradient(circle at bottom left, rgba(0, 242, 255, 0.05), transparent 400px);
            min-height: 100vh;
        }

        /* --- SIDEBAR-LIKE TOP NAV --- */
        .top-nav {
            background: rgba(13, 17, 23, 0.6);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-glass);
            padding: 1rem 0;
            margin-bottom: 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .text-neon {
            background: linear-gradient(to right, var(--accent-cyan), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
            letter-spacing: -1px;
        }

        /* --- GLASS CARD --- */
        .glass-panel {
            background: var(--bg-card);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-glass);
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        /* --- CUSTOM TABLE --- */
        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .custom-table thead th {
            background: transparent;
            border: none;
            color: #8b949e;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 20px;
        }

        .custom-table tbody tr {
            background: rgba(255, 255, 255, 0.02);
            transition: 0.2s;
        }

        .custom-table tbody tr:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: scale(1.005);
        }

        .custom-table td {
            padding: 15px 20px;
            border-top: 1px solid var(--border-glass);
            border-bottom: 1px solid var(--border-glass);
            vertical-align: middle;
        }

        .custom-table td:first-child { border-left: 1px solid var(--border-glass); border-radius: 12px 0 0 12px; }
        .custom-table td:last-child { border-right: 1px solid var(--border-glass); border-radius: 0 12px 12px 0; }

        /* --- COMPONENTS --- */
        .img-preview {
            width: 60px; height: 40px;
            object-fit: cover; border-radius: 6px;
            border: 1px solid var(--border-glass);
        }

        .badge-link {
            background: rgba(0, 242, 255, 0.1);
            color: var(--accent-cyan);
            font-size: 0.7rem;
            padding: 4px 10px;
            border-radius: 6px;
            text-decoration: none;
            border: 1px solid rgba(0, 242, 255, 0.2);
        }

        .btn-neon-sm {
            background: linear-gradient(45deg, var(--accent-cyan), var(--accent-purple));
            border: none; color: white; font-weight: 700; font-size: 0.8rem;
            padding: 8px 20px; border-radius: 10px; transition: 0.3s;
        }

        .btn-neon-sm:hover { box-shadow: 0 0 15px rgba(0, 242, 255, 0.4); transform: translateY(-1px); color: #fff;}

        .action-icon {
            color: #8b949e; font-size: 1.1rem; transition: 0.2s;
            background: none; border: none; padding: 5px;
        }
        .action-icon:hover { color: #fff; }
        .icon-edit:hover { color: #e3b341; }
        .icon-delete:hover { color: #f85149; }
    </style>
</head>
<body>

<nav class="top-nav">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="/admin/dashboard" class="text-decoration-none">
            <h4 class="mb-0 text-neon">DASHBOARD ADMIN</h4>
        </a>
        <div class="d-flex align-items-center gap-3">
            <span class="small text-white-50 d-none d-md-block">Admin: <strong>Alvian</strong></span>
            <form action="/logout" method="POST" class="m-0">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h2 class="fw-bold mb-0 text-white">Project Library</h2>
            <p class="text-white-50 mb-0">Kelola semua portofolio yang tampil di halaman depan.</p>
        </div>
        <a href="{{ route('projects.create') }}" class="btn btn-neon-sm">
            <i class="bi bi-plus-lg me-1"></i> ADD NEW PROJECT
        </a>
    </div>

    <div class="glass-panel">
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Preview</th>
                        <th>Project Info</th>
                        <th class="d-none d-md-table-cell">Description</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                    <tr>
                        <td style="width: 80px;">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" class="img-preview">
                            @else
                                <div class="img-preview bg-dark d-flex align-items-center justify-content-center">
                                    <i class="bi bi-code-square text-white-50"></i>
                                </div>
                            @endif
                        </td>
                        <td style="width: 250px;">
                            <div class="fw-bold text-white mb-1">{{ $project->title }}</div>
                            @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="badge-link">
                                    <i class="bi bi-link-45deg"></i> Live Preview
                                </a>
                            @else
                                <span class="text-white-50 small">No Link</span>
                            @endif
                        </td>
                        <td class="d-none d-md-table-cell">
                            <div class="text-white-50 small" style="max-width: 350px;">
                                {{ Str::limit($project->description, 80) }}
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="d-flex justify-content-end gap-1">
                                <a href="{{ route('projects.edit', $project->id) }}" class="action-icon icon-edit" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Hapus data ini, Bree?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-icon icon-delete" title="Delete">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5">
                            <div class="text-white-50">Data masih kosong. Mulai dengan membuat project baru!</div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>