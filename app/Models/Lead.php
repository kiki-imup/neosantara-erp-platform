<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'company_name',
        'contact_person',
        'phone',
        'email',
        'status',
    ];
}