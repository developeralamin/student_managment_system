<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Shaka;
use App\Models\Student_info;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Session;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->data['student_infos']=Student_info::all();

       return view('student.student',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->data['mode']           = 'create';
       $this->data['courses']       = Course::arrforSelect();
       $this->data['shakas']        =  Shaka::arrforSelectShaka();
       return view('student.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $formdata = $request->all();
       
        Student_info::create($formdata);

        return redirect()->to('student_info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['student_info']       = Student_info::find($id);
        $this->data['tab_menu']           ='user_info';

        return view('student.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $this->data['courses']        = Course::arrforSelect();
       $this->data['student_info']   =Student_info::findOrFail($id);
       $this->data['mode']           = 'Edit';

       return view('student.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $data                              = $request->all();
        
        $student_info                      = Student_info::find($id);
        $student_info->name                = $data['name'];
        $student_info->father_name         = $data['father_name'];
        $student_info->course_id           = $data['course_id'];
        $student_info->phone_no            = $data['phone_no'];
        $student_info->gender              = $data['gender'];

        if( $student_info->save() ) {
            Session::flash('message', 'Student Updated Successfully');
        }
        
        return redirect()->to('student_info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
            {
         if(Student_info::find($id)->delete() ) {

            Session::flash('message', 'Student Delete Successfully');
                
         }
         return redirect()->to('student_info');
        }
}
