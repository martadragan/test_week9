<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detention extends Model
{
    protected $fillable = [
        'subject',
        'description'
    ];
}
