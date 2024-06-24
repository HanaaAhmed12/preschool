<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parents extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'phone', 'email','address'];

    public function children()
    {
        return $this->hasMany(Child::class);

    }

}