<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $guarded = ['id'];

    public function section_id()
    {
        $number = str_replace("#section-", "", $this->link);
        return is_numeric($number) ? $number : 0;
    }
}
