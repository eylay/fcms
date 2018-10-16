<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderMobilePhoto extends Model
{
    protected $guarded = ['id'];

    public static function make($path)
    {
        $photo = new self;
        $photo->path = $path;
        $photo->save();
    }
}
