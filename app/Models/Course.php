<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = false;

    public function tags() {
        return $this->belongsToMany(Tag::class, 'course_tags', 'course_id', 'tag_id');
    }

    public function lessons() {
        return $this->belongsToMany(Lesson::class, 'course_lessons', 'course_id', 'lesson_id');
    }

    public function tests() {
        return $this->belongsToMany(Test::class, 'course_tests', 'course_id', 'test_id');
    }
}
