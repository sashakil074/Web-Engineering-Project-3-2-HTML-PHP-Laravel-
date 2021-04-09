<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursevideo extends Model
{
    use HasFactory;
    protected $fillable= [

        'CourseID','VideoTitle','Files'
    ];
}
