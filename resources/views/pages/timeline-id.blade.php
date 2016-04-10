@extends('master')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Danh bạ điện thoại
            <small>Trang chính</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Tìm kiếm nâng cao</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
            <!-- Left col -->
            <section class="col-lg-10 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#all" data-toggle="tab">Hệ thống</a>
                  </li>
                  <li><a href="#room" data-toggle="tab">Phòng/Ban</a>
                  </li>
                  <li><a href="#list" data-toggle="tab">Danh sách liên hệ</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i> Timeline</li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="all" style="position: relative; height: 300px;overflow-y: auto;">
                    <ul class="timeline">

                      <!-- timeline time label -->
                      <li class="time-label">
                          <span class="bg-red">
                              10 Feb. 2014
                          </span>
                      </li>
                      <!-- /.timeline-label -->

                      <!-- timeline item -->
                      <li class="all-item">
                          <!-- timeline icon -->
                          <i class="fa fa-envelope bg-blue"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header"><a href="#">Support Team</a> send you a message</h3>

                              <div class="timeline-body">
                                  Cập nhật đầy đủ thông tin cá nhân trước 23h49' 05/03/2016...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      
                      </li>
                      <li class="all-item">
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      <li class="all-item">
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      <li class="all-item">
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      
                      <!-- END timeline item -->

                    </ul>
                  </div>
                  <div class="chart tab-pane" id="room" style="position: relative; height: 300px;overflow-y: auto;">
                    <ul class="timeline">

                      <!-- timeline time label -->
                      <li class="time-label">
                          <span class="bg-red">
                              10 Feb. 2014
                          </span>
                      </li>
                      <!-- /.timeline-label -->

                      <!-- timeline item -->
                      <li>
                          <!-- timeline icon -->
                          <i class="fa fa-envelope bg-blue"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header"><a href="#">Support Team</a> send you a message</h3>

                              <div class="timeline-body">
                                  Cập nhật đầy đủ thông tin cá nhân trước 23h49' 05/03/2016...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      
                      </li>
                      <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      
                      <!-- END timeline item -->

                    </ul>
                  </div>
                  <div class="chart tab-pane" id="list" style="position: relative; height: 300px;overflow-y: auto;">
                    <ul class="timeline">

                      <!-- timeline time label -->
                      <li class="time-label">
                          <span class="bg-red">
                              10 Feb. 2014
                          </span>
                      </li>
                      <!-- /.timeline-label -->

                      <!-- timeline item -->
                      <li>
                          <!-- timeline icon -->
                          <i class="fa fa-envelope bg-blue"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header"><a href="#">Support Team</a> send you a message</h3>

                              <div class="timeline-body">
                                  Cập nhật đầy đủ thông tin cá nhân trước 23h49' 05/03/2016...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      
                      </li>
                      <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header">Phòng <a href="#">301</a> có thay đổi nhân sự</h3>

                              <div class="timeline-body">
                                  Nhân viên mới <a href="#">Nguyễn Phi Hùng</a> đã được thêm...
                              </div>

                              <div class="timeline-footer">
                                  <a class="btn btn-primary btn-xs">...</a>
                              </div>
                          </div>
                      </li>
                      
                      <!-- END timeline item -->

                    </ul>
                  </div>
                </div>
              </div><!-- /.nav-tabs-custom -->

              <!-- TO DO List -->
              

            
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@stop