<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
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

            return redirect('/')->with('success', 'Welcome Back!');
        };

        
        throw ValidationException::withMessages([
            'email' => 'Enter Valid Email',
            'password' => 'Enter Valid Password'
        ]);

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

}
