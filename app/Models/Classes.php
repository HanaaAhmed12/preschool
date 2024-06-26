<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model

{
    use HasFactory, SoftDeletes;
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'class_teacher', 'class_id', 'teacher_id');
    }
}
