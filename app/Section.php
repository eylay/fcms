<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = ['id'];

    public static function uploadable_contents()
    {
        return ['picture_path', 'picture1', 'picture2'];
    }

    public function contents()
    {
        return $this->hasMany(Content::class)->orderBy('position');
    }

    public function inputs()
    {
        switch ($this->type) {
            case 'features': return ['title', 'icon', 'picture', 'cols', 'description']; break;
            case 'tabs': return ['title', 'subtitle', 'link_name', 'link_href', 'picture1', 'picture2', 'description']; break;
            case 'prices': return ['title', 'link_name', 'link_href', 'icon', 'cols', 'description']; break;
            case 'cards': return ['title','subtitle','picture','cols']; break;
            case 'faq': return ['title', 'description']; break;
            case 'clients': return ['title', 'picture']; break;
            case 'posts': return ['title', 'picture', 'cols', 'description']; break;
            default: return []; break;
        }
    }
}
