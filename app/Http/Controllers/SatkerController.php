<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satker;

class SatkerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_satker = Satker::where('nmsatker', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->get();
        } else {
            $data_satker = satker::paginate(10);
        }
        return view('satker.index', ['data_satker' => $data_satker]);
    }
}
