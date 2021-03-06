<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Kegiatan;
use App\Pembina;
use App\BukuTamu;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
        $count = Anggota::select('gambar')->get();
    	$anggota = Anggota::select('gambar')->take(3)->get();
        $pembina = Pembina::select('nama', 'gambar')->first();
    	$kegiatan = Kegiatan::all();
    	$data = $kegiatan->take(5);

    	return view('welcome', [
            'count' =>  $count,
    		'anggota'	=>	$anggota,
    		'data'	=>	$data,
    		'kegiatan' => $kegiatan,
            'pembina'   => $pembina,
    	]);
    }

    public function kegiatan($id) {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('single-kegiatan', ['kegiatan' => $kegiatan]);
    }

    public function allkegiatan() {
        $allkegiatan = Kegiatan::all();
        return view('all-kegiatan', ['allkegiatan' => $allkegiatan]);
    }

    public function postBukuTamu(Request $request) {
        $bukutamu = new BukuTamu;
        $bukutamu->nama = $request['nama'];
        $bukutamu->email = $request['email'];
        $bukutamu->subject = $request['subject'];
        $bukutamu->pesan = $request['pesan'];
        
        $bukutamu->save();

        return redirect()->back()->with('pesan', 'Pesan anda Sudah Terkirim !');
    }
}
