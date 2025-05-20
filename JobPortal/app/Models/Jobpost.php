<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobpost extends Model
{
    use HasFactory;

      protected $table = 'job_posts'; 

     protected $fillable = [
        'title',
        'description',
        'key_responsibilities',
        'requirements',
        'posted_date',
        'location',
        'salary',
        'is_visible',
        'status',
        'jobtype',
    ];

    // app/Models/JobPost.php
public function applications()
{
    return $this->hasMany(JobApplication::class);
}

}
