<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychologist extends Model
{
    use HasFactory;
    protected $fillable= [

        'Name','NID_no','Position','Work_place','Division','District','Email','Contact','Username','Password'
    ];
}
