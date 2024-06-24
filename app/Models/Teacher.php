<?php

namespace App\Models;
use App\Models\Child;
use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'subject', 'address','published'
    ];
    public function children()
    {
        return $this->belongsToMany(Child::class, 'child_teacher', 'teacher_id', 'child_id');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'class_teacher', 'teacher_id', 'class_id');
    }
}