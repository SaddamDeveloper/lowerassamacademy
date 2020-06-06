
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2>All Applicants</h2>
                        <div class="clearfix"></div>
                    </div>
                <div>
                     @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif
                </div>
                    <div>
                        <div class="x_content">
                          <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="example">
                            <thead>
                            <tr>
                              <th>Sl. No</th>
                              <th>Application No</th>
                              <th>Name</th>
                              <th>Father's Name</th>
                              <th>Mother's Name</th>
                              <th>Class</th>
                              <th>Session</th>
                              <th>Regitration No</th>
                              <th>DOB</th>
                              <th>Religion</th>
                              <th>Payment Status</th>
                               <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                              @endphp
                              @foreach ($applicants as $applicant)
                                <tr>
                                        <td>{{ $applicant->id }}</td>
                                        <td>{{ $applicant->name}}</td>
                                        <td>{{ $applicant->fn}}</td>
                                        <td>{{ $applicant->mn }}</td>
                                        <td>{{ $applicant->class }}</td>
                                        <td>{{ $applicant->session }}</td>
                                        <td>{{ $applicant->registration_no }}</td>
                                        <td>{{ $applicant->dob }}</td>
                                        <td>{{ $applicant->religion }}</td>
                                        <td>
                                          
                                        </td>
                                        <td> 
                                             <a href='{{route('applicant.show', ['id' => encrypt($applicant->id)])}}' class='btn btn-info' target="_blank">View</a>
                                             {{-- <a href='{{route('applicant.edit', ['id' => encrypt($value->id)])}}' class='btn btn-warning' target="_blank">Edit</a>  --}}
                                       </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                   
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection



