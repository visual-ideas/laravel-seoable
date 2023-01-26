<?php

namespace VI\LaravelSeoable\Traits\Models;


use Illuminate\Database\Eloquent\Relations\MorphOne;
use VI\LaravelSeoable\Models\Seoable;

trait HasSeoable
{

    public function seoable(): MorphOne
    {
        return $this->morphOne(Seoable::class, 'seoable');
    }

}
