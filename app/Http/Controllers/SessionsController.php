<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.signin');
    }

    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();


        if(auth()->attempt($validated)) {
            session()->regenerate();

            return redirect()->route('home')->with('success', 'Welcome Back!');
        };

        
        throw ValidationException::withMessages([
            'email' => 'Enter Valid Email',
            'password' => 'Enter Valid Password'
        ]);

    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home')->with('success', 'Goodbye!');
    }

}
