<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index()
    {
        $data = array('students' => DB::table('students')->orderBy('created_at', 'desc')->paginate(10));

        // $data = Students::all();
        // $data = Students::where('section', 10)->get(); 
        // $data = Students::where('name', 'like', '%J%')->get();
        // $data = Students::where('age', '>', 18)->get();
        // $data = Students::where('age', '>', 18)->orderBy('name', 'asc')->limit(3)->get();

        return view('students.index', $data);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4'],
            'section' => ['required'],
            'age' => ['required'],
            'email' => ['required', 'email', Rule::unique('students', 'email')],
        ]);

        Students::create($validated); // Creating new Student

        return redirect('/')->with('message', 'New Student Added');
    }
}
