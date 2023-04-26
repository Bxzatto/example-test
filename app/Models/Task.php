<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'user_id', 'type_id', 'priority_id', 'status_id'];
    protected $table = 'tasks';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(TaskType::class);
    }

    public function priority()
    {
        return $this->belongsTo(TaskPriority::class);
    }

    public function status()
    {
        return $this->belongsTo(TaskStatus::class);
    }

}
