<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak | Rahmad Alvian</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            /* --- TEMA: DEEP NAVY & SKY BLUE --- */
            --bg-body: #0f172a;       /* Navy Gelap */
            --bg-card: #1e293b;       /* Navy Medium */
            
            --accent-color: #38bdf8;  /* Sky Blue (Biru Langit) */
            
            --text-main: #ffffff;     /* Putih Murni */
            --text-body: #f1f5f9;     /* Putih Tulang (Sangat Terang) */
            --text-dim: #94a3b8;      /* Abu Kebiruan */
        }

        body { 
            background-color: var(--bg-body); 
            color: var(--text-body); 
            font-family: 'Quicksand', sans-serif; 
            padding-bottom: 120px; 
        }

        h1, h2, h3, h4, h5 { color: var(--text-main); }

        /* Tombol Kontak Besar */
        .contact-btn {
            display: flex; align-items: center; text-decoration: none; 
            color: var(--text-main);
            background-color: var(--bg-card); 
            border-radius: 25px; 
            padding: 1.5rem;
            transition: all 0.3s ease; 
            border: 1px solid rgba(255, 255, 255, 0.1); /* Border tipis */
        }

        .contact-btn:hover {
            transform: scale(1.02); 
            background-color: rgba(30, 41, 59, 0.8);
            border-color: var(--accent-color);
            box-shadow: 0 0 20px rgba(56, 189, 248, 0.2); /* Glow Biru */
        }

        /* Navigasi */
        .nav-chill { 
            position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%); 
            background: rgba(30, 41, 59, 0.95); 
            backdrop-filter: blur(10px);
            padding: 10px 20px; border-radius: 50px; 
            display: flex; gap: 15px; z-index: 1000; 
            box-shadow: 0 10px 40px rgba(0,0,0,0.5); 
            border: 1px solid rgba(255,255,255,0.1); 
        }
        .nav-item { 
            color: var(--text-dim); padding: 10px 15px; text-decoration: none; 
            font-weight: 700; border-radius: 20px; transition: 0.3s; 
        }
        .nav-item:hover, .nav-item.active { 
            color: var(--accent-color); 
            background: rgba(56, 189, 248, 0.15); 
            text-shadow: 0 0 10px rgba(56, 189, 248, 0.4);
        }

        /* Helper Text Colors */
        .text-accent { color: var(--accent-color) !important; }
        .text-bright { color: var(--text-body) !important; }
    </style>
</head>
<body>

    <div class="container d-flex flex-column justify-content-center" style="min-height: 80vh; max-width: 600px;">
        
        <div class="text-center mb-5" data-aos="zoom-in">
            <h1 class="display-4 fw-bold text-white">Contact!</h1>
            <p class="text-bright fs-5">Mau tanya soal server atau sekadar sapa? <br>Silakan kontak saya di sini.</p>
        </div>

        <!-- email -->
        <div class="d-grid gap-3">
            <a href="mailto:rahmadalvin54@gmail.com" class="contact-btn" data-aos="fade-up">
                <div class="bg-white text-dark rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px;">
                    <i class="bi bi-envelope-fill fs-5"></i>
                </div>
                <div>
                    <h5 class="fw-bold mb-0 text-white">Email Saya</h5>
                    <div class="small text-accent">rahmadalvin54@gmail.com</div>
                </div>
                <i class="bi bi-arrow-right ms-auto fs-4 text-dim"></i>
            </a>

            <!-- discord -->
            <div class="contact-btn" style="cursor: default;" data-aos="fade-up" data-aos-delay="100">
                <div class="rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px; background-color: #5865F2; color: white;">
                    <i class="bi bi-discord fs-5"></i> 
                </div>
                <div>
                    <h5 class="fw-bold mb-0 text-white">Discord</h5>
                    <div class="small text-bright">Username: <strong>actzy_</strong></div>
                </div>
                <span class="ms-auto badge bg-success bg-opacity-25 text-success border border-success border-opacity-25 rounded-pill px-3">Online</span>
            </div>

            <!-- campus -->
            <div class="contact-btn" style="cursor: default;" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-secondary bg-opacity-25 text-white rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px;">
                    <i class="bi bi-geo-alt-fill fs-5"></i>
                </div>
                <div>
                    <h5 class="fw-bold mb-0 text-white">Kampus</h5>
                    <div class="small text-bright">Universitas Duta Bangsa</div>
                </div>
            </div>
        </div>

    </div>

    <nav class="nav-chill">
        <a href="/home" class="nav-item"><i class="bi bi-house-door"></i></a>
        <a href="/about" class="nav-item"><i class="bi bi-person"></i></a>
        <a href="/kontak" class="nav-item active"><i class="bi bi-chat-dots"></i></a>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init(); </script>
</body>
</html>