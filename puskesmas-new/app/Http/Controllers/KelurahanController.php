<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index(){
        $list_kelurahan = kelurahan::all();
        return view('admin.kelurahan.index', compact('list_kelurahan'));
    }
}
