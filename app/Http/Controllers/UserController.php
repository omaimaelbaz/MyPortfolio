<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use MongoDB\Laravel\Eloquent\Model;


class UserController extends Controller
{
    // show all users
    public function index()
    {
        $data = User::get();
        return response()->json($data);

    }
    // store users
    public function store(Request $request)
    {

    }

}
