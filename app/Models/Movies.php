<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Movies extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $guarded = [
	];

	public $translatable = ['title'];

	public function quote()
	{
		return $this->hasMany(Quotes::class, 'movie_id');
	}
}
