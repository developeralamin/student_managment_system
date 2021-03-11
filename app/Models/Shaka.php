<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shaka extends Model
{
    use HasFactory;

   protected $fillable =['course_id','shaka_name'];
    
    
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
