<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
