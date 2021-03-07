@extends('layout.main_layout')

@section('main_content')

  <div class="row page-header mb-5">

   
     <h2>Add New Branch</h2>
  	
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

     <h6 class="m-0 font-weight-bold text-primary">
      Add New Branch
      </h6>
            
     </div>
      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">

   {{--  @if($mode == 'Edit')

    {!! Form::model($course, ['route' =>['course.update',$course->id],'method' => 'put']) !!}

    @else --}}

    {!! Form::open(['route' => 'shaka.store','method' => 'post']) !!}

    {{-- @endif --}}

  <div class="form-group">
    <label for="sort_course">Full Course <span class="text-danger">*</span> </label>
  
     {{ Form::select('course_id',$courses ,NULL,[ 'class'=>'form-control', 'id' => 'course', 'placeholder' => 'Select Course Name' ])}}
 
  </div>

  <div class="form-group">
    <label for="branch_name">Branch Name<span class="text-danger">*</span></label>
     {{ Form::text('shaka_name', NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => 'Enter Branch Name' ]) }}
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>





@stop

