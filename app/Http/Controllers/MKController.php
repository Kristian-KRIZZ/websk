<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $matkul = [
        [
            'kode' => "010234",
            'nama' => "Front-End Developer",
            'jurusan' => "TI",
        ],
        [
            'kode' => "253782",
            'nama' => "Full Stack Developer",
            'jurusan' => "TI",
        ],
        [
            'kode' => "129030",
            'nama' => "Unit Control",
            'jurusan' => "SK",
        ],
        [
            'kode' => "478561",
            'nama' => "AI Technology",
            'jurusan' => "DGM",
        ],
    ];

    public function index()
    {
        return view('MK.index', ['matkul' => $this->matkul]);
    }

    public function create()
    {
        return view('MK.create');
    }

    public function edit($id)
    {
        return view('MK.edit', ['matkul' => $this->matkul[$id], 'id' => $id]);
    }

    public function show($id)
    {
    }
}
