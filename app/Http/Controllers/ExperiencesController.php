<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{

    public function getexperience()
    {
        $data = Experiences::get();
        //  dd($data);
        return response()->json($data);

    }
}
