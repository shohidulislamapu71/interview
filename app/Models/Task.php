<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['title', 'is_completed'];
    public $attributes = [
        'is_completed' => false
    ];
}
