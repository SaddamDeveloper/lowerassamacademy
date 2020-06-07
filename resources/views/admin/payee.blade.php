
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{$user->name}}</h2>
                        <div class="clearfix"></div>
                    </div>
         <div class="panel-body table-responsive">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="application_no">TranslationID.</label>
                    <input type="text" disabled class="form-control" id="application_no" name="application_no" value="{{ $payee->transaction_id }}">
                </div>
                <div class="col-md-6">
                    <label for="Name">Amount</label>
                    <input type="text" class="form-control" value="{{number_format($payee->amount, 2)}}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="email">Payment Receipt</label>
                    <img src="{{asset('frontend/student/img/'.$payee->payment_reciept)}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



