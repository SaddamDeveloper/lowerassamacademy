@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'post','route'=>'student.form.store', 'enctype'=>'multipart/form-data']) }}
               <div class="student admission">
                @if (Session::has('message'))
                <div class="alert alert-success" >{{ Session::get('message') }}</div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                <h3 class="title-default-left title-bar-high">Application Form</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="admission_no">Application No.</label>
                                <input type="text" class="form-control" name="admission_no" disabled value="{{$generatedID}}">
                                <input type="text" name="admission" value="{{$generatedID}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="session">For the Session</label>
                                <select name="session" id="session" class="form-control">
                                    <option value="" selected disabled>--SELECT SESSION--</option>
                                        @if(isset($session) && !empty($session))
                                            @foreach($session as $ss)
                                                <option {{old('session') == $ss->session?'selected':''}}>{{$ss->session}}</option>
                                            @endforeach
                                        @endif
                                </select>
                                @if($errors->has('session'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('session') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course">Course to be Admitted</label>
                                <select name="course" id="course" class="form-control">
                                    <option value="" selected disabled>--SELECT COURSE--</option>
                                    <option {{old('course') == 'HS 1st Year'?'selected':''}}>HS 1st Year</option>
                                    <option {{old('course') == 'HS 2nd Year'?'selected':''}}>HS 2nd Year</option>
                                </select>
                                @if($errors->has('course'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('course') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name of the Candidate (As in HSLC Certificate)</label>
                                <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Enter name">
                                @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sex">Sex(M/F)</label>
                                <select name="sex" id="sex" class="form-control">
                                    <option value="" selected disabled>--SELECT SEX--</option>
                                    <option {{old('sex') == 'Male'?'selected':''}}>Male</option>
                                    <option {{old('sex') == 'Female'?'selected':''}}>Female</option>
                                </select>
                                @if($errors->has('sex'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('sex') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" value="{{old('dob')}}" name="dob">
                                @if($errors->has('dob'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="fn">Father's Name</label>
                            <input type="text" class="form-control" id="fn" name="fn" value="{{ old('fn') }}" placeholder="Enter father's name">
                            @if($errors->has('fn'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('fn') }}</strong>
                            </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-4 mobile-mt-2">
                            <div class="form-group">
                            <label for="mn">Mother's Name</label>
                            <input type="text" class="form-control" id="mn" name="mn" value="{{ old('mn') }}" placeholder="Enter mother's name">
                            @if($errors->has('mn'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('mn') }}</strong>
                            </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="gname">Guardian's Name</label>
                            <input type="text" class="form-control" id="gname" name="gname" value="{{ old('gname') }}" placeholder="Enter parents/guardians name">
                            @if($errors->has('gname'))
                            <span class="invalid-feedback" role="alert" style="color:red">
                                <strong>{{ $errors->first('gname') }}</strong>
                            </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="occupation">Occupation of Father/ Guardian</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" value="{{ old('occupation') }}" placeholder="Enter parents/guardians occupation">
                                @if($errors->has('occupation'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('occupation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="income">Annual Income of Father/ Guardian(In Rs.)</label>
                                <input type="number" class="form-control" id="income" name="income" value="{{old('income')}}" placeholder="Enter parents/guardians income">
                                @if($errors->has('income'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('income') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality') }}" placeholder="Enter Nationality">
                                @if($errors->has('nationality'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('nationality') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="religion">Religion</label>
                                <select name="religion" class="form-control">
                                    <option value="" selected disabled>--SELECT RELIGION--</option>
                                    <option value="Islam" {{old('religion') == 'Islam'?'selected':''}}>Islam</option>
                                    <option value="Hindu" {{old('religion') == 'Hindu'?'selected':''}}>Hindu</option>
                                    <option value="Christian" {{old('religion') == 'Christian'?'selected':''}}>Christian</option>
                                    <option value="Jain" {{old('religion') == 'Jain'?'selected':''}}>Jain</option>
                                    <option value="Buddhism" {{old('religion') == 'Buddhism'?'selected':''}}>Buddhism</option>
                                </select>
                                @if($errors->has('religion'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('religion') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cast-comm-group-tribe">Cast</label>
                                <select name="cast" class="form-control">
                                    <option value="" selected disabled>--SELECT CASTE--</option>
                                    <option value="General" {{old('cast') == 'General'?'selected':''}}>General</option>
                                    <option value="EWS" {{old('cast') == 'EWS'?'selected':''}}>EWS</option>
                                    <option value="OBC" {{old('cast') == 'OBC'?'selected':''}}>OBC</option>
                                    <option value="MOBC" {{old('cast') == 'MOBC'?'selected':''}}>MOBC</option>
                                    <option value="SC" {{old('cast') == 'SC'?'selected':''}}>SC</option>
                                    <option value="ST(P)" {{old('cast') == 'ST(P)'?'selected':''}}>ST(P)</option>
                                    <option value="ST(H)" {{old('cast') == 'ST(H)'?'selected':''}}>ST(H)</option>
                                </select>
                                @if($errors->has('cast'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('cast') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile">Contact No</label>
                                <input type="number" name="mobile" class="form-control" id="mobile" value="{{$student->mobile}}">
                                @if($errors->has('mobile'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{$student->email}}">
                                @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4>Present Address</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="village">Village/Town</label>
                                <input name="village" class="form-control" id="village" value="{{old('village')}}" placeholder="Enter Village or Town">
                                @if($errors->has('village'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('village') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="po">Post Office</label>
                                <input name="po" class="form-control" id="po" value="{{old('po')}}" placeholder="Enter Post Office">
                                @if($errors->has('po'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('po') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ps">Police Station</label>
                                <input name="ps" class="form-control" id="ps" value="{{old('ps')}}" placeholder="Enter Police Station">
                                @if($errors->has('ps'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('ps') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dist">District</label>
                                <input name="dist" class="form-control" id="dist" value="{{old('dist')}}" placeholder="Enter District">
                                @if($errors->has('dist'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('dist') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input name="state" class="form-control" id="state" value="{{old('state')}}" placeholder="Enter State">
                                @if($errors->has('state'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pin">PIN</label>
                                <input type="number" name="pin" class="form-control" id="pin" value="{{old('pin')}}" placeholder="Enter PIN Code">
                                @if($errors->has('pin'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('pin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h4>Permanent Address</h4> 
                                <input type="checkbox" value="{{old('check')}}" name="check" id="check" onclick="filladd()" {{old('check') == 'checked'?'checked':''}}>
                                <small>(If Permanent address is same as Present Address)</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_village">Village/Town</label>
                                <input name="p_village" class="form-control" id="p_village" value="{{old('p_village')}}" placeholder="Enter sVillage or Town">
                                @if($errors->has('p_village'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('p_village') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_po">Post Office</label>
                                <input name="p_po" class="form-control" id="p_po" value="{{old('p_po')}}" placeholder="Enter Post Office">
                                @if($errors->has('p_po'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('p_po') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_ps">Police Station</label>
                                <input name="p_ps" class="form-control" id="p_ps" value="{{old('p_ps')}}" placeholder="Enter Police Station">
                                @if($errors->has('p_ps'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('p_ps') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_dist">District</label>
                                <input name="p_dist" class="form-control" id="p_dist" value="{{old('p_dist')}}" placeholder="Enter District">
                                @if($errors->has('p_dist'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('p_dist') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_state">State</label>
                                <input name="p_state" class="form-control" id="p_state" value="{{old('p_state')}}" placeholder="Enter State">
                                @if($errors->has('p_state'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('p_state') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_pin">PIN</label>
                                <input type="number" name="p_pin" class="form-control" id="p_pin" value="{{old('p_pin')}}" placeholder="Enter PIN Code">
                                @if($errors->has('p_pin'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('p_pin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <h4>Details of last School attended :</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exam">Name of the Examination Passed</label>
                                <input type="text" class="form-control" id="exam" name="exam" value="{{ old('exam') }}" placeholder="Enter last examination passed">
                                @if($errors->has('exam'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('exam') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="registration">Board Registration No</label>
                                <input type="text" class="form-control" id="registration" name="registration" value="{{old('registration')}}" placeholder="Enter Registration No">
                                @if($errors->has('registration'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('registration') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last_attended_school">Name of the Institution attended last</label>
                                <input type="text" class="form-control" id="last_attended_school" name="last_attended_school" value="{{ old('last_attended_school') }}" placeholder="Name of the Institution attended laste">
                                @if($errors->has('last_attended_school'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('last_attended_school') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last_school_addr">Address of the above institution</label>
                                <textarea class="form-control" id="last_school_addr" name="last_school_addr" placeholder="Address of the last institution">{{ old('last_school_addr') }}</textarea>
                                @if($errors->has('last_school_addr'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('last_school_addr') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <h4>Marks Grade obtained in the last Board Examination :</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
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
                                    <td><textarea name="subject" class="form-control">{{old('subject')}}</textarea></td>
                                    <td><input type="number" name="max_mark" value="{{old('max_mark')}}" class="form-control" /></td>
                                    <td><input type="number" name="marks_obtained" value="{{old('marks_obtained')}}" class="form-control" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ncc">Are you willing to join NCC?</label><br>
                                <select name="ncc" class="form-control">
                                    <option value="">--SELECT ANY--</option>
                                    <option {{old('ncc') == 'Yes'?'selected':''}}>Yes</option>
                                    <option {{old('ncc') == 'No'?'selected':''}}>No</option>
                                </select>
                                @if($errors->has('ncc'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('ncc') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bsg">Are you willing to join Bharat Scout & Guide?</label><br>
                                <select name="bsg" class="form-control">
                                    <option value="">--SELECT ANY--</option>
                                    <option  {{old('bsg') == 'Yes'?'selected':''}}>Yes</option>
                                    <option  {{old('bsg') == 'No'?'selected':''}}>No</option>
                                </select>
                                @if($errors->has('bsg'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('bsg') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Are you willing to register as trainee in computer centre?</label>
                                <select name="computer" class="form-control">
                                    <option value="">--SELECT ANY--</option>
                                    <option  {{old('computer') == 'Yes'?'selected':''}}>Yes</option>
                                    <option  {{old('computer') == 'No'?'selected':''}}>No</option>
                                </select>
                                @if($errors->has('computer'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('computer') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Have you discontinoud study after passing the qualifying exam?</label>
                                <select name="gap" class="form-control">
                                    <option value="">--SELECT ANY--</option>
                                    <option  {{old('gap') == 'Yes'?'selected':''}}>Yes</option>
                                    <option  {{old('gap') == 'No'?'selected':''}}>No</option>
                                </select>
                                @if($errors->has('gap'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('gap') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Will you reside in the college Hostel?</label>
                                <select name="hostel" class="form-control">
                                    <option value="">--SELECT ANY--</option>
                                    <option  {{old('hostel') == 'Yes'?'selected':''}}>Yes</option>
                                    <option  {{old('hostel') == 'No'?'selected':''}}>No</option>
                                </select>
                                @if($errors->has('hostel'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('hostel') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
               </div>
               <div class="student admission declarations">
                   <span class="d-block text-center"><h4>DECLARATIONS</h4></span>
                   <div class="row">
                    <div class="col-md-12">
                            <p>1. I Promise to abide by the rules of school and the management.</p>
                            <p>2. I declare that the particulars and documents furnished are correct and true.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="placed">Place</label>
                                <input type="text" id="placed1" class="form-control" name="placed1" value="{{ old('placed1') }}" placeholder="Enter place">
                                @if($errors->has('placed1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('placed1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dated1">Date</label>
                                <input type="date" id="dated1" name="dated1" value="{{ old('dated1') }}" class="form-control">
                                @if($errors->has('dated1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('dated1') }}</strong>
                                </span>
                                @endif
                            </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="photo">Photo(Must be bellow 2MB)</label>
                                <input type="file" id="photo" name="photo" value="{{old('photo')}}" class="form-control">
                                @if($errors->has('photo'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ds">Signature(Must be bellow 2MB)</label>
                                <input type="file" id="ds1" name="ds1" placeholder="Enter Signature" value="{{old('ds1')}}" class="form-control">
                                @if($errors->has('ds1'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('ds1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        <p>1. I agree to the admission of my son/daughter ward in to the class <u>11</u> and i shall be reponsible for his/her conduct and good behaviour during the period of his/her academic career here.</p>
                            <p>2. I agree to prescribed fees without assigning reason.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="placed">Place</label>
                                    <input type="text" id="placed" name="placed2" value="{{old('placed2')}}" class="form-control" placeholder="Enter place">
                                    @if($errors->has('placed2'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('placed2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dated">Date</label>
                                    <input type="date" id="dated2" name="dated2" value="{{old('dated2')}}" class="form-control">
                                    @if($errors->has('dated2'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('dated2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ds">Signature</label>
                                    <input type="file" id="ds2" name="ds2" placeholder="Enter Signature" value="{{old('ds2')}}" class="form-control">
                                    @if($errors->has('ds2'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('ds2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                   </div>
                    <div class="student admission">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Upload necessary Documents</h4>
                            </div>
                            <div id="file_options">
                                <div class="file-group">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="file">File Input</label>
                                            <input type="file" id="file" name="uploaded_file[]" class="form-control">
                                            @if($errors->has('uploaded_file'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('uploaded_file') }}</strong>
                                            </span>
                                            @endif
                                            <input type="hidden" value="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="documentname">Document Name</label>
                                            <input type="text" id="document_name" class="form-control" name="document_name[]" placeholder="Enter document name">
                                            @if($errors->has('document_name'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('document_name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-wrapper">
                                    <a id="file_more" class="btn btn-success">Upload more</a>
                                    <a id="remove_file" class="btn btn-danger">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" style="margin-bottom:10px" id="student-submit-btn">Submit</button>
               </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function(){
        var data = '<div class="file-group"><div class="col-md-6"><div class="form-group"> <label for="">File Input</label> <input type="file" id="" class="form-control" placeholder="Signature of parent\'s/guardian"></div></div><div class="col-md-6"><div class="form-group"> <label for="">Document Name</label> <input type="text" id="" class="form-control" placeholder="Enter document name"></div></div></div>';
        $('#file_more, #remove_file').click(function(e) {
            e.preventDefault();
        });
        $('#file_more').click(function() {
            $('#file_options').append(data);
        });
        $('#remove_file').click(function() {
            var length = $('#file_options').children().length;
            if (length > 1) {
                $('#file_options .file-group:last-child').remove();
            }
        });

    });

    function filladd()
    {
        if(check.checked == true) 
        {
                var village = document.getElementById("village").value;
                var po = document.getElementById("po").value;
                var ps = document.getElementById("ps").value;
                var dist = document.getElementById("dist").value;
                var state = document.getElementById("state").value;
                var pin = document.getElementById("pin").value;
            
                var copyvill = village ;
                var copypo = po ;
                var copyps = ps ;
                var copydist = dist ;
                var copystate = state ;
                var copypin = pin ;

                document.getElementById("p_village").value = copyvill;
                document.getElementById("p_po").value = copypo;
                document.getElementById("p_ps").value = copyps;
                document.getElementById("p_dist").value = copydist;
                document.getElementById("p_state").value = copystate;
                document.getElementById("p_pin").value = copypin;
        }
        else if(check.checked == false)
        {
            document.getElementById("p_village").value='';
            document.getElementById("p_po").value='';
            document.getElementById("p_ps").value='';
            document.getElementById("p_dist").value='';
            document.getElementById("p_state").value='';
            document.getElementById("p_pin").value='';
        }
    }
</script>
@endpush