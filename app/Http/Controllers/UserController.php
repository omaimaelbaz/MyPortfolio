<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use MongoDB\Laravel\Eloquent\Model;


class UserController extends Controller
{
    public function index()
    {
        return view('user.index');

    }
    public function admin()
    {
        return view('admin.admin');

    }
    // show all users
    public function getUsers()
    {
        $data = User::all();
        // dd($data);
        return response()->json($data);

    }
    // store users
    public function store(Request $request)
    {

    }

}
