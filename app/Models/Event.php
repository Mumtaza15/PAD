<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;

class Event extends Model
{
    protected $table = 'events';

    public function projects() {
        return $this->hasMany(Project::class);
    }

    public function getProjectCountAttribute()
    {
        return $this->projects()->count();
    }
}
