<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
        {
            $data = Kasir::all();
            $jumlah = Kasir::count('id');
            return view('Kasir.kasir', ['data' => $data, 'jumlah' => $jumlah]);
        }
    public function show($id)
        {
            # code...
        }
    public function create()
        {
            return view('Kasir.add-karyawan');
        }
    public function store(Request $request)
        {
            Kasir::create($request->all());
            return redirect('/karyawan');
        }
    public function edit($id)
        {
            $data = Kasir::findOrFail($id);
            return view('Kasir.edit-karyawan',['data' => $data]);
        }
    public function update(Request $request, $id)
        {
            $data = Kasir::findOrFail($id);
            $data->update($request->all());
            return redirect('/karyawan');
        }
    public function delete($id)
        {
            $data = Kasir::findOrFail($id);
            $data->delete();
            return redirect('/karyawan');
        }
}
