<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
    public function scopeInActive($query)
    {
        return $query->where('active', false);
    }

    public function section()
    {
        return $this->belongsTo(section::class, 'section_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(student::class, 'student_groups', 'group_id', 'student_id');
    }
}
