<?php

namespace App\Http\Controllers;

use App\Model\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function chart()
    {
        $data = Bahan::all();

        return response()->json($data, 200);
    }
}
