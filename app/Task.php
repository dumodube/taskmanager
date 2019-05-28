<?php

namespace TodoMaster;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $filable = [
        'title',
        'decription',
        'sub_category_id'
    ];
}
