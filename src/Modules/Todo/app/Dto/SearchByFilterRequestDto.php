<?php 

namespace Modules\Todo\Dto;

use Spatie\LaravelData\Data;

class SearchByFilterRequestDto extends Data
{
    public ?array $status;

    public ?array $order;
}