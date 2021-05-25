<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
	protected $fillable = [
        'first_name','last_name','job_title','company',
        'industry','website','number','email',
        'address','postalcode','city',
        'province','country','description',
        
    ];
    use HasFactory;
    public $timestamps = false;
    //protected $table = 'transactions';
    protected $guarded = array();
}
