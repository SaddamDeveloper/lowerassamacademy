@extends('master')
@section('content')
     <div class="breadcumbs-area breadcumbs-bg-1 bc-area-padding">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h2>Payment</h2>
                                <span><a href="index.html">home</a> / Payment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcumbs Area -->
        
        <!-- Start Services Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    
                    <div id="DivIdToPrint">    
                        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                            
                            <div class="row" >
                                <div class="text-center">
                                    <h2>Please Pay the Amount Rs. 500</h2>
                                </div>
                                <table class="table">
                                    <tr>
                                        <th>Account No:</th>
                                        <td>33473332669</td>
                                        <th>IFSC Code:</th>
                                        <td>SBIN0011793</td>
                                    </tr>
                                    <tr>
                                        <th>Payable At</th>
                                        <td>KAYAKUCHI SBI BRANCH</td>
                                    </tr>
                                </table>        
                               </td>
                            </div>
                        </div>
                    </div>
                    <div id="DivIdToPrint">    
                        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                            
                            <div class="row" >
                                <div class="text-center">
                                    <h2>If Already Paid</h2>
                                </div>
                                {{ Form::open(array('route' => 'student.pay', 'method' => 'post', 'enctype'=>'multipart/form-data', 'class' => 'student')) }}
                                <table class="table">
                                    <tr>
                                        <th>Translation ID:</th>
                                        <td>
                                            <input type="text" name="transaction_id" class="form-control" value="{{old('transaction_id')}}" placeholder="Enter Translation ID">
                                            @if($errors->has('transaction_id'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('transaction_id') }}</strong>
                                            </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Payment Receipt:</th>
                                        <td>
                                            <input type="file" name="payment_reciept" class="form-control" placeholder="Enter Payment Receipt">
                                            @if($errors->has('payment_reciept'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('payment_reciept') }}</strong>
                                            </span>
                                            @endif
                                        </td>
                                    </tr>
                                    
                                </table>        
                                <input type="submit" value="Submit" class="btn btn-info pull-right">
                                </form>
                               </td>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="space-tb-30"></div>
   
                
            </div>
        </div>

@endsection
