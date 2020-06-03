
@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Slider List</h2>
                        <a class="btn btn-primary pull-right" href="{{route('admin.add_slider_form')}}">Add Slider</a>
                        <div class="clearfix"></div>
                    </div>
                <div>
                </div>
                    <div>
                        <div class="x_content">
                            <table id="slider_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Sl. No</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Slider</th>
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
            var table = $('#slider_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.get_slider_list') }}",
                columns: [
                    {data: 'id', name: 'id',searchable: true},
                    {data: 'title', name: 'title',searchable: true},      
                    {data: 'sub_title', name: 'sub_title',searchable: true},          
                    {data: 'slider', name: 'slider',searchable: true},  
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

