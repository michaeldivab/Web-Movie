<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMoviePivot extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function item()
    {
        return $this->belongsTo(Movies::class);
    }
}
