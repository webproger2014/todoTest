<?php 

namespace Modules\Todo\Actions;

use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Todo\Dto\SearchByFilterRequestDto;
use Modules\Todo\Models\Todo;
use Modules\Todo\Tasks\GetTodoPaginateTask;


class FindTodoByFilterAction
{
    public function run(SearchByFilterRequestDto $dto): LengthAwarePaginator
    {   
        $query = Todo::query();

        //> Ключи фильтра
        $filtersKey = array_keys($dto->toArray());

        // Изменяем состояние query - добавляем запрос на основе фильтров
        foreach ($filtersKey as $filterKey) {
            if (is_null($dto->{$filterKey})) {
                continue;
            }

            $filterName = ucfirst($filterKey) . 'Filter';
            $filterClass = "Modules\Todo\Filters\\{$filterName}";
            $query = (new $filterClass())->handle($query, $dto->{$filterKey});
        }
      

        // Пагинация
        $itemsPaginate = (new GetTodoPaginateTask())->run($query);

        return $itemsPaginate;
    }
}