<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin | Rahmad Alvian</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        :root {
            --bg-body: #050816;
            --bg-card: rgba(17, 25, 40, 0.75);
            --accent-cyan: #00f2ff;
            --accent-purple: #7000ff;
        }

        body {
            background-color: var(--bg-body);
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(112, 0, 255, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(0, 242, 255, 0.1) 0%, transparent 40%);
            font-family: 'Plus Jakarta Sans', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            color: #fff;
        }

        .login-card {
            background: var(--bg-card);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 28px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .text-neon {
            background: linear-gradient(to right, var(--accent-cyan), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 12px 15px;
            color: #fff;
            transition: 0.3s;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--accent-cyan);
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.2);
            color: #fff;
        }

        .btn-login {
            background: linear-gradient(45deg, var(--accent-cyan), var(--accent-purple));
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 700;
            color: #fff;
            width: 100%;
            margin-top: 1rem;
            transition: 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 242, 255, 0.4);
            opacity: 0.9;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            border-radius: 12px 0 0 12px;
        }

        .form-control {
            border-radius: 0 12px 12px 0;
        }

        .back-link {
            text-decoration: none;
            color: #64748b;
            font-size: 0.85rem;
            transition: 0.3s;
        }

        .back-link:hover {
            color: var(--accent-cyan);
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="text-center mb-5">
            <h2 class="text-neon mb-2">Admin Panel</h2>
            <p class="text-white-50 small">Silakan login untuk mengelola project.</p>
        </div>

        @if(session()->has('loginError'))
            <div class="alert alert-danger bg-danger bg-opacity-10 border-danger border-opacity-25 text-danger small mb-4" role="alert">
                <i class="bi bi-exclamation-circle me-2"></i> {{ session('loginError') }}
            </div>
        @endif

        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label small text-white-50">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label small text-white-50">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
            </div>

            <button type="submit" class="btn-login">Masuk Sekarang</button>
        </form>

        <div class="text-center mt-4">
            <a href="/home" class="back-link"><i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>