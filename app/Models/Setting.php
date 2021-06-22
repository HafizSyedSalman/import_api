<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

	protected $fillable = ['name', 'value'];

	public $timestamps = false;

	public static function option($name)
	{
		$attribute = self::where('name', $name)->select('value')->first();

		if ($attribute) {
			return $attribute->value;
		}
	}
}
