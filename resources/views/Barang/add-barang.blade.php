@extends('layouts.sidebar')

@section('title','Add-Barang')

@section('content')
<div class="m-5">
    <h3>Tambahkan Barang</h3>
    <form action="barang" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" placeholder="Enter stok" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter harga" required>
        </div>
        <div class="form-group">
            <label for="pemasok_id">Pemasok</label>
            <select name="pemasok_id" id="pemasok_id" class="form-control">
                @foreach($pemasok as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection