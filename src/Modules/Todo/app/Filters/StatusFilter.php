<?php

namespace Modules\Todo\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;

class StatusFilter
{
    public function handle(Builder $query, array $statuses): Builder
    {
        return $query->whereIn('todo_status_id', $statuses);   
    }
}