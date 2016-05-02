@extends('master')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/calendar.css') }}" type="text/css">
@stop
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
          <div class="row">
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <div class="alert alert-success fade in col-xs-12 col-lg-6 noti" style="padding: 3px;padding-left: 10px; padding-right: 10px; margin-left: 20px;margin-right: 20px; display: none;">
              This alert box could indicate a successful or positive action.
            </div>
            <div style="clear: both;"></div>
            <form class="calendar">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
              <div class="table-responsive" style="background-color: #fff;position: relative; overflow:hidden;">
                <div class="col-lg-2 loading"  style="position: absolute; display:none; z-index:999;width: 100%;height: 100%;background-color: rgba(0,0,0,0.1);">
                  <div style="position: relative;width: 100%;height: 100%;">
                  <i class="fa fa-spinner fa-pulse fa-3x fa-fw " style="top:48%; position: absolute;"></i>
                  <span class="sr-only" >Loading...</span>
                  </div>
                </div>
                <table class="table table-bordered table-hover table-striped">
                  <thread>
                    <tr class="success">
                      <th colspan="2" style="text-align: center;">25/04/2016 - 01/05/2016</th>
                      <th>Thứ 2</th>
                      <th>Thứ 3</th>
                      <th>Thứ 4</th>
                      <th>Thứ 5</th>
                      <th>Thứ 6</th>
                      <th>Thứ 7</th>
                      <th>Chủ nhật</th>
                    </tr>
                  </thread>
                  <tbody>
                    <tr>
                      <th rowspan="2">Sáng</th>
                      <th>Bắt đầu</th>
                      @for($i=0;$i<=6;$i++)
                      <td><input type="text" value="{{$array_date[$i]['start_am']}}" maxlength="5" class="day{{$i}}_start_am"></td>
                      @endfor
                    </tr>
                    <tr>    
                      <th>Kết thúc</th>
                      @for($i=0;$i<=6;$i++)
                      <td><input type="text" value="{{$array_date[$i]['end_am']}}" maxlength="5" class="day{{$i}}_end_am"></td>
                      @endfor
                    </tr>
                    <tr>
                      <th rowspan="2">Chiều</th>
                      <th>Bắt đầu</th>
                      @for($i=0;$i<=6;$i++)
                      <td><input type="text" value="{{$array_date[$i]['start_pm']}}" maxlength="5" class="day{{$i}}_start_pm"></td>
                      @endfor
                    </tr>
                    <tr>    
                      <th>Kết thúc</th>
                      @for($i=0;$i<=6;$i++)
                      <td><input type="text" value="{{$array_date[$i]['end_pm']}}" maxlength="5" class="day{{$i}}_end_pm"></td>
                      @endfor
                    </tr>
                    <tr class="success">
                      <th colspan="2" style="text-align: center;" >25/04/2016 - 01/05/2016</th>
                      <th>Thứ 2</th>
                      <th>Thứ 3</th>
                      <th>Thứ 4</th>
                      <th>Thứ 5</th>
                      <th>Thứ 6</th>
                      <th>Thứ 7</th>
                      <th>Chủ nhật</th>
                    </tr>
                    <tr>
                      <th rowspan="2">Sáng</th>
                      <th>Bắt đầu</th>
                      @for($i=7;$i<=13;$i++)
                      <td><input type="text" value="{{$array_date[$i]['start_am']}}" maxlength="5" class="day{{$i}}_start_am"></td>
                      @endfor
                    </tr>
                    <tr>
                      <th>Kết thúc</th>    
                      @for($i=7;$i<=13;$i++)
                      <td><input type="text" value="{{$array_date[$i]['end_am']}}" maxlength="5" class="day{{$i}}_end_am"></td>
                      @endfor
                    </tr>
                    <tr>
                      <th rowspan="2">Chiều</th>
                      <th>Bắt đầu</th>
                      @for($i=7;$i<=13;$i++)
                      <td><input type="text" value="{{$array_date[$i]['start_pm']}}" maxlength="5" class="day{{$i}}_start_pm"></td>
                      @endfor
                    </tr>
                    <tr>    
                      <th>Kết thúc</th>
                      @for($i=7;$i<=13;$i++)
                      <td><input type="text" value="{{$array_date[$i]['end_pm']}}" maxlength="5" class="day{{$i}}_end_pm"></td>
                      @endfor>
                    </tr>
                  </tbody>
                </table>
              </div>
              @if(Auth::guest())
              @elseif(Auth::user()->hasRole('admin')||Auth::user()->id==$users->id)
              <div class="col-xs-12" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary send-calendar">Cập nhật</button>
              </div>
              @endif
            </form>

          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@stop
