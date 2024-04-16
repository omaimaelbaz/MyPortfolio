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
    public function addformation()
    {
        return view('admin.addformation');
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
    public function updateFormation(Request $request,$id)
    {
        $formation= Formations::find($id);

        $validatedData = $request->validate([
            "diplome" => 'required',
            "etablissement" => 'required',
            "lieu" => 'required',
            "annee_obtention" => 'required'
        ]);
        $formation->update($validatedData);

        return response()->json(['message' => 'Formation updated successfully', 'formation' => $formation]);

    }
    public function deleteFormation($id)
    {
        $formation = Formations::find($id);

        if (!$formation) {
            return response()->json(['message' => 'Formation not found'], 404);
        }

        $formation->delete();

        return response()->json(['message' => 'Formation deleted successfully']);
    }
}
