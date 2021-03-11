<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_info extends Model
{
    use HasFactory;

   protected $fillable =['name','father_name','course_id','phone_no','gender'];


 public static function arrforSelect(){
 	$arr = [];
    $courses = Course::all(); 	
        foreach ($courses as $course) {
            $arr[$course->id] = $course->full_course;
        }

        return $arr;
 }

 public static function arrforSelectShaka(){
 	$arr2 = [];
    $shakas = Shaka::all(); 	
        foreach ($shakas as $shaka) {
            $arr[$shaka->id] = $shaka->shaka_name;
        }

        return $arr2;
 }

 public function course()
   {
   	  return $this->belongsTo(Course::class);
   }

}
