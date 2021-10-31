<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $table="messages";
    protected $fillable= [

        'PtName','PsyName','PtUsername','PsyUsername','PtMessage','PsyMessage','Read1','Read2','Files'
    ];
}
