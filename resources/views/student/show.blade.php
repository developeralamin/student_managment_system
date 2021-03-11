@extends('layout.main_layout')

@section('main_content')


  <div class="row page-header mb-5">
     <div class="col-md-6">
       <a href="{{ route('student_info.store') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>
     </div>
  </div>

<!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ $student_info->name }} 's Information</h6>
      </div>
  <div class="card-body user_show">

      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <table class="table table-borderless table-striped table-hover mt-4">

              <tr>
                <th class="text-right">Name : </th>
                <td>{{ $student_info->name }}</td>
              </tr>

              <tr>
                <th class="text-right">Father Name : </th>
                <td>{{ $student_info->father_name }}</td>
              </tr>

              <tr>
                <th class="text-right">Course Name : </th>
                <td>{{ $student_info->course->full_course}}</td>
              </tr>

              <tr>
                <th class="text-right">Phone Number : </th>
                <td>{{ $student_info->phone_no }}</td>
              </tr>

              <tr>
                <th class="text-right">Gender : </th>
                <td>{{ ($student_info->gender == 1) ? 'Male': 'Female'}}</td>
              </tr>
          </table>


        </div>
      </div>
     



   </div>
 </div>


@stop