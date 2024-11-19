<?php 

namespace Modules\Todo\Actions;

use Modules\Todo\Dto\UpdateTodoItemRequestDto;
use Modules\Todo\Models\Todo;


class UpdateTodoItemAction
{
    public function run(Todo $todo, UpdateTodoItemRequestDto $dtoDataUpdateTodoItem): Todo
    {       
       $dataUpdate = array_filter(
            $dtoDataUpdateTodoItem->toArray(), 
            static fn($item) => !is_null($item)
       );

       $todo->fill($dataUpdate);
       
       return $todo;
    }
}