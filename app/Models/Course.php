<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['sort_course','full_course'];


 public static function arrforSelect(){
 	$arr = [];
    $courses = Course::all(); 	
        foreach ($courses as $course) {
            $arr[$course->id] = $course->full_course;
        }

        return $arr;
 }

 public function shaka()
   {
   	  return $this->hasMany(Shaka::class);
   }


 public function student_info()
   {
      return $this->hasMany(Student_info::class);
   }

   
}
