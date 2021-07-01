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
        'address','zip','postalcode','city','group',
        'province','country','description','email_access','sms_access',
        'email_gateway','sms_gateway','user_id'   
    ];
    use HasFactory;
    function user(){
        return $this->belongsTo('App\Models\User');
    }
    public $timestamps = true;
    //protected $table = 'transactions';
    protected $guarded = array();
}