<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'task_management';
    protected $fillable = [
        'state',
        'title',
        'description',
        'user_id'
        
    ];
}