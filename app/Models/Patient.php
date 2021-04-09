<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable= [

        'Name','NID_no','Birth_year','Division','District','Email','Contact','Username','Password'
    ];
}
