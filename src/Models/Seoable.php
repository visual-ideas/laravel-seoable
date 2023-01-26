<?php

namespace VI\LaravelSeoable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Seoable extends Model
{

    protected $fillable = [
        'seoable_id',
        'seoable_type',

        'route',
        'url',

        'title',
        'description',

        'breadcrumb',

        'header',
        'header_text',

        'text',

        'open_graph',
    ];

    public function seoable(): MorphTo
    {
        return $this->morphTo();
    }

}
