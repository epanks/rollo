<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;

class WilayahController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_wilayah = Wilayah::where('nmbalai', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->get();
        } else {
            $data_wilayah = wilayah::paginate(10);
        }
        return view('wilayah.index', ['data_wilayah' => $data_wilayah]);
    }

    public function profile($id)
    {
        $data_wilayah = Wilayah::find($id);
        //$data_paket = Paket::get();
        //dd($data_wilayah);
        return view('wilayah.profile', compact('data_wilayah'));
    }
}
