<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function task()
    {
        return $this->hasOne(Task::class);
    }
    
    protected $fillable = [

        'first_name',
        'last_name',
        'email',
        'password',
        'user_name',
        'last_login',
        'registered_at'
    ];
}
