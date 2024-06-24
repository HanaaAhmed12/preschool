<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'child_teacher', 'child_id', 'teacher_id');
    }
}