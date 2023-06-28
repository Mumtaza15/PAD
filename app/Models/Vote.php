<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'table_votes';

    // public function event()
    // {
    //     return $this->hasOneThrough(Event::class, Project::class);
    // }
}
