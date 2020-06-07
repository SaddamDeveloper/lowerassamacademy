
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
                          <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="applicant_list">
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
@section('script')
    <script>
        $(function(){
            var table = $('#applicant_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.get_applicant_list') }}",
                columns: [
                    {data: 'id', name: 'id',searchable: true},
                    {data: 'application_no', name: 'application_no',searchable: true},      
                    {data: 'name', name: 'name',searchable: true},      
                    {data: 'fn', name: 'fn',searchable: true},      
                    {data: 'mn', name: 'mn',searchable: true},      
                    {data: 'course', name: 'course',searchable: true},      
                    {data: 'session', name: 'session',searchable: true},      
                    {data: 'registration', name: 'registration',searchable: true},      
                    {data: 'dob', name: 'dob',searchable: true},      
                    {data: 'religion', name: 'religion',searchable: true},      
                    {data: 'payment_status', name: 'payment_status', render:function(data, type, row){
                      if (row.payment_status == '1') {
                        return "<label class='label label-warning'>Not Paid</label>"
                        }else if(row.payment_status == '2'){
                          return "<label class='label label-success'>Paid</label>"
                          }                        
                    }},      
                    {data: 'action', name: 'action',searchable: true},      
                ]
            });
        })
    </script>
@endsection



