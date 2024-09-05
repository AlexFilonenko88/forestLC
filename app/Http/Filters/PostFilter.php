<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class PostFilter extends AbstractFilter
{
    protected array $keys = [
        'title',
        'published_at_from',
        'status',
    ];

    protected function title(Builder $builder, $value)
    {
        $builder->where('title', 'ilike', "%$value%");
    }

    protected function publishedAtFrom(Builder $builder, $value)
    {
        $builder->where('published_at', '>=', $value);
    }

    protected function status(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }

//    protected function category(Builder $builder, $value)
//    {
//        $builder->where('category', 'title', 'ilike', "%$value%");
//    }
}
