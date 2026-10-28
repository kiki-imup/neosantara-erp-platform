<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['company_name', 'contact_person', 'phone', 'email', 'status'])]
class Lead extends Model
{
    //
}