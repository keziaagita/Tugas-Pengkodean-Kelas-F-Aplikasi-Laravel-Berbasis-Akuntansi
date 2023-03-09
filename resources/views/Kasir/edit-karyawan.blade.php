@extends('layouts.sidebar')

@section('title','Add-Barang')

@section('content')
<div class="m-5">
    <h3>Edit Karyawan</h3>
    <form action="/karyawan/{{ $data->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat" required value="{{ $data->alamat }}">
        </div>
        <div class="form-group">
            <label for="nohp">No HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Enter nohp" required value="{{ $data->nohp }}">
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>
@endsection