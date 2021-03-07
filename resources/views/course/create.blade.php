@extends('layout.main_layout')

@section('main_content')

  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	<h2>Add New Course</h2>
  	 </div>
  	 
  	 	
  </div>

<!-- DataTales Example -->

<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Add New Course</h6>
     </div>
      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">
    
<form method="POST"  action="{{ route('course')}}">
  @csrf

  <div class="form-group">
    <label for="sort_course">Sort Course <span class="text-danger">*</span> </label>
    <input  required type="text" name="sort_course" class="form-control"  placeholder="Enter your Sort Course Name">
  </div>

  <div class="form-group">
    <label for="full_course">Full Course<span class="text-danger">*</span></label>
    <input required type="text" name="full_course" class="form-control" placeholder="Enter your Full Course Name">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>                           
                                    
   </div>
   </div>
  
 </div>





@stop

