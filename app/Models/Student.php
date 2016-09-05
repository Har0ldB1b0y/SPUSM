<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_id',
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'birthdate',
        'gender',
        'phone_number',
        'address',
        'mobile_number',
        'email',
        'user_id',
        'course_id',
        'year_id',
        'img_src'
    ];


    public function getNameAttribute()
    {
        return $this->first_name.' '.$this->middle_name.' '.$this->last_name.' '.$this->suffix;
    }


    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }

    public function level()
    {
        return $this->belongsTo(CourseLevel::class,'year_id');
    }
}
