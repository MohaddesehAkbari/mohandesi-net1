<?php

namespace App\Http\Controllers;

use App\Models\kalaha;
use Illuminate\Http\Request;
use App\Models\kala;



class kalacontroller extends Controller
{
    public function index() {
        $kala = kala::all();
        //dd($kala);
        return view('kala.index',['kala'=>$kala]);
    }

        public function add(){
            return view('kala.add');
    }
    public function create()
    {
        dd('yess');
    }
}

