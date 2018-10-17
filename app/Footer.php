<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{

    protected $guarded = ['id'];
    
    public function telephones_with_line_breaks()
    {
        return str_replace(",", "\r\n", $this->telephones);
    }

    public function emails_with_line_breaks()
    {
        return str_replace(",", "\r\n", $this->emails);
    }
}
