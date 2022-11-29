<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello from UserController';
    }

    public function show($id)
    {
        // $data = array(
        //     'id' => $id,
        //     'name' => 'Joshua',
        //     'age' => 22,
        //     'address' => 'Quezon City'
        // );
        // return view('user', ['data' => $data]);

        return view('user')
            ->with('name', 'Joshua')
            ->with('age', 22)
            ->with('address', 'Quezon City');
    }
}
