<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Todo extends Model {
    protected $fillable = ['todo_name', 'is_completed'];
}
