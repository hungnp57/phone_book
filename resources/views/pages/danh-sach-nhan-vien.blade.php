
@extends('master')
@section('meta')
@stop
@section('css')
<link rel="stylesheet" href="{{asset('/plugins/datatables/dataTables.bootstrap.css')}}">
@stop
@section('content')



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Danh bạ điện thoại
            <small>Danh sách nhân viên</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Danh sách nhân viên</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh sách nhân viên</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Mã nhân viên</th>
                        <th>Họ tên</th>
                        <th>Chức vụ</th>
                        <th>Phòng</th>
                        <th>Ban</th>
                        <th>Tầng</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($arrays as $array)
                      <tr>
                      
                        <td>{{$array['user_id']}}</td>
                        <td>{{$array['user_name']}}</td>
                        <td>{{$array['position']}}</td>
                        <td>{{$array['room_number']}}</td>
                        <td>{{$array['room_name']}}</td>
                        <td>{{$array['floor']}}</td>
                        <td>{{$array['birthday']}}</td>
                        <td>{{$array['address']}}</td>
                      
                      </tr>

                      @endforeach
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Mã nhân viên</th>
                        <th>Họ tên</th>
                        <th>Chức vụ</th>
                        <th>Phòng</th>
                        <th>Ban</th>
                        <th>Tầng</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@stop
@section('script')
<script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });   
</script>
@stop
