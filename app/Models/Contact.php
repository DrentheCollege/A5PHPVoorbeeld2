<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name','email','city','country','job_title', 'company_id'
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company', 'company_id');
    }

}
