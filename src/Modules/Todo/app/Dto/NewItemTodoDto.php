<?php 

namespace Modules\Todo\Dto;

use Spatie\LaravelData\Data;

class NewItemTodoDto extends Data
{
    public int $id;
    
    public string $name;

    public ?string $desc;

    public ?string $deadline_at;

    public string $created_at;

    public string $updated_at;

}