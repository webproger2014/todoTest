<?php

namespace Modules\Todo\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;

class OrderFilter
{
    public function handle(Builder $query, array $order): Builder
    {
        return $query->orderBy($order[0], $order[1]);   
    }
}