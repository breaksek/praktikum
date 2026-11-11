@extends('layouts.app')

@section('title', 'Daftar Surat Keluar')

@section('content')

<div class="space-y-6">

    {{-- PAGE HEADER --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

        <div>
            <p class="text-sm font-medium text-blue-600 mb-1">
                MANAJEMEN SURAT
            </p>

            <h1 class="text-2xl sm:text-3xl font-bold text-[#172554]">
                Daftar Surat Keluar
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Kelola dan pantau seluruh data surat yang diterbitkan.
            </p>
        </div>

        @can('manage-letters')
            <a
                href="{{ route('surat-keluar.create') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 hover:bg-blue-700 transition duration-200"
            >
                <span class="text-lg leading-none">+</span>
                Tambah Surat
            </a>
        @endcan

    </div>

    {{-- SUCCESS NOTIFICATION --}}
    @if (session('success'))
        <div class="flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
            </svg>

            <p>{{ session('success') }}</p>

        </div>
    @endif

    {{-- TABLE CARD --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- CARD HEADER --}}
        <div class="border-b border-slate-200 px-5 py-4 sm:px-6">

            <h2 class="text-base font-bold text-slate-800">
                Data Surat Keluar
            </h2>

            <p class="text-sm text-slate-500 mt-1">
                Daftar surat yang telah diterbitkan dan tercatat dalam sistem.
            </p>

        </div>

        {{-- RESPONSIVE TABLE --}}
        <div class="overflow-x-auto">

            <table class="w-full min-w-[850px] text-left text-sm">

                <thead class="bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
                    <tr>
                        <th class="px-5 py-4 font-semibold w-16">No</th>
                        <th class="px-5 py-4 font-semibold">Nomor Surat</th>
                        <th class="px-5 py-4 font-semibold">Tanggal</th>
                        <th class="px-5 py-4 font-semibold">Pengirim</th>
                        <th class="px-5 py-4 font-semibold">Perihal</th>
                        <th class="px-5 py-4 font-semibold text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">

                    @forelse ($suratKeluar as $surat)

                        <tr class="hover:bg-blue-50/40 transition duration-150">

                            <td class="px-5 py-4 text-slate-500">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-5 py-4 font-semibold text-[#172554]">
                                {{ $surat->nomor_surat }}
                            </td>

                            <td class="px-5 py-4 text-slate-600 whitespace-nowrap">
                                {{ $surat->tanggal }}
                            </td>

                            <td class="px-5 py-4 text-slate-700">
                                {{ $surat->pengirim }}
                            </td>

                            <td class="px-5 py-4 text-slate-600">
                                {{ $surat->perihal }}
                            </td>

                            <td class="px-5 py-4">

                                <div class="flex items-center justify-center gap-2">

                                    <a
                                        href="{{ route('surat-keluar.show', $surat->id) }}"
                                        class="inline-flex items-center rounded-lg bg-blue-50 px-3 py-2 text-xs font-semibold text-blue-700 hover:bg-blue-100 transition"
                                    >
                                        Detail
                                    </a>

                                    @can('manage-letters')

                                        <a
                                            href="{{ route('surat-keluar.edit', $surat->id) }}"
                                            class="inline-flex items-center rounded-lg bg-amber-50 px-3 py-2 text-xs font-semibold text-amber-700 hover:bg-amber-100 transition"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('surat-keluar.destroy', $surat->id) }}"
                                            method="POST"
                                            class="inline"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                onclick="return confirm('Hapus surat ini?')"
                                                class="inline-flex items-center rounded-lg bg-red-50 px-3 py-2 text-xs font-semibold text-red-700 hover:bg-red-100 transition"
                                            >
                                                Hapus
                                            </button>
                                        </form>

                                    @endcan

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="px-5 py-12 text-center">

                                <div class="flex flex-col items-center">

                                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-400 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5v12.5H3.75z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 13V3m-4 4 4-4 4 4" />
                                        </svg>
                                    </div>

                                    <p class="font-semibold text-slate-700">
                                        Belum ada surat keluar
                                    </p>

                                    <p class="text-sm text-slate-500 mt-1">
                                        Data surat keluar belum tersedia.
                                    </p>

                                </div>

                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection