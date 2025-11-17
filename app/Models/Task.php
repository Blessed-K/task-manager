<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'is_cmpleted'];

    protected $casts = [
        'is_cmpleted' => 'boolean',
    ];

    // Allow using $task->is_completed as a friendly attribute while the DB column
    // has a typo `is_cmpleted`.
    public function getIsCompletedAttribute()
    {
        return $this->attributes['is_cmpleted'] ?? false;
    }

    public function setIsCompletedAttribute($value)
    {
        $this->attributes['is_cmpleted'] = (bool) $value;
    }
}
