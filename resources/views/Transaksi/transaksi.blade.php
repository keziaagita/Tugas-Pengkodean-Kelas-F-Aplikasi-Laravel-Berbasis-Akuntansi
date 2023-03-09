@extends('layouts.sidebar')

@section('title','Data Transaksi')

@section('content')
<h2>Data Transaksi</h2>

<div class="container">
    <div class="my-3 d-flex justify-content-between align-items-center">
        <div class="col-12 col-sm-8 col-md-5">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="keyword">
                    <button class="input-group-text btn btn-primary bi bi-search"></button>
                </div>
            </form>
        </div>
        <div class="col-auto me-5">
            <a href="/transaksi-restore" class="btn btn-warning bi bi-cloud-arrow-down-fill"> Restore</a>
        </div>
    </div>
</div>


<table class="table m-2">
    <tr>
        <th>#</th>
        <th>Barang</th>
        <th>Kasir</th>
        <th>Tanggal</th>
        <th>Qty</th>
        <th>Total</th>
        <th>Action</th>

    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->barang->name }}</td>
        <td>{{ $item->kasir->name }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->qty }}</td>
        <td>{{ $item->total }}</td>
        <td>
            {{-- <a href="/transaksi-edit/{{ $item->id }}" class="btn btn-success bi bi-pencil-fill"></a> --}}
            <form class="d-inline" action="/transaksi/{{ $item->id }}" method="POST" onclick="return confirm('are you sure?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger bi bi-trash"></button>
            </form>
            {{-- <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button> --}}
        </td>
    </tr>
    @endforeach
</table>
      {{-- <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/transaksi/{{ $item->id }}">
                @csrf
                <div class="form-group">
                    <label for="barang_id">Barang</label>
                    <input type="text" class="form-control" id="barang_id" name="barang_id" readonly value="{{ $item->barang->name }}">
                </div>
                <div class="form-group">
                    <label for="karyawan">Karyawan</label>
                    <input type="text" class="form-control" id="karyawan" name="karyawan" readonly value="{{ $item->kasir->name }}">
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="text" class="form-control" id="qty" name="qty" value="{{ $item-> }}">
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" name="total" value="{{ $item-> }}">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>

            </div>
        </div>
        </div>
    </div>
    end modal --}}
  
<div class="my-5">
    {{ $data->links() }}
</div>
@endsection