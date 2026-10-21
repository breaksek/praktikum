<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomingLetter;

class SuratMasukController extends Controller
{
    public function index() {
        $suratMasuk = IncomingLetter::all();
        return view('surat-masuk.index', compact('suratMasuk'));
        //view('surat-masuk.index' memanggil file index yang ada di folder 'surat-masuk'
    }

    public function show($id) {
        // return 'Halaman surat masuk dari controller untuk id = ' . $id ;
        $surat = IncomingLetter::findOrFail($id);
        return view('surat-masuk.show', compact('surat'));
    }
}