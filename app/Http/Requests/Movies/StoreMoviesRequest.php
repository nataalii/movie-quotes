<?php

namespace App\Http\Requests\Movies;

use Illuminate\Foundation\Http\FormRequest;

class StoreMoviesRequest extends FormRequest
{
	public function rules()
	{
		return [
			'title_ka' => 'required|min:5',
			'title_en' => 'required|min:5',
		];
	}
}
