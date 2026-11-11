<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Informasi Surat')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-slate-50 text-slate-800">

    {{-- HEADER --}}
    <header class="bg-[#172554] text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- BRAND --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-5 gap-4">

                <div>
                    <h1 class="text-xl sm:text-2xl font-bold tracking-tight">
                        Sistem Informasi Surat
                    </h1>

                    <p class="text-sm text-blue-200 mt-1">
                        Pengelolaan Surat Masuk dan Surat Keluar
                    </p>
                </div>

                @auth
                    <div class="flex items-center gap-3">
                        <div class="hidden sm:block text-right">
                            <p class="text-xs text-blue-200">
                                Masuk sebagai
                            </p>

                            <p class="text-sm font-semibold">
                                {{ auth()->user()->name }}
                            </p>
                        </div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button
                                type="submit"
                                class="px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 border border-white/20 text-sm font-semibold transition duration-200"
                            >
                                Keluar
                            </button>
                        </form>
                    </div>
                @endauth

            </div>

            {{-- NAVIGATION --}}
            <nav class="flex flex-wrap items-center gap-2 pb-4">

                <a
                    href="{{ route('dashboard') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-blue-100 hover:bg-white/10 hover:text-white transition duration-200"
                >
                    Dashboard
                </a>

                <a
                    href="{{ route('surat-masuk.index') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-blue-100 hover:bg-white/10 hover:text-white transition duration-200"
                >
                    Surat Masuk
                </a>

                <a
                    href="{{ route('surat-keluar.index') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-blue-100 hover:bg-white/10 hover:text-white transition duration-200"
                >
                    Surat Keluar
                </a>

            </nav>

        </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        @yield('content')

    </main>

    {{-- FOOTER --}}
    <footer class="mt-auto border-t border-slate-200 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

            <p class="text-center text-sm text-slate-500">
                &copy; {{ date('Y') }} Sistem Informasi Surat.
                Seluruh hak cipta dilindungi.
            </p>

        </div>
    </footer>

</body>
</html>