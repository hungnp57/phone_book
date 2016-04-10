@extends('master')
@section('content')



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Danh bạ điện thoại
            <small>Danh sách nhân viên thuộc phòng ban</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#"> Phòng ban</a></li>
            <li class="active">Phòng Quản lý hệ thống</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">

          <div class="col-lg-12 col-xs-12 col-md-12">
            <span class="chuc-vu truong-phong">Trưởng phòng</span>
            <div class="hr"></div>
          </div>
          <div class="col-lg-12 col-xs-12 col-md-12">
          <div class="user-card col-md-5 col-lg-4 col-xs-12">
            <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image col-lg-3" alt="User Image">
              <div class="u0">
                <ul>
                  <li><span class="u1">Nguyễn Phi Hùng</span></li>
                  <li><span class="u2">Quản lý cấp cao</span></li>
                  <li><span class="u3">SĐT: 8700</span></li>
                  <li><span class="u3">Phòng: 101</span></li>
                </div>
                </ul>
            </div>
          </div>
          </div>
          <div class="col-lg-12 col-xs-12 col-md-12">
            <dir class="space"></dir>
            <span class="chuc-vu nhan-vien">Nhân viên</span>
            <div class="hr"></div>
          </div>
          <div class="col-lg-12 col-xs-12 col-md-12">
          <div class="user-card col-md-5 col-lg-4 col-xs-12">
            <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image col-lg-3" alt="User Image">
              <div class="u0">
                <ul>
                  <li><span class="u1">Nguyễn Tuấn Anh</span></li>
                  <li><span class="u2">Nhân viên</span></li>
                  <li><span class="u3">SĐT: 8701</span></li>
                  <li><span class="u3">Phòng: 101</span></li>
                </div>
                </ul>
            </div>
          </div>
          <div class="user-card col-md-5 col-lg-4 col-xs-12">
            <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image col-lg-3" alt="User Image">
              <div class="u0">
                <ul>
                  <li><span class="u1">Đào Minh Chính</span></li>
                  <li><span class="u2">Nhân viên</span></li>
                  <li><span class="u3">SĐT: 8702</span></li>
                  <li><span class="u3">Phòng: 101</span></li>
                </div>
                </ul>
            </div>
          </div>
          <div class="user-card col-md-5 col-lg-4 col-xs-12">
            <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image col-lg-3" alt="User Image">
              <div class="u0">
                <ul>
                  <li><span class="u1">Đỗ Thị Ngọc</span></li>
                  <li><span class="u2">Nhân viên</span></li>
                  <li><span class="u3">SĐT: 8703</span></li>
                  <li><span class="u3">Phòng: 101</span></li>
                </div>
                </ul>
            </div>
          </div>
          <div class="user-card col-md-5 col-lg-4 col-xs-12">
            <div class="user-card-content col-md-12 col-lg-12 col-xs-12">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image col-lg-3" alt="User Image">
              <div class="u0">
                <ul>
                  <li><span class="u1">Nguyễn Xuân Phúc</span></li>
                  <li><span class="u2">Nhân viên</span></li>
                  <li><span class="u3">SĐT: 8704</span></li>
                  <li><span class="u3">Phòng: 101</span></li>
                </div>
                </ul>
            </div>
          </div>
          </div>
          
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@stop