<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_post_id',
        'status',
        'applied_date',
        'resume_path',
        'full_name',
        'email',
        'phone',
        'linkedin',
        'experience',
        'key_skills',
    ];

    // app/Models/JobApplication.php
public function user()
{
    return $this->belongsTo(User::class);
}

public function jobPost()
{
    return $this->belongsTo(JobPost::class, 'job_post_id');
}

}
