<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $matkul = [
        [
            'nim' => "123456",
            'nama' => "I Putu satu",
            'jurusan' => "TI",
        ],
        [
            'nim' => "234567",
            'nama' => "I Wayan dua",
            'jurusan' => "TI",
        ],
        [
            'nim' => "345678",
            'nama' => "I Ketut tiga",
            'jurusan' => "SK",
        ],
        [
            'nim' => "456789",
            'nama' => "I Kadek empat",
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
