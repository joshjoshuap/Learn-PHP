<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello from UserController';
    }

    public function login()
    {
        return view('users.login');
    }

    public function process(Request $request)
    {
        // Valide the user input
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        // validate the input and create session
        if (auth()->attempt($validated)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome back');
        }

        return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');
    }

    public function register()
    {
        return view('users.register');
    }

    public function logout(Request $request)
    {
        auth()->logout(); // logout

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout Successful');
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Encrypt Password
        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        auth()->login($user); // create session, directly login

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

        return view('users.index')
            ->with('name', 'Joshua')
            ->with('age', 22)
            ->with('address', 'Quezon City');
    }
}
