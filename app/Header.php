<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    public function photos()
    {
        return $this->hasMany(HeaderMobilePhoto::class);
    }
}
