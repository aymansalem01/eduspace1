<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
     'name',
     'course_id',
     'image',
     'video',
    ];
    public function course(){
        return $this->belongsTo(Course::class);

    }
    public function users(){
        return $this->belongsToMany(User::class,'user_subjects');
}
}
