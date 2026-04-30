<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'CPanel Alvian' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#1e1e2e',
                        light: '#f4f4f5',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-light font-sans antialiased text-gray-900">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-[90rem] mx-auto px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="text-2xl font-bold text-dark">Alvian <span class="text-blue-600">Cloud</span></span>
                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-0.5 rounded-full font-medium">v1.0</span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium">Hello, Rahmad!</span>
                    <button class="bg-gray-100 p-2 rounded-full hover:bg-gray-200">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>
                </div>
            </div>
        </header>

        <div class="flex-1 flex max-w-[90rem] mx-auto w-full px-6 py-8">
            <aside class="w-72 pr-10">
                <nav class="space-y-2">
                    <a href="{{ route('dashboard.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg {{ request()->routeIs('dashboard.index') ? 'bg-blue-600 text-white font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Dashboard
                    </a>
                    <div class="py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider px-4">Portofolio</div>
                    <a href="{{ route('projects.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg {{ request()->routeIs('projects.*') ? 'bg-blue-600 text-white font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        Kelola Projects
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Pesan Kontak
                    </a>
                    <div class="py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider px-4">Integrasi</div>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        Monkeytype API
                    </a>
                </nav>
            </aside>

            <main class="flex-1 bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6" role="alert">
                        <strong class="font-bold">SUKSES, ANJENG!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>