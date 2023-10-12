<?php

namespace App\Http\Controllers;

use App\Models\data_pemain;
use Illuminate\Http\Request;

class pemainku extends Controller
{
    public function index()
    {
        $pemains = data_pemain::all();
        return view('pemain', compact('pemains'));
    }
    //
}
