
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Notice List</h2>
                        <a class="btn btn-primary pull-right" href="{{route('admin.add_notice_form')}}">Add Notice</a>
                        <div class="clearfix"></div>
                    </div>
                <div>
                </div>
                    <div>
                        <div class="x_content">
                            <table id="notice_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Sl. No</th>
                                    <th>Title</th>
                                    <th>Notice</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>                       
                                </tbody>
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
            var table = $('#notice_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.get_notice_list') }}",
                columns: [
                    {data: 'id', name: 'id',searchable: true},
                    {data: 'title', name: 'title',searchable: true},      
                    {data: 'notice', name: 'notice',searchable: true},      
                    {data: 'status', name: 'status', render:function(data, type, row){
                      if (row.status == '1') {
                        return "<button class='btn btn-info'>Active</a>"
                      }else{
                        return "<button class='btn btn-danger'>Deactive</a>"
                      }                        
                    }},       
                    {data: 'action', name: 'action',searchable: true},      
                ]
            });
        })
    </script>
@endsection

