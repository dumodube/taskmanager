<?php

namespace TodoMaster;

use Illuminate\Database\Eloquent\Model;
use TodoMaster\Task;

class SubCategory extends Model
{
    public function task(){
        return $this->hasMany(Task::class);
    }
}
