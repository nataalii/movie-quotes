<?php

namespace App\Http\Requests\Quotes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuotesRequest extends FormRequest
{
	public function rules()
	{
		return [
			'quote_ka' => 'required|max:36',
			'quote_en' => 'required|max:36',
			'image'    => 'required|image',
			'movie_id' => ['required', Rule::exists('movies', 'id')],
		];
	}
}
