@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')

<div class="max-w-4xl mx-auto space-y-6">

    {{-- PAGE HEADER --}}
    <div>
        <p class="text-sm font-medium text-blue-600 mb-1">
            MANAJEMEN SURAT
        </p>

        <h1 class="text-2xl sm:text-3xl font-bold text-[#172554]">
            Detail Surat Keluar
        </h1>

        <p class="text-sm text-slate-500 mt-2">
            Informasi lengkap mengenai surat keluar yang dipilih.
        </p>
    </div>

    {{-- DETAIL CARD --}}
    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">

        <div class="px-6 py-5 border-b border-slate-200">
            <h2 class="font-bold text-slate-800">
                Informasi Surat
            </h2>

            <p class="text-sm text-slate-500 mt-1">
                Rincian data surat keluar.
            </p>
        </div>

        <div class="p-6 space-y-5">

            {{-- NOMOR SURAT --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4">
                <p class="text-sm font-semibold text-slate-500">
                    Nomor Surat
                </p>

                <p class="text-sm font-medium text-slate-800 sm:col-span-2">
                    {{ $surat->nomor_surat }}
                </p>
            </div>

            <div class="border-t border-slate-100"></div>

            {{-- TANGGAL --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4">
                <p class="text-sm font-semibold text-slate-500">
                    Tanggal
                </p>

                <p class="text-sm font-medium text-slate-800 sm:col-span-2">
                    {{ $surat->tanggal }}
                </p>
            </div>

            <div class="border-t border-slate-100"></div>

            {{-- PENGIRIM --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4">
                <p class="text-sm font-semibold text-slate-500">
                    Pengirim
                </p>

                <p class="text-sm font-medium text-slate-800 sm:col-span-2">
                    {{ $surat->pengirim }}
                </p>
            </div>

            <div class="border-t border-slate-100"></div>

            {{-- PERIHAL --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4">
                <p class="text-sm font-semibold text-slate-500">
                    Perihal
                </p>

                <p class="text-sm font-medium text-slate-800 sm:col-span-2">
                    {{ $surat->perihal }}
                </p>
            </div>

            <div class="border-t border-slate-100"></div>

            {{-- KETERANGAN --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4">
                <p class="text-sm font-semibold text-slate-500">
                    Keterangan
                </p>

                <p class="text-sm text-slate-700 sm:col-span-2 whitespace-pre-line">
                    {{ $surat->keterangan }}
                </p>
            </div>

        </div>

        {{-- CARD FOOTER --}}
        <div class="px-6 py-5 bg-slate-50 border-t border-slate-200">
            <a
                href="{{ route('surat-keluar.index') }}"
                class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 hover:bg-blue-700 transition"
            >
                Kembali ke Daftar Surat
            </a>
        </div>

    </div>

</div>

@endsection