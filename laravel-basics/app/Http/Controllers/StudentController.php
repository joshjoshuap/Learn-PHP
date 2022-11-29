<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function index()
    {
        $data = Students::all();
        // $data = Students::where('section', 10)->get(); 
        // $data = Students::where('name', 'like', '%J%')->get();
        // $data = Students::where('age', '>', 18)->get();
        // $data = Students::where('age', '>', 18)->orderBy('name', 'asc')->limit(3)->get();

        return view('students.index', ['students' => $data]);
    }
}
