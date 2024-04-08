<?php

namespace App\Http\Controllers;

use App\Models\Informations;
use Illuminate\Http\Request;


class InformationsController extends Controller
{
    public function getInfo()
    {
        $data = Informations::all();
        // dd($data);

        return response()->json($data);

    }
}
