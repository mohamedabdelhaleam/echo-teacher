<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'student_groups', 'student_id', 'group_id');
    }
}
