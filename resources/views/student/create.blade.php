@extends('layout.main_layout')

@section('main_content')

  <div class="row page-header mb-5">
  	 @if($mode == 'Edit')
       <div class="col-md-6">
       	 <h2>Update <strong> {{ $student_info->name }}</strong> information</h2>
       </div>
       @else
       <div class="col-md-6">
       	 <h2>Add New Student</h2>
       </div>
       @endif
   
  	<div class="col-md-6 text-right">
  	 	<a href="{{ route('student_info.store') }}" class="btn btn-info"> <i class="fa fa-minus"></i> Back </a>
  	 </div>
  </div>
  
@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<!-- DataTales Example -->

<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
  @if($mode == 'Edit')
  <h6 class="m-0 font-weight-bold text-primary">
     Update <strong> {{ $student_info->name }}</strong> information
      </h6>
   @else 
<h6 class="m-0 font-weight-bold text-primary">
      Add New Student
      </h6>
  @endif          
     </div>
      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">

    @if($mode == 'Edit')

    {{  Form::model($student_info, ['route' =>['student_info.update',$student_info->id], 
    'method' => 'put']) }}

    @else

    {!! Form::open(['route' => 'student_info.store','method' => 'post']) !!}

    @endif



  <div class="form-group">
    <label for="branch_name"> Name<span class="text-danger">*</span></label>
     {{ Form::text('name', NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => ' Name' ]) }}
  </div>

<div class="form-group">
    <label for="branch_name"> Father Name<span class="text-danger">*</span></label>
     {{ Form::text('father_name', NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => 'Father Name' ]) }}
  </div>

  <div class="form-group">
    <label for="sort_course">Full Course <span class="text-danger">*</span> </label>
  
     {{ Form::select('course_id',$courses ,NULL,[ 'class'=>'form-control', 'id' => 'course', 'placeholder' => 'Select Course Name' ])}}
 
  </div>

<div class="form-group">
    <label for="branch_name">Phone No<span class="text-danger">*</span></label>
     {{ Form::text('phone_no', NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => 'Phone Number' ]) }}
  </div>


<div class="form-group">
    <label for="branch_name">Gender<span class="text-danger">*</span></label>
  {{  Form::select('gender',['1'=>'Male','0'=>'Female'],NULL,['class '=>'form-control','id' => 'product']) }}
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>





@stop

