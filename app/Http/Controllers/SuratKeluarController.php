<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutcomingLetter;

class SuratKeluarController extends Controller
{
    public function index() {
        $suratKeluar = OutcomingLetter::all();
        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show($id) {
        $surat = OutcomingLetter::findOrFail($id);
        return view('surat-keluar.show', compact('surat'));
    }
}