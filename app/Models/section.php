<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
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

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function year()
    {
        return $this->belongsTo(year::class, 'year_id', 'id');
    }

    public function groups()
    {
        return $this->hasMany(group::class, 'section_id', 'id');
    }
}
