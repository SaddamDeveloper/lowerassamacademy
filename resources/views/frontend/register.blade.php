@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if (Session::has('message'))
            <div class="alert alert-success" >{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            {{ Form::open(array('route' => 'student.registration.store', 'method' => 'post', 'class' => 'student')) }}
            <h3 class="title-default-left title-bar-high">Student Registration</h3>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter name">
                    @if($errors->has('name'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                    @if($errors->has('email'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="phone2">Mobile Number</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Enter phone">
                    @if($errors->has('mobile'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if($errors->has('password'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    @if($errors->has('password_confirmation'))
                    <span class="invalid-feedback" role="alert" style="color:red">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <p class="text-center" style="padding-top: 10px; margin-bottom: 0;">Already registered ? <a href="{{route('student.login')}}">Click here</a></p>
            </form>
        </div>
    </div>
</div>
@stop
