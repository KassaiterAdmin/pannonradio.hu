<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogpost extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
