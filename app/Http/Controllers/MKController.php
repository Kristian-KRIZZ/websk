<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MKController extends Controller
{
   
    public function index()
    {
        $mk = DB::table('mk')
        ->select("id_mk", "nama_mk", "jurusan_nama", "jurusan.nama AS jurusan_nama")
        ->join('jurusan', 'jurusan_id', '=', 'mk.jurusan_id')
        ->get();
        return view('mk.index', ['data' => $mk]);
    }
    }

    public function create()
    {
        return view('MK.create');
    }

    public function edit($id)
    {
        $mk = DB::table('mk')
        ->select("id_mk", "nama_mk", "jurusan_nama")
        ->join('jurusan', 'jurusan_id', '=', 'mk.jurusan_id')
        ->where('mhs.id', $id)
        ->first();
        $jurusan = DB::table('jurusan')->get():
        
        return view('MK.edit', ['matkul' => $this->matkul[$id], 'id' => $id]);
    }

    public function show($id)
    {
    }
}
