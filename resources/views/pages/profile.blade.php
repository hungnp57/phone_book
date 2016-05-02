@extends('master')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/profile.css') }}" type="text/css">
@stop
@section('content')



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Danh bạ điện thoại
            <small>Thông tin nhân viên</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Hồ sơ</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">

            <div class="profile col-lg-10 col-md-11 col-xs-11 center-block">
              <div class="col-lg-12 col-xs-12 col-md-12">
                <img src="{{asset('dist/img/user2-160x160.jpg') }}" class="col-lg-3 col-xs-8 col-md-4">
                <div class="col-lg-9 col-xs-12 col-md-8">
                  <span class="col-lg-12 col-xs-12 col-md-12" style="text-align: center;font-size: 25px;color: #605ca8; font-weight: bold;margin-top: 40px;">{{$user->name}}</span>
                  <span class="col-lg-12 col-xs-12 col-md-12" style="text-align: center;font-size: 18px;font-style: italic;">Quản lý cấp cao</span>
                  @foreach($number as $n)
                  <span class="col-lg-12 col-xs-12 col-md-12" style="text-align: center;font-size: 18px;">{{$n['phone_type']}}: {{$n['phone_number']}}</span>
                  @endforeach
                </div>
              </div>
              <div class="profile-hr col-lg-10 col-xs-10 col-md-10" style="height: 2px; background-color: #00a65a;margin-top: 0;margin-left: 8.3%;margin-top: 40px;"></div>
              <div class="col-lg-12 col-xs-12 colmd-12" align="center" style="color: #00a65a; font-size: 25px;margin-top: 10px;">PHÒNG BAN</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>Tên phòng/ban: </b>{{$room->room_name}}</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>Số phòng: </b>{{$room->room_number}}</div>
              <div class="profile-hr col-lg-10 col-xs-10 col-md-10" style="height: 2px; background-color: #00a65a;margin-top: 0;margin-left: 8.3%;margin-top: 40px;"></div>
              <div class="col-lg-12 col-xs-12 colmd-12" align="center" style="color: #00a65a; font-size: 25px;margin-top: 10px;">THÔNG TIN CÁ NHÂN</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>Giới tính: </b>{{Auth::user()->sex}}</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>Tuổi: </b>22</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>Ngày sinh: </b>{{Auth::user()->birthday}}</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>Dân tộc: </b>{{Auth::user()->folk}}</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>Quê quán: </b>{{Auth::user()->hometown}}</div>
              <div class="col-lg-12 col-xs-12 colmd-12" style="font-size: 25px;margin-left: 8.3%;margin-top: 10px;"><b>E-mail: </b>{{Auth::user()->email}}</div>

            </div>
          
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@stop