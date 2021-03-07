<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Course;

class CoursesController extends Controller
{
   public function index()
   {
   	$this->data['courses'] = Course::all();

    return view('course.course',$this->data);
   }

   public function create()
   {
   	  return view('course.create');
   }

  public function store(Request $request)
  {
  	 $formdata = $request->all();
  	 if( Course::create($formdata)){
      Session::flash('message', 'Course Added Successfully');
  	 }
  	 
  	 	 return redirect()->to('course');
  }

  public function edit($id)
  {
     $this->data['course'] = Course::findOrFail($id);
    
  }



  public function destroy($id)
	{
	if(Course::find($id)->delete() ) {

		Session::flash('message', 'Course Delete Successfully');
		
	}
	 return redirect()->to('course');

	}

   
}
