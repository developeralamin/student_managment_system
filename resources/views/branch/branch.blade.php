@extends('layout.main_layout')

@section('main_content')

  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	<h2>All Branch Information</h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('shaka.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Branch</a>
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
                    <th>Course Name</th>      
                    <th>Branch Name</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                 <tr>                                              
                    <th>ID</th>      
                    <th>Course Name</th>      
                    <th>Branch Name</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
            </tfoot>

                                    
       <tbody>
        
@foreach($shakas as $shaka)      

       <tr>
          <td>{{ $shaka->id }}</td>
          <td>{{ $shaka->course->full_course}}</td>
          <td>{{ $shaka->shaka_name }}</td>
          <td class="text-right">
  <form method='post' action="{{ route('shaka.destroy',['shaka' => $shaka->id]) }}">
            @csrf
        <a href="{{ route('shaka.edit',['shaka' =>$shaka->id]) }}"class="btn btn-info">
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

