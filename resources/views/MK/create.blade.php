@extends('layout.master')

@section('title', 'Tambah Matakuliah')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/MK') }}">MK</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah Matakuliah</h4>
            </div>
        </div>
        <form action="{{ url('/MK') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">ID Matakuliah</label>
                    <input class="form-control" type="text" name="id_mk">
                </div>
                <div>
                    <label class="form-label">Nama Matakuliah</label>
                    <input class="form-control" type="text" name="nama_mk">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option value="1">Sistem Komputer</option>
                        <option value="2">Bisnis</option>
                        <option value="3">Akutansi</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
