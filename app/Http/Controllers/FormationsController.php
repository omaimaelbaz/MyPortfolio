<?php

namespace App\Http\Controllers;

use App\Models\Formations;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function getformation()
    {
        $data = Formations::get();
        // dd($data);
        return response()->json($data);

    }
}
