<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    public function index()
        {
            $data = Pemasok::all();
            $jumlah = Pemasok::count();
            return view('Suplier.pemasok', ['data' => $data, 'jumlah' => $jumlah]);
        }
    public function show($id)
        {
            # code...
        }
    public function create()
        {
            return view('Suplier.add-pemasok');
        }
    public function store(Request $request)
        {
            Pemasok::create($request->all());
            return redirect('pemasok');
        }
    public function edit($id)
        {
            $data = Pemasok::findOrFail($id);
            return view('Suplier.edit-pemasok', ['data' => $data]);
        }
    public function update(Request $request, $id)
        {
            $data = Pemasok::findOrFail($id);
            $data->update($request->all());
            return redirect('pemasok');
        }
    public function delete($id)
        {
            $data = Pemasok::findOrFail($id);
            $data->delete();
            return redirect('pemasok');
        }
}
