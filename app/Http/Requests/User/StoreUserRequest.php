<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
	public function rules()
	{
		return [
			'email'    => 'required|email',
			'password' => 'required|min:6',
		];
	}
}
