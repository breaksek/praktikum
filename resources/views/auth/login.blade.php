<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login SIM-Surat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center bg-slate-100 px-4 py-8">

    <div class="w-full max-w-md">

        {{-- BRAND --}}
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20 mb-4">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5v12.5H3.75z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m4 7 8 6 8-6"
                    />
                </svg>
            </div>

            <h1 class="text-2xl font-bold text-[#172554]">
                SIM-Surat
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Sistem Informasi Surat
            </p>
        </div>

        {{-- LOGIN CARD --}}
        <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/70 border border-slate-200 p-6 sm:p-8">

            <div class="mb-6">
                <h2 class="text-xl font-bold text-slate-800">
                    Selamat Datang
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Silakan masuk menggunakan akun Anda.
                </p>
            </div>

            <form method="POST" action="{{ route('login.submit') }}" class="space-y-5">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <label
                        for="email"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        autocomplete="email"
                        class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div>
                    <label
                        for="password"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- SUBMIT --}}
                <button
                    type="submit"
                    class="w-full rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition duration-200 hover:bg-blue-700 hover:shadow-blue-700/20 focus:outline-none focus:ring-4 focus:ring-blue-500/20"
                >
                    Masuk ke Aplikasi
                </button>

            </form>

        </div>

        {{-- FOOTER --}}
        <p class="text-center text-xs text-slate-400 mt-6">
            &copy; {{ date('Y') }} SIM-Surat. Seluruh hak cipta dilindungi.
        </p>

    </div>

</body>
</html>