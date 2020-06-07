
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
         <div class="panel-body table-responsive">
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="application_no">Application No.</label>
                    <input type="text" disabled class="form-control" id="application_no" name="application_no" value="{{ $single_applicant->application_no }}">
                </div>
                <div class="col-md-4">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" value="{{$single_applicant->name}}">
                </div>
                <div class="col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$single_applicant->email}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="session">For the Session</label>
                    <select name="session" id="session" class="form-control">
                        <option value="" selected disabled>--SELECT SESSION--</option>
                        <option value="2018" {{$single_applicant->session == '2018'?'selected':''}}>2018</option>
                        <option value="2019" {{$single_applicant->session == '2019'?'selected':''}}>2019</option>
                        <option value="2020" {{$single_applicant->session == '2020'?'selected':''}}>2020</option>
                    </select>
                    @if($errors->has('session'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('session') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="class">Select Course</label>
                    <select name="class" id="class" class="form-control">
                        <option value="" selected disabled>--SELECT CLASS--</option>
                        <option {{$single_applicant->course == 'HS 1st Year'?'selected':''}}>HS 1st Year</option>
                        <option {{$single_applicant->course == 'HS 2nd Year'?'selected':''}}>HS 2nd Year</option>
                    </select>
                    @if($errors->has('class'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('class') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="sex">Sex(M/F)</label>
                    <select name="sex" id="sex" class="form-control">
                        <option value="" selected disabled>--SELECT SEX--</option>
                        <option {{$single_applicant->sex == 'Male'?'selected':''}}>Male</option>
                        <option {{$single_applicant->sex == 'Female'?'selected':''}}>Female</option>
                    </select>
                    @if($errors->has('sex'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" value="{{$single_applicant->dob}}" name="dob">
                    @if($errors->has('dob'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="fn">Father's Name</label>
                    <input type="text" class="form-control" id="fn" name="fn" value="{{ $single_applicant->fn }}">
                    @if($errors->has('fn'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('fn') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="mn">Mother's Name</label>
                    <input type="text" class="form-control" id="mn" name="mn" value="{{ $single_applicant->mn }}">
                    @if($errors->has('mn'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mn') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gname">Guardian's Name</label>
                        <input type="text" class="form-control" id="gname" name="gname" value="{{ $single_applicant->gname }}">
                        @if($errors->has('gname'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('gname') }}</strong>
                        </span>
                        @endif
                        </div>
                </div>
                <div class="col-md-4">
                    <label for="occupation">Occupation of Father/ Guardian</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $single_applicant->occupation }}">
                    @if($errors->has('occupation'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('occupation') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="income">Annual Income of Father/ Guardian(In Rs.)</label>
                        <input type="number" class="form-control" id="income" name="income" value="{{$single_applicant->income}}">
                        @if($errors->has('income'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('income') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $single_applicant->nationality }}">
                    @if($errors->has('nationality'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('nationality') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="religion">Religion</label>
                    <select name="religion" class="form-control">
                        <option value="" selected disabled>--SELECT RELIGION--</option>
                        <option {{$single_applicant->religion == 'Islam'?'selected':''}}>Islam</option>
                        <option {{$single_applicant->religion == 'Hindu'?'selected':''}}>Hindu</option>
                        <option {{$single_applicant->religion == 'Christian'?'selected':''}}>Christian</option>
                        <option {{$single_applicant->religion == 'Jain'?'selected':''}}>Jain</option>
                        <option {{$single_applicant->religion == 'Buddhism'?'selected':''}}>Buddhism</option>
                    </select>
                    @if($errors->has('religion'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('religion') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="cast-comm-group-tribe">Cast</label>
                    <select name="cast" class="form-control">
                        <option value="" selected disabled>--SELECT CASTE--</option>
                        <option {{$single_applicant->cast == 'General'?'selected':''}}>General</option>
                        <option {{$single_applicant->cast == 'EWS'?'selected':''}}>EWS</option>
                        <option {{$single_applicant->cast == 'OBC'?'selected':''}}>OBC</option>
                        <option {{$single_applicant->cast == 'MOBC'?'selected':''}}>MOBC</option>
                        <option {{$single_applicant->cast == 'SC'?'selected':''}}>SC</option>
                        <option {{$single_applicant->cast == 'ST(P)'?'selected':''}}>ST(P)</option>
                        <option {{$single_applicant->cast == 'ST(H)'?'selected':''}}>ST(H)</option>
                    </select>
                    @if($errors->has('cast'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('cast') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="mobile">Contact No</label>
                    <input type="number" name="mobile" class="form-control" id="mobile" value="{{$single_applicant->mobile}}">
                    @if($errors->has('mobile'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <h2>Present Address</h2>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="village">Village/Town</label>
                    <input name="village" class="form-control" id="village" value="{{$single_applicant->vill}}">
                    @if($errors->has('village'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('village') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="po">Post Office</label>
                    <input name="po" class="form-control" id="po" value="{{$single_applicant->po}}">
                    @if($errors->has('po'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('po') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="ps">Police Station</label>
                    <input name="ps" class="form-control" id="ps" value="{{$single_applicant->ps}}">
                    @if($errors->has('ps'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('ps') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="dist">District</label>
                    <input name="dist" class="form-control" id="dist" value="{{$single_applicant->dist}}">
                    @if($errors->has('dist'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('dist') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="state">State</label>
                    <input name="state" class="form-control" id="state" value="{{$single_applicant->state}}">
                    @if($errors->has('state'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="pin">PIN</label>
                    <input type="number" name="pin" class="form-control" id="pin" value="{{$single_applicant->pin}}">
                    @if($errors->has('pin'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('pin') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <h2>Permanent Address</h2>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="p_village">Village/Town</label>
                    <input name="p_village" class="form-control" id="p_village" value="{{$single_applicant->p_vill}}">
                    @if($errors->has('p_village'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_village') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_po">Post Office</label>
                    <input name="p_po" class="form-control" id="p_po" value="{{$single_applicant->p_po}}">
                    @if($errors->has('p_po'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_po') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_ps">Police Station</label>
                    <input name="p_ps" class="form-control" id="p_ps" value="{{$single_applicant->p_ps}}">
                    @if($errors->has('p_ps'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_ps') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="p_dist">District</label>
                    <input name="p_dist" class="form-control" id="p_dist" value="{{$single_applicant->p_ps}}">
                    @if($errors->has('p_dist'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_dist') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_state">State</label>
                    <input name="p_state" class="form-control" id="p_state" value="{{$single_applicant->p_state}}">
                    @if($errors->has('p_state'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_state') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="p_pin">PIN</label>
                    <input type="number" name="p_pin" class="form-control" id="p_pin" value="{{$single_applicant->p_pin}}">
                    @if($errors->has('p_pin'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('p_pin') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <h2>Details of last School attended</h2>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="exam">Name of the Examination Passed</label>
                    <input type="text" class="form-control" id="exam" name="exam" value="{{ $single_applicant->exam }}">
                    @if($errors->has('exam'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('exam') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="registration">Board Registration No</label>
                    <input type="text" class="form-control" id="registration" name="registration" value="{{$single_applicant->registration }}">
                    @if($errors->has('registration'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('registration') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="last_attended_school">Name of the Institution attended last</label>
                    <input type="text" class="form-control" id="last_attended_school" name="last_attended_school" value="{{ $single_applicant->last_attended_school }}">
                    @if($errors->has('last_attended_school'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('last_attended_school') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="last_school_addr">Address of the above institution</label>
                    <textarea class="form-control" id="last_school_addr" name="last_school_addr">{{ $single_applicant->last_school_addr }}</textarea>
                    @if($errors->has('last_school_addr'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('last_school_addr') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-highlight">
                        <thead>
                            <th>Sl. No.</th>
                            <th>Subjects</th>
                            <th>Max Marks</th>
                            <th>Marks/Grade Obtained</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><textarea name="subject" class="form-control">{{$single_applicant->subject}}</textarea></td>
                                <td><input type="number" name="max_mark" value="{{$single_applicant->max_marks}}" class="form-control" /></td>
                                <td><input type="number" name="marks_obtained" value="{{$single_applicant->marks_obtained}}" class="form-control" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="ncc">Are you willing to join NCC?</label><br>
                    <select name="ncc" class="form-control">
                        <option value="">--SELECT ANY--</option>
                        <option {{$single_applicant->ncc == 'Yes'?'selected':''}}>Yes</option>
                        <option {{$single_applicant->ncc == 'No'?'selected':''}}>No</option>
                    </select>
                    @if($errors->has('ncc'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('ncc') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="bsg">Are you willing to join Bharat Scout & Guide?</label><br>
                    <select name="bsg" class="form-control">
                        <option value="">--SELECT ANY--</option>
                        <option  {{$single_applicant->bsg == 'Yes'?'selected':''}}>Yes</option>
                        <option  {{$single_applicant->bsg == 'No'?'selected':''}}>No</option>
                    </select>
                    @if($errors->has('bsg'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('bsg') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="">Are you willing to register as trainee in computer centre?</label>
                    <select name="computer" class="form-control">
                        <option value="">--SELECT ANY--</option>
                        <option  {{$single_applicant->computer == 'Yes'?'selected':''}}>Yes</option>
                        <option  {{$single_applicant->computer == 'No'?'selected':''}}>No</option>
                    </select>
                    @if($errors->has('computer'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('computer') }}</strong>
                    </span>
                    @endif
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="">Have you discontinoud study after passing the qualifying exam?</label>
                        <select name="gap" class="form-control">
                            <option value="">--SELECT ANY--</option>
                            <option  {{$single_applicant->gap == 'Yes'?'selected':''}}>Yes</option>
                            <option  {{$single_applicant->gap == 'No'?'selected':''}}>No</option>
                        </select>
                        @if($errors->has('gap'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('gap') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="">Will you reside in the college Hostel?</label>
                        <select name="hostel" class="form-control">
                            <option value="">--SELECT ANY--</option>
                            <option  {{$single_applicant->hostel == 'Yes'?'selected':''}}>Yes</option>
                            <option  {{$single_applicant->hostel == 'No'?'selected':''}}>No</option>
                        </select>
                        @if($errors->has('hostel'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('hostel') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="placed">Place</label>
                        <input type="text" id="placed1" class="form-control" name="placed1" value="{{ $single_applicant->placed1 }}">
                        @if($errors->has('placed1'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('placed1') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="dated1">Date</label>
                        <input type="date" id="dated1" class="form-control" name="dated1" value="{{ $single_applicant->dated1 }}">
                        @if($errors->has('dated1'))
                        <span class="invalid-feedback" role="alert" style="color:red">
                            <strong>{{ $errors->first('dated1') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



