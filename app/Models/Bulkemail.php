<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulkemail extends Model
{
    use HasFactory;
    protected $table = 'bulk_email';
	protected $fillable = [ 'email' 
      ];
	 public $timestamps = true;
    //protected $table = 'transactions';
    protected $guarded = array();
}
