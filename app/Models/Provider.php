<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'email_provider';
	protected $fillable = [
        'provider'
    ];
    use HasFactory;
     public $timestamps = true;
}
