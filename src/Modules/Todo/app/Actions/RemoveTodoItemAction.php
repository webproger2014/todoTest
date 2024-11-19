<?php 

namespace Modules\Todo\Actions;

use Modules\Todo\Models\Todo;

class RemoveTodoItemAction
{
    public function run(Todo $todo): bool
    {   
       return $todo->delete();
    }
}