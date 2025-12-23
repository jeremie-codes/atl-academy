<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apropos extends Model
{
    protected $fillable = [
        'subtitle', 'image', 'description'
    ];
}
