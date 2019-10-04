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
            $data_balai = balai::paginate(10);
        }
        return view('balai.index', ['data_balai' => $data_balai]);
    }

    public function profile(Balai $balai)
    {

        $paket = $balai->paket()->get();
        //dd($paket);
        return view('balai.profile', compact('paket'));
    }
}
