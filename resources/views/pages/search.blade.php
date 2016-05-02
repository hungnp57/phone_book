
@extends('master')
@section('meta')
@stop
@section('css')
<link rel="stylesheet" href="{{ asset('/css/search.css') }}" type="text/css">
<style type="text/css">
  .modal-dialog{
position: fixed;
left: 0;
right: 0;
bottom: 40%;
}
</style>
@stop
@section('content')



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Danh bạ điện thoại
            <small>Tìm kiếm</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Tìm kiếm</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                  <p>Không tìm thấy kết quả theo yêu cầu</p>
                </div>
              </div>

            </div>
          </div>
          <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                  <p>Đã xảy ra lỗi! Vui lòng thử lại.</p>
                </div>
              </div>

            </div>
          </div>
          
             <form class="col-lg-10 col-xs-10 col-md-10" role="search" action="{{URL::to('search')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
              <div class="input-group add-on">
                <input class="form-control col-lg-12 col-xs-12 col-md-12 _input_search" placeholder="Tìm kiếm" name="srch_item" id="srch-term" type="text" style="height: 50px;">
                <div class="input-group-btn ">
                  <button class="btn btn-default send-msg" type="submit" style="height: 50px; width: 50px;"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
                <div class="checkbox col-lg-12 col-xs-12 col-md-12">
                    <label class="col-lg-4 col-xs-4 col-md-4"><input type="checkbox" value="1" checked name="all">Tất cả</label>
                    <label class="col-lg-4 col-xs-4 col-md-4"><input type="checkbox" value="1" name="room_number" id="cb1">Số phòng</label>
                    <label class="col-lg-4 col-xs-4 col-md-4"><input type="checkbox" value="1" name="code">Mã nhân viên</label>
                    <label class="col-lg-4 col-xs-4 col-md-4"><input type="checkbox" value="1" name="user_name">Tên nhân viên</label>
                    <label class="col-lg-4 col-xs-4 col-md-4"><input type="checkbox" value="1" name="room_name">Tên phòng</label>
                    <label class="col-lg-4 col-xs-4 col-md-4"><input type="checkbox" value="1" name="position">Chức vụ</label>
                    <label class="col-lg-4 col-xs-4 col-md-4"><input type="checkbox" value="1" name="floor">Tầng</label>
                    
                </div>
                <div class="output col-lg-12 col-xs-12 col-md-12">
                </div>
            </form>
            <div class="col-lg-10 col-xs-10 col-md-10 center-block" style="height: 100px;">
              <div class="col-lg-2 loading"  style="position: absolute; display:none; z-index:999;top:30%;margin: 0 auto;left: -50px;right: -50px;">
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw "></i>
                <span class="sr-only">Loading...</span>
              </div>
              <div class="item-search col-lg-12 col-xs-12 col-md-12">
                @if(!empty($arrays))
                 @foreach($arrays as $array)
                 @if($array['type']==1)
                 <a target="_blank" href="{{URL::to('ho-so/id=')}}{{$array['user_id']}}">
                    <div class="user-card col-md-12 col-lg-12 col-xs-12">
                      <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
                        <div class="item-text col-md-9 col-lg-9 col-xs-12">
                            <span class="u1 col-md-6 col-lg-6 col-xs-12">Họ Tên: {{$array['user_name']}}</span>
                            <span class="u2 col-md-6 col-lg-6 col-xs-12">Mã nhân viên: {{$array['ma_nhan_vien']}}</span>
                            <span class="u2 col-md-6 col-lg-6 col-xs-12">Chức vụ: {{$array['position']}}</span>
                            <span class="u3 col-md-6 col-lg-6 col-xs-12">SĐT: {{$array['phone_number']}}</span>
                            <span class="u3 col-md-6 col-lg-6 col-xs-12">Phòng ban: {{$array['room_name']}}</span>
                        </div>
                        <input type="button" class="col-md-3 col-lg-3 col-xs-12" value="Thêm vào danh sách"style=" height: 30px;">
                      </div>
                    </div>
                  </a>
                  @endif
                  @if($array['type']==2)
                 <a target="_blank" href="{{URL::to('phong-ban/id=')}}{{$array['room_id']}}">
                    <div class="user-card col-md-12 col-lg-12 col-xs-12">
                      <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
                        <div class="item-text col-md-9 col-lg-9 col-xs-12">
                            <span class="u1 col-md-6 col-lg-6 col-xs-12">Phòng/Ban: {{$array['room_name']}}</span>
                            <span class="u2 col-md-6 col-lg-6 col-xs-12">Số phòng: {{$array['room_number']}}</span>
                            <span class="u2 col-md-6 col-lg-6 col-xs-12">Tầng: {{$array['room_floor']}}</span>
                            <span class="u3 col-md-6 col-lg-6 col-xs-12">Trưởng phòng: {{$array['master_name']}}</span>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xs-12" style="height: 30px;"></div>
                      </div>
                    </div>
                  </a>
                  @endif
                  @endforeach
                @endif
                <!-- <div class="user-card col-md-12 col-lg-12 col-xs-12">
                  <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
                    <div class="item-text col-md-9 col-lg-9 col-xs-12">
                        <span class="u1 col-md-6 col-lg-6 col-xs-12">Họ Tên: Nguyễn Phi Hùng</span>
                        <span class="u2 col-md-6 col-lg-6 col-xs-12">Chức vụ: Trưởng phòng</span>
                        <span class="u3 col-md-6 col-lg-6 col-xs-12">SĐT: 8888</span>
                        <span class="u3 col-md-6 col-lg-6 col-xs-12">Phòng ban: Quản lý hệ thống</span>
                    </div>
                    <input type="button" class="col-md-3 col-lg-3 col-xs-12" value="Thêm vào danh sách"style="height: 30px;">
                  </div>
                </div> -->
              </div>
            </div>
          
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@stop
@section('script')
<script type="text/javascript">
      $(".send-msg").click(function(e){

        e.preventDefault();

        var token = $("input[name='_token']").val();
        var input = $("input[name='srch_item']").val();
        var all = $("input[name='all']").val();
        var room_number = $("input[name='room_number']").val();
        var code = $("input[name='code']").val();
        var user_name = $("input[name='user_name']").val();
        var room_name = $("input[name='room_name']").val();
        var position = $("input[name='position']").val();
        var floor = $("input[name='floor']").val();
        $('.item-search').text('');

        if(input != ''){
            $.ajax({

                type: "POST",

                url: "{{URL::to('search')}}",

                dataType: "json",

                data: {'_token':token,'srch_item':input,'all':all,'room_number':room_number,'code':code,'user_name':user_name,'room_name':room_name,'position':position,'floor':floor},
                beforeSend:function(){
                    $(".loading").css("display", "block");
                },
                complete:function(){
                    $(".loading").css("display", "none");
                },
                error:function(){
                  $('#myModal2').modal('show');
                  setTimeout(function(){$('#myModal2').modal('hide')},2000);
                },
                success:function(data){
                  $(".loading").css("display", "none");
                  data.forEach(function(element, index, array){             
                  $user = '<a  target="_blank" href="'+ "{{URL::to('ho-so/id=')}}"+element['user_id']+'">'+'<div class="user-card col-md-12 col-lg-12 col-xs-12">'+
                            '<div class="user-card-content col-md-12 col-lg-12 col-xs-12">'+
                              '<div class="item-text col-md-9 col-lg-9 col-xs-12">'+
                                '<span class="u1 col-md-6 col-lg-6 col-xs-12">Họ Tên: '+element['user_name']+'</span>'+
                                '<span class="u2 col-md-6 col-lg-6 col-xs-12">Mã nhân viên: '+element['ma_nhan_vien']+'</span>'+
                                '<span class="u2 col-md-6 col-lg-6 col-xs-12">Chức vụ: '+element['position']+'</span>'+
                                '<span class="u3 col-md-6 col-lg-6 col-xs-12">SĐT: '+element['phone_number']+'</span>'+
                                '<span class="u3 col-md-6 col-lg-6 col-xs-12">Phòng ban: '+element['room_name']+'</span>'+
                              '</div>'+
                              '<input type="button" class="col-md-3 col-lg-3 col-xs-12" value="Thêm vào danh sách"style="height: 30px;">'+
                            '</div>'+
                          '</div></a>';
                  $('.item-search').append($user);
                  });
                }

            });

        }else{

            alert("Vui lòng nhập nội dung tìm kiếm.");

        }

    })
</script>
<script type="text/javascript">
@if(empty($arrays))
  @if(!empty($send))
        @if($send==1)
          $('#myModal').modal('show');
          setTimeout(function(){$('#myModal').modal('hide')},2000);
          $send=0;
        @endif
  @endif
@endif
</script>
@stop
