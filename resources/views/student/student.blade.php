@extends('layout.main_layout')

@section('main_content')

  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	<h2>All Student Details</h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('student_info.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> Add New Student</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">All Branch Information</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>                                              
                    <th>ID</th>      
                    <th>Name</th>      
                    <th>Father Name</th>      
                    <th>Course Name</th>      
                    <th>Branch Name</th>      
                    <th>Phone No.</th>      
                    <th>Gender</th>                             
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                  <tr>                                              
                    <th>ID</th>      
                    <th>Name</th>      
                    <th>Father Name</th>      
                    <th>Course Name</th>      
                    <th>Branch Name</th>      
                    <th>Phone No.</th>      
                    <th>Gender</th>                             
                    <th class="text-right">Actions</th>                     
                    </tr>
             </tfoot>

                                    
       <tbody>
        
@foreach($student_infos as $student_info )      

       <tr>
          <td>{{ $student_info->id }}</td>
          <td>{{ $student_info->name}}</td>
          <td>{{ $student_info->father_name }}</td>
          <td>{{ $student_info->course_id }}</td>
          <td>{{ $student_info->shaka_id }}</td>
          <td>{{ $student_info->phone_no }}</td>
          <td>{{ $student_info->gender }}</td>
          <td class="text-right">
  <form method='post' action="{{ route('student_info.destroy',['student_info' => $student_info->id]) }}">
            @csrf

        <a href="{{ route('student_info.show',['student_info' =>$student_info->id]) }}"class="btn btn-info">
          <i class="fa fa-eye"></i>
         </a>   
        <a href="{{ route('student_info.edit',['student_info' =>$student_info->id]) }}"class="btn btn-info">
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

