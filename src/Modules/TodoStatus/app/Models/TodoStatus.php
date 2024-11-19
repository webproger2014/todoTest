<?php

namespace Modules\TodoStatus\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\TodoStatus\Database\Factories\TodoStatusFactory;

class TodoStatus extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): TodoStatusFactory
    // {
    //     // return TodoStatusFactory::new();
    // }
}
