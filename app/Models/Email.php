<?php

namespace App\Models;
use App\Models\Email;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{         
    //use HasFactory;

    protected $table = 'email_info';
	protected $fillable = [
        'id','email','verified_email','name',
        'given_name','family_name','picture',
        'locale',
    ];
}
