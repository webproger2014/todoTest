<?php 

namespace Modules\Todo\Dto;

use Spatie\LaravelData\Data;

class UpdateTodoItemRequestDto extends Data
{
    public string $name;

    public ?string $desc;

    public ?string $deadline_at;
    
    public ?int $todo_status_id;
}