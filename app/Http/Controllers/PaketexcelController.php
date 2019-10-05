<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketexcelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_excel = Paketxcel::where('nmpaket', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->paginate(10);
        } else {
            $data_excel = paketexcel::paginate(10);
        }
        return view('excel.index', ['data_excel' => $data_excel]);
    }
}
