<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balai;

class BalaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_balai = Balai::where('nmbalai', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->get();
        } else {
            $data_balai = balai::paginate(20);
        }
        return view('balai.index', ['data_balai' => $data_balai]);
    }

    public function profile($id)
    {
        $data_balai = Balai::find($id);
        //dd($data_balai);
        return view('balai.profile', ['data_balai' => $data_balai]);
    }
}
