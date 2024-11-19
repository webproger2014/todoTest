<?php 

namespace Modules\Todo\Dto;

use Spatie\LaravelData\Data;

class CreateItemRequestDto extends Data
{
    public string $name;

    public ?string $desc = null;

    public ?string $deadline_at;

    public int $creator_id;

    public int $responsible_id;
}