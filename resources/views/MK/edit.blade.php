@extends('layout.master')

@section('title', 'Ubah Matakuliah')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/MK') }}">Matakuliah</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Matakuliah</h4>
            </div>
        </div>
        <form action="{{ url('/MK/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">ID Matakuliah</label>
                    <input class="form-control" type="text" name="nim" value="{{ $data->nim }}">
                </div>
                <div>
                    <label class="form-label">Nama Matakuliah</label>       
                    <input class="form-control" type="text" name="nama" value="{{ $data->nama        }}">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        @foreach ($jurusan as $j)
                        <option {{ $data ->jurusan_id == $j->id ? 'selected' : '' }} value="{{ $j->id}}">{{$j->nama}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
