<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskObservation extends Model
{
    protected $fillable = ['observation, task_id, user_id, description, finish_observation'];
    protected $table = 'task_observations';
}
