<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Project | Rahmad Cloud</title>
    
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

        .top-nav {
            background: rgba(13, 17, 23, 0.6);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-glass);
            padding: 1rem 0;
            margin-bottom: 2.5rem;
        }

        .text-neon {
            background: linear-gradient(to right, var(--accent-cyan), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        .glass-panel {
            background: var(--bg-card);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border-glass);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #8b949e;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border-glass);
            border-radius: 12px;
            padding: 12px 16px;
            color: #fff;
            transition: 0.3s;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.07);
            border-color: var(--accent-cyan);
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.15);
            color: #fff;
            outline: none;
        }

        .current-img-wrapper {
            background: rgba(255, 255, 255, 0.02);
            border: 1px dashed var(--border-glass);
            border-radius: 12px;
            padding: 10px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .btn-update {
            background: linear-gradient(45deg, #00f2ff, #7000ff);
            border: none; color: white; font-weight: 700;
            padding: 14px 28px; border-radius: 14px; transition: 0.3s;
            text-transform: uppercase; letter-spacing: 1px; width: 100%;
        }

        .btn-update:hover {
            box-shadow: 0 0 25px rgba(0, 242, 255, 0.4);
            transform: translateY(-2px);
            color: #fff;
        }

        .btn-cancel {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--border-glass);
            color: #8b949e;
            padding: 14px 28px; border-radius: 14px;
            text-decoration: none; text-align: center;
            font-weight: 600; transition: 0.3s;
        }
        .btn-cancel:hover { background: rgba(255, 255, 255, 0.1); color: #fff; }

        input[type="file"]::file-selector-button {
            background: rgba(255, 255, 255, 0.1);
            border: none; border-radius: 6px; color: #fff;
            padding: 4px 12px; margin-right: 15px; cursor: pointer;
        }
    </style>
</head>
<body>

<nav class="top-nav">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="/admin/projects" class="text-decoration-none">
            <h4 class="mb-0 text-neon">DASHBOARD ADMIN</h4>
        </a>
        <a href="/admin/projects" class="text-white-50 text-decoration-none small">
            <i class="bi bi-arrow-left me-1"></i> Back to List
        </a>
    </div>
</nav>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-white mb-1">Update Project</h2>
                <p class="text-white-50">Silakan sesuaikan detail project lu yang perlu diubah.</p>
            </div>

            <div class="glass-panel">
                <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label"><i class="bi bi-type text-info"></i> Project Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label"><i class="bi bi-justify-left text-info"></i> Full Description</label>
                            <textarea name="description" rows="5" class="form-control" required>{{ $project->description }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label"><i class="bi bi-link-45deg text-info"></i> Project URL</label>
                            <input type="url" name="link" class="form-control" value="{{ $project->link }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label"><i class="bi bi-stack text-info"></i> Tech Stack</label>
                            <input type="text" name="tech_stack" class="form-control" value="{{ $project->tech_stack }}" placeholder="Contoh: Laravel, Python">
                        </div>

                        <div class="col-12">
                            <label class="form-label"><i class="bi bi-image text-info"></i> Change Thumbnail (Optional)</label>
                            @if($project->image)
                                <div class="current-img-wrapper d-block">
                                    <img src="{{ asset('storage/' . $project->image) }}" style="height: 60px; border-radius: 8px;" class="me-2">
                                    <small class="text-white-50">Current: {{ basename($project->image) }}</small>
                                </div>
                            @endif
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>

                        <div class="col-12 mt-5">
                            <div class="row g-3">
                                <div class="col-md-8">
                                    <button type="submit" class="btn-update">
                                        <i class="bi bi-check-circle me-2"></i> Save Changes
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <a href="/admin/projects" class="btn-cancel d-block text-decoration-none">
                                        Discard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>