@extends('layout.main_layout')

@section('main_content')

  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	<h2>All Course Information</h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('course.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Course</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">All Course Information</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>                                              
                    <th>ID</th>      
                    <th>Sort Course</th>      
                    <th>Full Course</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                 <tr>  
                  <th>ID</th>                         
                 <th>Sort Course</th>      
                  <th>Full Course</th>      
                  <th class="text-right">Actions</th>
                                           
                 </tr>
            </tfoot>

                                    
       <tbody>

@foreach($courses as $course)      

       <tr>
          <td>{{ $course->id }}</td>
          <td>{{ $course->sort_course }}</td>
          <td>{{ $course->full_course }}</td>

          <td class="text-right">
		<form method='post' action="{{ url('course/' .$course->id) }}">
            @csrf
		     <a href=""class="btn btn-info">
		      <i class="fa fa-edit"></i>
		     </a>  	


			  @method('DELETE')	            	
			 <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></button> 
			</form>                                 
   </td>
  </tr>

@endforeach
       </tbody>
   </table>
   </div>
  </div>
 </div>





@stop

