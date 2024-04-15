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

    public function store(Request $request)
    {
        $validateData= $request->validate([
            "diplome"=>'required',
            "etablissement"=>'required',
            "lieu"=>'required',
            "annee_obtention"=>'required'
        ]);
        Formations::create($validateData);

        return response()->json(['message' => 'Formation created successfully']);

    }
}
