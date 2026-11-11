@extends('layouts.app')

@section('title', 'Detail Surat Masuk')

@section('content')

<div class="max-w-4xl mx-auto space-y-6">

    {{-- PAGE HEADER --}}
    <div>
        <p class="text-sm font-medium text-blue-600 mb-1">
            MANAJEMEN SURAT
        </p>

        <h1 class="text-2xl sm:text-3xl font-bold text-[#172554]">
            Detail Surat Masuk
        </h1>

        <p class="text-sm text-slate-500 mt-2">
            Informasi lengkap mengenai surat masuk yang dipilih.
        </p>
    </div>

    {{-- DETAIL CARD --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- CARD HEADER --}}
        <div class="border-b border-slate-200 bg-slate-50 px-6 py-5">
            <div class="flex items-center gap-3">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5v12.5H3.75z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6" />
                    </svg>
                </div>

                <div>
                    <h2 class="font-bold text-slate-800">
                        Informasi Surat
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Rincian data surat masuk
                    </p>
                </div>

            </div>
        </div>

        {{-- CARD CONTENT --}}
        <div class="p-6">

            <dl class="divide-y divide-slate-100">

                {{-- NOMOR SURAT --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4 py-4 first:pt-0">
                    <dt class="text-sm font-semibold text-slate-500">
                        Nomor Surat
                    </dt>

                    <dd class="sm:col-span-2 text-sm font-semibold text-[#172554] break-words">
                        {{ $surat->nomor_surat }}
                    </dd>
                </div>

                {{-- TANGGAL --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4 py-4">
                    <dt class="text-sm font-semibold text-slate-500">
                        Tanggal
                    </dt>

                    <dd class="sm:col-span-2 text-sm text-slate-800">
                        {{ $surat->tanggal }}
                    </dd>
                </div>

                {{-- PENGIRIM --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4 py-4">
                    <dt class="text-sm font-semibold text-slate-500">
                        Pengirim
                    </dt>

                    <dd class="sm:col-span-2 text-sm text-slate-800">
                        {{ $surat->pengirim }}
                    </dd>
                </div>

                {{-- PERIHAL --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4 py-4">
                    <dt class="text-sm font-semibold text-slate-500">
                        Perihal
                    </dt>

                    <dd class="sm:col-span-2 text-sm text-slate-800">
                        {{ $surat->perihal }}
                    </dd>
                </div>

                {{-- KETERANGAN --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 sm:gap-4 py-4 last:pb-0">
                    <dt class="text-sm font-semibold text-slate-500">
                        Keterangan
                    </dt>

                    <dd class="sm:col-span-2 text-sm leading-relaxed text-slate-800 whitespace-pre-line">
                        {{ $surat->keterangan }}
                    </dd>
                </div>

            </dl>

        </div>

        {{-- CARD FOOTER --}}
        <div class="border-t border-slate-200 bg-slate-50 px-6 py-5">

            <a
                href="{{ route('surat-masuk.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-100 transition"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7 7-7M3 12h18" />
                </svg>

                Kembali ke Daftar Surat
            </a>

        </div>

    </div>

</div>

@endsection