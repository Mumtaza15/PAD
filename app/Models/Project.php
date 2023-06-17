<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'project_name',
        'event_id',
        'votes',
        'description',
        'category',
        'video_link',
        'release_date',
        'dosen_pembimbing',
        'event_name',
        'demo_link',
        'team_name',
        'member1_name',
        'member2_name',
        'member3_name',
        'member4_name',
        'member5_name',
        'member1_photo',
        'member2_photo',
        'member3_photo',
        'member4_photo',
        'member5_photo',
        'project_picture1',
        'project_picture2',
        'project_picture3',
        'approved',
    ];
}
