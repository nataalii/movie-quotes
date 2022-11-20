<?php

namespace App\Http\Requests\Quotes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateQuotesRequest extends FormRequest
{
	public function rules()
	{
		return [
			'quote_ka' => 'required|min:12|max:36',
			'quote_en' => 'required|min:10|max:36',
			'image'    => 'image|required',
			'movie_id' => ['required', Rule::exists('movies', 'id')],
		];
	}
}
