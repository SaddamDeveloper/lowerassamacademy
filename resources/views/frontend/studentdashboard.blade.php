@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="pay-now-box text-center" style="padding: 180px 0;">
                {{-- @if(isset($payment->buyer_email) && !empty($payment->buyer_email))

                @else --}}
                    @if($student->payment_status == 1)
                        <a href="{{route('frontend.payment')}}" class="btn btn-success">PAY</a>
                    @elseif($student->payment_status == 2)
                    <div id="DivIdToPrint">    
                        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                            <div class="row">
                                <div class="col-xs-7 col-sm-7 col-md-7">
                                    <address>
                                        <strong>Recieve with Thanks From</strong>
                                        <br>
                                        {{$student->name}}
                                        <br>
                                        {{$pay->email}}, 
                                        <br>
                                        <abbr title="Phone">Phone:</abbr> {{$student->mobile}}<br>
                                        <abbr title="Payment Id">Transaction ID:</abbr> {{$pay->transaction_id}}
                                    </address>
                                </div>
                                <div class="col-xs-5 col-sm-5 col-md-5 text-right">
                                    <p style="width: 100%">
                                        <em>Date:{{$pay->created_at}}</em>
                                    </p>
                                    <p>
                                        <em>Receipt #: LAA2020{{$pay->id}}</em>
                                    </p>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="text-center">
                                    <h1>Reciept</h1>
                                </div>
                                </span>
                            <table class="table table-hover" style="margin-top: 130px;">
                                    <thead>
                                        <tr>
                                            <th>Service</th>
                                           
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-md-8"><em>One Time Admission Form Fees</em></h4></td>
                                            
                                            <td class="col-md-2 text-center">Rs. {{$pay->amount}}</td>
                                            <td class="col-md-2 text-center">Rs. {{$pay->amount}}</td>
                                        </tr>
                                       
                                            <td>   </td>
                                           
                                            <td class="text-right">
                                            <p>
                                                <strong>Subtotal: </strong>
                                            </p>
                                            <p>
                                                <strong>Tax: </strong>
                                            </p></td>
                                            <td class="text-center">
                                            <p>
                                                <strong>Rs. {{$pay->amount}}</strong>
                                            </p>
                                            <p>
                                                <strong>Rs. 0</strong>
                                            </p></td>
                                        </tr>
                                        <tr>
                                            <td>   </td>
                                          
                                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                            <td class="text-center text-danger"><h4><strong>Rs. {{$pay->amount}}</strong></h4></td>
                                        </tr>
                                    </tbody>
                                </table>
                           
                               </td>
                            </div>
                        </div>
                    </div>
                        <button type="button" class="btn btn-success btn-lg btn-block" onclick='printDiv();'>
                            Print   <span class="glyphicon glyphicon-chevron-right"></span>
                        </button>
                    @else
                        <a href="{{route('frontend.student_admission')}}" class="btn btn-success">FILL UP THE FORM</a>
                    @endif
                {{-- @endif --}}
                </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function printDiv() 
{

 var divToPrint=document.getElementById('DivIdToPrint');

 var newWin=window.open('','Print-Window');

 newWin.document.open();

 newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

 newWin.document.close();

 setTimeout(function(){newWin.close();},10);

}
</script>
@endsection