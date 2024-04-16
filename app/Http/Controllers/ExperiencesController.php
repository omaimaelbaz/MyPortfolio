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
    public function createExperience(Request $request)
    {
        $validateData = $request->validate([
        "poste"=>"required",
        "entreprise"=>"required",
        "lieu"=>"required",
        "date_debut"=>"required",
        "date_fin"=>"required",
        "responsabilites"=>"required",

        ]);
        $exp = Experiences::create($validateData);
        if (!$exp) {
            return response()->json(['message' => 'Creation of exp failed'], 404);
        } else {
            return response()->json(['message' => 'Success', 'user' => $exp], 201);
        }
    }
    public function deleteExperience($id)
    {
        $exp =Experiences::find($id);
        if (!$exp) {
            return response()->json(['message' => 'exp non trouvé'], 404);
        }

        $exp->delete();
        return response()->json(['message' => 'exp supprimé avec succès'], 200);
    }
    public function updateExperience(Request $request,$id)
    {
        $validatedData = $request->validate([
            "poste"=>"required",
            "entreprise"=>"required",
            "lieu"=>"required",
            "date_debut"=>"required",
            "date_fin"=>"required",
            "responsabilites"=>"required",

            ]);

            $data = Experiences::find($id);
            if (!$data) {
                return response()->json(['message' => 'exp non trouvé'], 404);
            }
            $data->poste = $validatedData['poste'];
            $data->entreprise = $validatedData['entreprise'];
            $data->lieu = $validatedData['lieu'];
            $data->date_debut = $validatedData['date_debut'];
            $data->date_fin = $validatedData['date_fin'];
            $data->responsabilites = $validatedData['responsabilites'];

            $data->save();

            return response()->json(['message' => 'Modification effectuée avec succès'], 200);



    }

    }


