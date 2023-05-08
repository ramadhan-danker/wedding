<?php

namespace App\Http\Controllers;

use App\Models\Wedding1;
use App\Models\Wedding2;
use App\Models\Wedding3;
use App\Models\Wedding5;
use App\Models\Wedding6;
use App\Models\Wedding7;
use App\Models\Wedding8;
use App\Models\Wedding9;
use App\Models\Wedding10;
use App\Models\Wedding11;
use App\Models\Wedding12;
use App\Models\Wedding13;


class WeddingController extends Controller
{

    public function wedding1(Wedding1 $wedding1)
    {
        return view('undangan.undangan1', [
            "undangan" => $wedding1
        ]);
    }

    public function wedding2(Wedding2 $wedding2)
    {
        return view('undangan.undangan3', [
            "undangan" => $wedding2
        ]);
    }

    public function wedding3(Wedding3 $wedding3)
    {
        return view('undangan.undangan2', [
            "undangan" => $wedding3
        ]);
    }

    public function wedding5(Wedding5 $wedding5)
    {
        return view('undangan.undangan5', [
            "undangan" => $wedding5
        ]);
    }

    public function wedding6(Wedding6 $wedding6)
    {
        return view('undangan.undangan6', [
            "undangan" => $wedding6
        ]);
    }

    public function wedding7(Wedding7 $wedding7)
    {
        return view('undangan.undangan7', [
            "undangan" => $wedding7
        ]);
    }

    public function wedding8(Wedding8 $wedding8)
    {
        return view('undangan.undangan8', [
            "undangan" => $wedding8
        ]);
    }

    public function wedding9(Wedding9 $wedding9)
    {
        return view('undangan.undangan9', [
            "undangan" => $wedding9
        ]);
    }

    public function wedding10(Wedding10 $wedding10)
    {
        return view('undangan.undangan10', [
            "undangan" => $wedding10
        ]);
    }

    public function wedding11(Wedding11 $wedding11)
    {
        return view('undangan.undangan11', [
            "undangan" => $wedding11
        ]);
    }

    public function wedding12(Wedding12 $wedding12)
    {
        return view('undangan.undangan12', [
            "undangan" => $wedding12
        ]);
    }

    public function wedding13(Wedding13 $wedding13)
    {
        return view('undangan.undangan13', [
            "undangan" => $wedding13
        ]);
    }
}
