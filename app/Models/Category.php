<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Advertise;

class Category extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'slug'
	];

	public $timestamps = false;

	public function advertises(): HasMany
	{
		return $this->hasMany(Advertise::class);
	}
}
