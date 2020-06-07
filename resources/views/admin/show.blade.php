
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{$single_applicant->name}}</h2>
                        <div class="clearfix"></div>
                    </div>
                    <a href="javascript:window.print()" class="btn btn-success pull-right mb-2">Print</a>
                    <div class="col-md-12">
                        {{-- <a href="{{ route('applicant.pdf', ['id' => $single_applicant->id])}}" class="btn btn-warning pull-right mb-2">Export PDF</a> --}}
                        <div class="panel panel-primary">
                            <div class="panel-body table-responsive">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/student/img/'.$single_applicant->photo)}}" width="120"/>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/student/img/'.$single_applicant->ds1)}}" width="100"/>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-responsive" cellspacing="0">
                                    <tr>
                                        <th>Application No</th>
                                        <td>{{$single_applicant->application_no}}</td>
                                        <th>Name</th>
                                        <td>{{$single_applicant->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Father's Name</th>
                                        <td>{{$single_applicant->fn}}</td>
                                        <th>Mother's Name</th>
                                        <td>{{$single_applicant->mn}}</td>
                                    </tr>
                                    <tr>
                                        <th>DOB</th>
                                        <td>{{$single_applicant->dob}}</td>
                                        <th>Registration No</th>
                                        <td>{{$single_applicant->registration}}</td>
                                    </tr>
                                    <tr>
                                        <th>Religion</th>
                                        <td>{{$single_applicant->religion}}</td>
                                        <th>Cast</th>
                                        <td>{{$single_applicant->cast}}</td>
                                    </tr>
                                    <tr>
                                        <th>Village</th>
                                        <td>{{$single_applicant->vill}}</td>
                                        <th>P.O</th>
                                        <td>{{$single_applicant->po}}</td>
                                    </tr>
                                    <tr>
                                        <th>P.S</th>
                                        <td>{{$single_applicant->ps}}</td>
                                        <th>Dist</th>
                                        <td>{{$single_applicant->dist}}</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>{{$single_applicant->state}}</td>
                                        <th>Pin</th>
                                        <td>{{$single_applicant->pin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Attended Exam</th>
                                        <td>{{$single_applicant->exam}}</td>
                                        <th>Last Attended School</th>
                                        <td>{{$single_applicant->last_attended_school}}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Attended School Address</th>
                                        <td>{{$single_applicant->last_school_addr}}</td>
                                        <th>Subjects</th>
                                        <td>{{$single_applicant->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Max Marks</th>
                                        <td>{{$single_applicant->max_marks}}</td>
                                        <th>Marks Obtained</th>
                                        <td>{{$single_applicant->marks_obtained}}</td>
                                    </tr>
                                    <tr>
                                        <th>Are you willing to join NCC?</th>
                                        <td>{{$single_applicant->ncc}}</td>
                                        <th>Are you willing to join Bharat Scout & Guide?</th>
                                        <td>{{$single_applicant->bsg}}</td>
                                    </tr>
                                    <tr>
                                        <th>Are you willing to register as trainee in computer centre?</th>
                                        <td>{{$single_applicant->computer}}</td>
                                        <th>Have you discontinoud study after passing the qualifying exam?</th>
                                        <td>{{$single_applicant->gap}}</td>
                                    </tr>
                                    <tr>
                                        <th>Will you reside in the college Hostel?</th>
                                        <td>{{$single_applicant->hostel}}</td>
                                        <th>Place</th>
                                        <td>{{$single_applicant->placed1}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td>{{$single_applicant->dated1}}</td>
                                        <th>Guardian/Parents Signature</th>
                                        <td><img src="{{asset('frontend/student/img/'.$single_applicant->ds2)}}" width="100" height="40"/>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
@endsection



