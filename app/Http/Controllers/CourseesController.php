<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Course;
use App\Http\Requests\CourseRequest;


class CourseesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->data['courses'] = Course::all();
       return view('course.course',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['mode']     = 'create';
        return view('course.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
    $formdata = $request->all();
     if( Course::create($formdata)){
      Session::flash('message', 'Course Added Successfully');
     }
     
    return redirect()->to('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $this->data['course']   = Course::findOrFail($id);
         $this->data['mode']     = 'Edit';
         return view('course.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data                       = $request->all();
         $course                     = Course::find($id);
         $course->sort_course        = $data['sort_course'];
         $course->full_course        = $data['full_course'];

     if($course->save()) {
            Session::flash('message', 'Course Update Successfully');
        }
        return redirect()->to('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(Course::find($id)->delete() ) {

        Session::flash('message', 'Course Delete Successfully');
        
    }
     return redirect()->to('course');
    }
}
