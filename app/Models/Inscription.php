<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'note',
        'formation_id'
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