@section('script')
<script type="text/javascript">
  var reg = /[0-9][0-9][:][0-9][0-9]/;
  var reg2 = /[0-9][:][0-9][0-9]/;
  var reg3 = /(00|01|02|03|04|05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23):?(0|1|2|3|4|5)\d/;
  var reg4 = /(0|1|2|3|4|5|6|7|8|9):?(0|1|2|3|4|5)\d/;

  $('.calendar :input[type="text"]').each(function () {
        
        var val = $(this).val();

        if(val==''){
          $(this).css("background-color", "rgb(141, 198, 231)");
 
        }
        else{
          if((val.search(':')==2&&val.length==5)||(val.search(':')==1&&val.length==4)){

            if(!reg3.test(val)&&!reg4.test(val)) {
                  $(this).css("background-color", "#f2dede");
        

                }
                else {
                  if(val.length!=4&&reg4.test(val)&&!reg3.test(val)){
                    $(this).css("background-color", "#f2dede");
         
                  }
                  else{
                    $(this).css("background-color", "transparent");
         
                  }
                };
            }
            else{
              $(this).css("background-color", "#f2dede");
            }
        }
        $(this).focusout(function(){
          var val = $(this).val();
          if(val==''){
            $(this).css("background-color", "rgb(141, 198, 231)");
       
            
          }
          else{
            if((val.search(':')==2&&val.length==5)||(val.search(':')==1&&val.length==4)){

            if(!reg3.test(val)&&!reg4.test(val)) {
                  $(this).css("background-color", "#f2dede");
        

                }
                else {
                  if(val.length!=4&&reg4.test(val)&&!reg3.test(val)){
                    $(this).css("background-color", "#f2dede");
         
                  }
                  else{
                    $(this).css("background-color", "transparent");
         
                  }
                };
            }
            else{
              $(this).css("background-color", "#f2dede");
            }
          }
        });
  });
  $(".send-calendar").click(function(e){

        e.preventDefault();
        var validation = 1;
        $('.calendar :input[type="text"]').each(function () {
        
          var val = $(this).val();
          if(val==''){
            $(this).css("background-color", "rgb(141, 198, 231)");

          }
          else{
          if((val.search(':')==2&&val.length==5)||(val.search(':')==1&&val.length==4)){

            if(!reg3.test(val)&&!reg4.test(val)) {
                  $(this).css("background-color", "#f2dede");
                  validation = 0;

                }
                else {
                  if(val.length!=4&&reg4.test(val)&&!reg3.test(val)){
                    $(this).css("background-color", "#f2dede");
                  validation = 0;
                  }
                  else{
                    $(this).css("background-color", "transparent");
         
                  }
                };
            }
            else{
              $(this).css("background-color", "#f2dede");
              validation = 0;
            }
          }
        });
        if(validation==0){
          $('.noti').text('Bạn chưa nhập đúng thông tin! Vui lòng chỉnh sửa.');
          $('.noti').css('display','');
     
        }
        var token = $("input[name='_token']").val();
        var id = "{{$users->id}}";
        if(validation==1){
          $('.noti').css('display','none');
          var i =0;
          var day0={day : "{{$array_date[0]['day']}}", start_am : $('.day0_start_am').val(),end_am:$('.day0_end_am').val(),start_pm : $('.day0_start_pm').val(),end_pm : $('.day0_end_pm').val()};
          var day1={day : "{{$array_date[1]['day']}}", start_am : $('.day1_start_am').val(),end_am:$('.day1_end_am').val(),start_pm : $('.day1_start_pm').val(),end_pm : $('.day1_end_pm').val()};
          var day2={day : "{{$array_date[2]['day']}}", start_am : $('.day2_start_am').val(),end_am:$('.day2_end_am').val(),start_pm : $('.day2_start_pm').val(),end_pm : $('.day2_end_pm').val()};
          var day3={day : "{{$array_date[3]['day']}}", start_am : $('.day3_start_am').val(),end_am:$('.day3_end_am').val(),start_pm : $('.day3_start_pm').val(),end_pm : $('.day3_end_pm').val()};
          var day4={day : "{{$array_date[4]['day']}}", start_am : $('.day4_start_am').val(),end_am:$('.day4_end_am').val(),start_pm : $('.day4_start_pm').val(),end_pm : $('.day4_end_pm').val()};
          var day5={day : "{{$array_date[5]['day']}}", start_am : $('.day5_start_am').val(),end_am:$('.day5_end_am').val(),start_pm : $('.day5_start_pm').val(),end_pm : $('.day5_end_pm').val()};
          var day6={day : "{{$array_date[6]['day']}}", start_am : $('.day6_start_am').val(),end_am:$('.day6_end_am').val(),start_pm : $('.day6_start_pm').val(),end_pm : $('.day6_end_pm').val()};
          var day7={day : "{{$array_date[7]['day']}}", start_am : $('.day7_start_am').val(),end_am:$('.day7_end_am').val(),start_pm : $('.day7_start_pm').val(),end_pm : $('.day7_end_pm').val()};
          var day8={day : "{{$array_date[8]['day']}}", start_am : $('.day8_start_am').val(),end_am:$('.day8_end_am').val(),start_pm : $('.day8_start_pm').val(),end_pm : $('.day8_end_pm').val()};
          var day9={day : "{{$array_date[9]['day']}}", start_am : $('.day9_start_am').val(),end_am:$('.day9_end_am').val(),start_pm : $('.day9_start_pm').val(),end_pm : $('.day9_end_pm').val()};
          var day10={day : "{{$array_date[10]['day']}}", start_am : $('.day10_start_am').val(),end_am:$('.day10_end_am').val(),start_pm : $('.day10_start_pm').val(),end_pm : $('.day10_end_pm').val()};
          var day11={day : "{{$array_date[11]['day']}}", start_am : $('.day11_start_am').val(),end_am:$('.day11_end_am').val(),start_pm : $('.day11_start_pm').val(),end_pm : $('.day11_end_pm').val()};
          var day12={day : "{{$array_date[12]['day']}}", start_am : $('.day12_start_am').val(),end_am:$('.day12_end_am').val(),start_pm : $('.day12_start_pm').val(),end_pm : $('.day12_end_pm').val()};
          var day13={day : "{{$array_date[13]['day']}}", start_am : $('.day13_start_am').val(),end_am:$('.day13_end_am').val(),start_pm : $('.day13_start_pm').val(),end_pm : $('.day13_end_pm').val()};
          var data = [day0,day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12,day13];
            $.ajax({

                type: "POST",

                url: "{{URL::to('calendar')}}",

                dataType: "json",

                data: {'_token':token,'data':data,'id':id},
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
                  if(data){  
                    location.reload(true);
                  }
                  else {
                    $('.noti').text('Bạn chưa nhập đúng thông tin! Vui lòng chỉnh sửa.');
                    $('.noti').css('display','');
                  }
                }

            });

        }

    });
</script>
@stop