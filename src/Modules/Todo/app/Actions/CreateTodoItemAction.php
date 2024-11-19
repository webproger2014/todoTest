<?php 

namespace Modules\Todo\Actions;

use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Todo\Dto\SearchByFilterRequestDto;
use Modules\Todo\Models\Todo;
use Modules\Todo\Dto\{
    CreateItemRequestDto,
};

class CreateTodoItemAction
{
    public function run(CreateItemRequestDto $dtoNewItemTodo): Todo
    {   
       return Todo::create($dtoNewItemTodo->toArray());
    }
}