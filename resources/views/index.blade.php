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
          @if (!Auth::guest())
          <div class="row">
          

            <form class="col-lg-10 col-xs-10 col-md-10 center-block" role="search" style="float: none;" action="{{URL::to('search_home')}}" method="POST">
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
          </div><!-- /.row -->
          @endif
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
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
              @if (!Auth::guest())
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Danh sách công việc</h3>
                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="todo-list">
                    <li>
                      <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <!-- checkbox -->
                      <input type="checkbox" value="" name="">
                      <!-- todo text -->
                      <span class="text">Liên hệ Tổ trưởng <a href="">Nguyễn Văn A</a></span>
                      <!-- Emphasis label -->
                      <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Liên hệ Phó phòng Tổ chức <a href="">Kim Văn B</a></span>
                      <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Thêm nhân viên mới phòng <a href="">Dự án</a></span>
                      <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Tạo tính năng mới</span>
                      <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Phân quyền tầng <a href="">3</a></span>
                      <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Sửa thông tin liên lạc</span>
                      <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                </div>
              </div><!-- /.box -->

            
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Lịch làm việc</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Progress bars -->
                      <div class="clearfix">
                        <span class="pull-left">Tuần #1</span>
                        <small class="pull-right">90%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Tuần #2</span>
                        <small class="pull-right">70%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Tuần #3</span>
                        <small class="pull-right">60%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Tuần #4</span>
                        <small class="pull-right">40%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

            </section><!-- right col -->
            @endif
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@stop
