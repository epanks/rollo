<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_paket = Paket::where('nmpaket', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->get();
        } else {
            $data_paket = Paket::paginate(10);
        }
        return view('paket.index', ['data_paket' => $data_paket]);
    }

    public function create(Request $request)
    {
        Paket::create($request->all());
        return redirect('/paket')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $data_paket = Paket::find($id);
        return view('paket/edit', ['data_paket' => $data_paket]);
    }

    public function update(Request $request, $id)
    {
        $data_paket = Paket::find($id);
        $data_paket->update($request->all());
        return redirect('/paket')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $data_paket = Paket::find($id);
        $data_paket->delete($data_paket);
        return redirect('/paket')->with('sukses', 'Data berhasil dihapus');
    }
    // public function list($kdsatker)
    // {
    //     $data_list = Paket::find($kdsatker);
    //     dd($data_list);
    //     return $data_list;
    // }
}
