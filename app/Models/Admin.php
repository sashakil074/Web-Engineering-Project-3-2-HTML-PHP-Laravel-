<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable= [

        'Name','NID_no','Admin_ID','Division','Email','Contact','Username','Password','ProfilePic'
    ];

}
