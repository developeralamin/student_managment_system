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
       $this->data['courses'] = Course::arrforSelect();
       $this->data['shakas'] =  Shaka::arrforSelectShaka();
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
        //
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
        //
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
