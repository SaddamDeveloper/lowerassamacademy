
@extends('admin.template.admin_master')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
              <div class="count">{{$total_users}}</div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Amount</span>
              <div class="count">{{number_format($total_amount, 2)}}</div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Unpaid</span>
              <div class="count"></div>
            </div>
          </div>
          <br />
          <table class="table table-striped table-bordered table-responsive" cellspacing="0">
            <tr>
              <th>Application No</th>
              <th>Name</th>
              <th>Father's Name</th>
              <th>Mother's Name</th>
              <th>Class</th>
              <th>Payment Status</th>
            </tr>
            @if(isset($student) && !empty($student))
            @foreach($student as $st)
            <tr>
              <td>
                {{$st->application_no}}
              </td>
              <td>
                {{$st->name}}
              </td>
              <td>
                {{$st->fn}}
              </td>
              <td>
                {{$st->mn}}
              </td>
              <td>
                {{$st->course}}
              </td>
              <td>
                @if($st->payment_status == 2)
                  <label class="label label-success">PAID</label>
                @else
                  <label class="label label-warning">NOT PAID</label>
                @endif
              </td>
            </tr>
            @endforeach
            @endif
          </table>
          <a href="{{route('admin.applicants')}}" class="btn btn-primary pull-right">More ...</a>
        </div>
        <!-- /page content -->
        @endsection


