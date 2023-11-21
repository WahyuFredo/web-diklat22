<?php

namespace App\Http\Controllers;

use App\Models\perumahan as ModelsPerumahan;
use Illuminate\Http\Request;

use App\perumahan;

class PerumahanController extends Controller
{
    public function create(){
        return("form");
    }

    public function index()
    {
        $data_perumahan = ModelsPerumahan::all();
        $no = 1;
        return view("index", ['data' => $data_perumahan, 'no' => $no]);
    }
}

