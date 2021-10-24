<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'sallery',
        'phone',
        'nid',
        'photo',
        'joining_date',

    ];
}
