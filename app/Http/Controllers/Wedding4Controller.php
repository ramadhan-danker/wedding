<?php

namespace App\Http\Controllers;

use App\Models\Wedding4;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class Wedding4Controller extends Controller
{
    // public function index()
    // {
    //     $data = Wedding4::all();
    //     return view('test', compact('data'));
    // }

    public function wedding4(Wedding4 $wedding4)
    {
        return view('test', [
            "d" => $wedding4
        ]);
    }
}