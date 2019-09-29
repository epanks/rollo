<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

class PaketController extends Controller
{
    public function index()
    {
        $data_paket = Paket::paginate(10);
        return view('paket.index', ['data_paket' => $data_paket]);
    }
}
