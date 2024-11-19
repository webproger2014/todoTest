<?php 

namespace Modules\Todo\Tasks;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class GetTodoPaginateTask
{
    public function run(Builder $query): LengthAwarePaginator
    {
        return $query->paginate(50);
    }
}