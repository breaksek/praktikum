<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index() {
        //return 'Halaman surat masuk dari controller';
        $suratMasuk = [
            [
                'id' => 1,
                'nomor_surat' => '001/FT/X/2026',
                'tanggal' => '05-10-2024',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
            [
                'id' => 2,
                'nomor_surat' => '002/BAA/X/2026',
                'tanggal' => '05-10-2000',
                'pengirim' => 'BAA',
                'perihal' => 'Undangan Akademik'
            ],
            [
                'id' => 3,
                'nomor_surat' => '003/LPPM/X/2026',
                'tanggal' => '05-04-2024',
                'pengirim' => 'LPPM',
                'perihal' => 'Undangan Sosialisasi'
            ]
        ];
        return view('surat-masuk.index', compact('suratMasuk'));
        //view('surat-masuk.index' memanggil file index yang ada di folder 'surat-masuk'
    }

    public function show($id) {
        return 'Halaman surat masuk dari controller untuk id = ' . $id ;
    }
}
