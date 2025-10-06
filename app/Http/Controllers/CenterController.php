<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request){
        echo "test";
        echo $request -> input('name');
        $a=$request -> input('name');
        Center::create([
            "name" => $a,
            "address" => request("address")
        ]);
    }
}
