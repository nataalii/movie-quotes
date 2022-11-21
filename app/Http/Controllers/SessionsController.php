<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
	public function create()
	{
		return view('sessions.signin');
	}

	public function store(StoreUserRequest $request)
	{
		if (auth()->attempt($request->validated()))
		{
			session()->regenerate();

			return redirect()->route('movies.store', app()->getLocale())->with('success', __('Welcome Back!'));
		}

		throw ValidationException::withMessages([
			'email'    => __('Enter Valid Email'),
			'password' => __('Enter Valid Password'),
		]);
	}

	public function destroy()
	{
		auth()->logout();

		return redirect()->route('home', app()->getLocale())->with('success', __('Goodbye!'));
	}
}
