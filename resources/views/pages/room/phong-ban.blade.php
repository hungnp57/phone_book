@extends('master')
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

          <div class="col-lg-12 col-xs-12 col-md-12">
            <span class="chuc-vu truong-phong">Tầng 1</span>
            <div class="hr"></div>
          </div>
          <div class="col-lg-12 col-xs-12 col-md-12">
            <a href="{{URL::to('/phong-ban/id=1')}}" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Ban quản lý hệ thống</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Nguyễn Phi Hùng</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 101</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 5</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
            <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Phòng tạp vụ</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Nguyễn Xuân Mai</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 102</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 6</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
            <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Phòng bảo vệ</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Văn Thế Thái</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 103</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 10</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
            <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Tổ Kỹ thuật</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Nguyễn Trường Giang</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 104</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 7</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-12 col-xs-12 col-md-12">
            <dir class="space"></dir>
            <span class="chuc-vu nhan-vien">Tầng 2</span>
            <div class="hr"></div>
          </div>
          <div class="col-lg-12 col-xs-12 col-md-12">
          <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Phòng tài chính - pháp lý</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Nguyễn Thị Phương</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 105</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 22</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
            <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Tổ Xây dựng</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Nguyễn Trung Kiên</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 106</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 12</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
            <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Ban Quản lý dự án</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Anh Thanh Hoa</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 107</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 6</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
            <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Tổ pháp lý</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Đinh Nhật Ánh</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 108</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 10</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
            <a href="/id=1" class="a-room">
              <div class="room-card col-md-5 col-lg-4 col-xs-12">
                <div class="room-card-content col-md-12 col-lg-12 col-xs-12">
                  <div class="u0">
                    <ul>
                      <li><span class="u1">Phòng bảo vệ</span></li>
                      <li><span class="u2"><b>Trưởng phòng: </b>Nguyễn Phi Hùng</span></li>
                      <li><span class="u3"><b>Phòng số: </b> 101</span></li>
                      <li><span class="u3"><b>Nhân viên: </b> 6</span></li>
                    </div>
                    </ul>
                </div>
              </div>
            </a>
          
          </div>
          
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@stop