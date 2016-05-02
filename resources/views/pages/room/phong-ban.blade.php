@extends('master')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/room.css') }}" type="text/css">
@stop
@section('content')



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Danh bạ điện thoại
            <small>Danh sách phòng ban</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Danh sách phòng ban</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              @foreach($floors as $floor)
          <div class="col-lg-12 col-xs-12 col-md-12">
            <span class="chuc-vu truong-phong">Tầng {{$floor}}</span>
            <div class="hr"></div>
          </div>
          @foreach($arrays as $array)
          @if($array['floor']==$floor)
          <div class="col-lg-12 col-xs-12 col-md-12">
            <a href="{{URL::to('/phong-ban/id=1')}}" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Ban {{$array['room_name']}}</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>{{$array['master']}}</span></li>
                      <li><span class="u3"><b>Phòng số: </b>{{$array['room_number']}}</span></li>
                      <li><span class="u3"><b>Nhân viên: </b></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endif
          @endforeach
          @endforeach
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@stop