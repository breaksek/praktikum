@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-8">

    {{-- PAGE HEADER --}}
    <div>
        <p class="text-sm font-medium text-blue-600 mb-2">
            HALAMAN UTAMA
        </p>

        <h1 class="text-2xl sm:text-3xl font-bold text-[#172554]">
            Dashboard
        </h1>

        <p class="text-slate-500 mt-2">
            Selamat datang di Sistem Informasi Surat.
            Kelola administrasi surat dengan lebih mudah dan terorganisir.
        </p>
    </div>

    {{-- WELCOME CARD --}}
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#172554] to-blue-700 p-6 sm:p-8 text-white shadow-lg">
        <div class="relative z-10 max-w-2xl">
            <p class="text-blue-200 text-sm font-medium mb-2">
                SISTEM INFORMASI SURAT
            </p>

            <h2 class="text-2xl sm:text-3xl font-bold">
                Selamat Datang!
            </h2>

            <p class="text-blue-100 mt-3 leading-relaxed">
                Gunakan sistem ini untuk mengelola data surat masuk
                dan surat keluar secara terpusat.
            </p>
        </div>

        <div class="absolute -right-10 -bottom-20 w-64 h-64 rounded-full bg-white/10"></div>
        <div class="absolute right-20 -top-20 w-40 h-40 rounded-full bg-white/5"></div>
    </div>

    {{-- MENU CARDS --}}
    <div>
        <h2 class="text-lg font-bold text-slate-800 mb-4">
            Menu Utama
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            {{-- SURAT MASUK --}}
            <a
                href="{{ route('surat-masuk.index') }}"
                class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-lg hover:border-blue-300 transition duration-200"
            >
                <div class="flex items-start justify-between">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5v12.5H3.75z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6" />
                        </svg>
                    </div>

                    <span class="text-blue-600 group-hover:translate-x-1 transition">
                        &rarr;
                    </span>
                </div>

                <h3 class="text-lg font-bold text-slate-800 mt-5">
                    Surat Masuk
                </h3>

                <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                    Lihat dan kelola seluruh data surat yang masuk.
                </p>

                <p class="text-sm font-semibold text-blue-600 mt-5">
                    Buka Surat Masuk
                </p>
            </a>

            {{-- SURAT KELUAR --}}
            <a
                href="{{ route('surat-keluar.index') }}"
                class="group bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-lg hover:border-blue-300 transition duration-200"
            >
                <div class="flex items-start justify-between">
                    <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5v12.5H3.75z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 13V3m-4 4 4-4 4 4" />
                        </svg>
                    </div>

                    <span class="text-indigo-600 group-hover:translate-x-1 transition">
                        &rarr;
                    </span>
                </div>

                <h3 class="text-lg font-bold text-slate-800 mt-5">
                    Surat Keluar
                </h3>

                <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                    Lihat dan kelola seluruh data surat yang keluar.
                </p>

                <p class="text-sm font-semibold text-indigo-600 mt-5">
                    Buka Surat Keluar
                </p>
            </a>

        </div>
    </div>

</div>

@endsection