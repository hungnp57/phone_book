<?php namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use DB;
use Redirect;
use App\User;
use App\Room;
use App\PhoneType;
use App\PhoneNumber;
use Auth;
use App\Role;
use App\Permission;
use Input;
use Response;
use App\Day_time;
class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function roomID($id){
		$room = Room::find($id);
		$users = $room->user;		
		$master_id = $room->master;
		$master = array();
		$employees = array();
		$i=0;
		foreach ($users as $user ) {
			if($user->id == $master_id ){
				$master['name']=$user->name;
				$master['phone_number']= User::find($user->id)->phoneNumber->first()->phone_number;
				$master['room_number'] = User::find($id)->room->first()->room_number;
			}
			else{
				$employees[$i]['name']=$user->name;
				$employees[$i]['phone_number']= User::find($user->id)->phoneNumber->first()->phone_number;
				$employees[$i]['room_number'] = User::find($id)->room->first()->room_number;
				$i++;
			}
		}
		return view('pages.room.phong-ban-ID',compact('master','employees'));
	}
	public function room(){
		$rooms = DB::table('room')->get();
		$arrays=array();
		$floors =array();
		foreach ($rooms as $room) {
			if(!in_array($room->floor, $floors)){
				array_push($floors,$room->floor);
			}
		}
		sort($floors);
		foreach ($rooms as $result) {
			$master_name= User::find($result->master)->name;
			$a = array('room_name' =>$result->room_name ,'master' =>$master_name ,'room_number' =>$result->room_number,'floor' =>$result->floor);
			array_push($arrays, $a);
		}
		return view('pages.room.phong-ban',compact('arrays','floors'));
	}
	public function timeline(){
		return view('pages.timeline');
	}
	public function timelineID($id){
		return view('pages.timeline-id');
	}
	public function profile($id){
		$user = DB::table('users')
                ->where('id', $id)
                ->first();

        $room= User::find($id)->room->first();
        $phoneType= User::find($id)->phoneType->first();
        $phoneNumber = User::find($id)->phoneNumber;
        $number=array();
        $i=0;
        foreach ($phoneNumber as $phone) {
        	$number[$i]=array();
        	$number[$i]['phone_number']=$phone->phone_number;
        	$number[$i]['phone_type']=PhoneNumber::find($phone->id)->phoneType->first()->phone_type_name;
        	$i++;
        }
        // if($user::hasRole('superAdmin')){
        // 		return redirect()->action('PagesController@search');

        // }
		return view('pages.profile',compact('user','room','number'));
	}
	public function in_array_r($needle, $haystack) {
		$i=0;
    foreach ($haystack as $item) {
        if (in_array($needle, $item)) {
            return $i;
        }
        $i++;
    }

    return -1;
	}
	public function calendar($id){
		DB::enableQueryLog();
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$t=time();
		$day = date('w')+6;
		$week_start = date('m-d-Y', strtotime('-'.$day.' days'));
		$week_end = date('m-d-Y', strtotime('+'.(6-$day).' days'));
		// dd(date("Y-m-d",$t));
		$current_date = date('Y-m-d',strtotime('-'.date('w').' days'));
		$current_week_start = date('Y-m-d', strtotime('-'.(date('w')+6).' days'));
		$next_week_end = date('Y-m-d', strtotime('-'.(date('w')-7).' days'));
		$dates = DB::table('day_time')->where('user_id',$id)->where('day','>=',$current_week_start)->where('day','<=',$next_week_end)->orderBy('day','DESC')->get();
		$dates2=array();
		foreach ($dates as $date) {
			$dates2[] = array('id' => $date->id,'user_id'=>$date->user_id,'day'=>$date->day,'start_am'=>$date->start_am,'end_am'=>$date->end_am,'start_pm'=>$date->start_pm,'end_pm'=>$date->end_pm);
		}
		$users = DB::table('users')->find($id);
		// $user = array();
		// $user = ['id'=>$user->id,'ma_nhan_vien'=>$users->ma_nhan_vien,'user_name'=>$users->name];

		$array_date = array();
		for($i=0;$i<14;$i++){
			$array_date[]=array('id' =>'','user_id'=>'','day'=> date('Y-m-d', strtotime('-'.(date('w')+6-$i).' days')),'start_am'=>'','end_am'=>'','start_pm'=>'','end_pm'=>'');
		}
		foreach ($array_date as $key => $item) {
			$i=$this->in_array_r($array_date[$key]['day'], $dates2);
			if($i!=(-1)){
			
				$array_date[$key]['id']=$dates2[$i]['id'];
				$array_date[$key]['user_id'] = $dates2[$i]['user_id'];
				$array_date[$key]['start_am'] = substr($dates2[$i]['start_am'],0,5);
				$array_date[$key]['end_am'] = substr($dates2[$i]['end_am'],0,5);
				$array_date[$key]['start_pm'] = substr($dates2[$i]['start_pm'],0,5);
				$array_date[$key]['end_pm'] = substr($dates2[$i]['end_pm'],0,5);
			
			}
		}
		// dd(
		// 	$array_date
  //           // $this->in_array_r('2016-05-08', $dates2)
  //       );

		return view('pages.calendar',compact('array_date','users'));
	}
	public function calendar_post(){
		DB::enableQueryLog();
		$data=Input::get('data');
		$id = Input::get('id');
		$success = 1;
		$error = 0;
		$start_am = '';
		$start_pm = '';
		$end_am = '';
		$end_pm = '';
		foreach ($data as $item) {
			$vali = DB::table('day_time')->where('user_id',$id)->where('day',$item['day'])->first();
			if($vali==null){
				$i=0;
				if($item['start_am']!=''){
					$start_am = $item['start_am'];
				}
				else {
					$i++;
					$start_am = NULL;
				}

				if($item['start_pm']!=''){
					$start_pm = $item['start_pm'];
				}
				else {
					$i++;
					$start_pm = NULL;
				}

				if($item['end_am']!=''){
					$end_am = $item['end_am'];
				}
				else {
					$i++;
					$end_am = NULL;
				}

				if($item['end_pm']!=''){
					$end_pm = $item['end_pm'];
				}
				else {
					$i++;
					$end_pm = NULL;
				}
				if($i!=4){
				DB::table('day_time')->insert(
    				['user_id'=>$id,'day' => $item['day'],'start_am'=>$start_am,'start_pm'=>$start_pm,'end_pm'=>$end_pm,'end_am'=>$end_am]
				);
				}
				$start_am = '';
				$start_pm = '';
				$end_am = '';
				$end_pm = '';
			}

			else{
				try{
					if($item['start_am']!=''){
						if(strlen($item['start_am'])!=5){
							$start_am = '0'.$item['start_am'].':00';
						}
						else{
							$start_am = $item['start_am'].':00';
						};
					}
					else $start_am = NULL;
					if($item['start_pm']!=''){
						if(strlen($item['start_pm'])!=5){
							$start_pm = '0'.$item['start_pm'].':00';
						}
						else{
							$start_pm = $item['start_pm'].':00';
						};
					}
					else $start_pm = NULL;
					if($item['end_am']!=''){
						if(strlen($item['end_am'])!=5){
							$end_am = '0'.$item['end_am'].':00';
						}
						else{
							$end_am = $item['end_am'].':00';
						};
					}
					else $end_am = NULL;
					if($item['end_pm']!=''){
						if(strlen($item['end_pm'])!=5){
							$end_pm = '0'.$item['end_pm'].':00';
						}
						else{
							$end_pm = $item['end_pm'].':00';
						};
					}
					else $end_pm = NULL;

				DB::table('day_time')->where('user_id',$id)->where('day',$item['day'])->update(['start_am'=>$start_am,'start_pm'=>$start_pm,'end_pm'=>$end_pm,'end_am'=>$end_am]);
				$start_am = '';
				$start_pm = '';
				$end_am = '';
				$end_pm = '';
				// var_dump(DB::getQueryLog());
				}
				catch(Illuminate\Database\QueryException $ex){

					return $error;
				}
			}
		}
		
		return $success;
	}
	public function work($id){
		return view('pages.work');
	}
	public function addUser(){
		return view('pages.them-nhan-vien');
	}
	public function staff_list(){
		$users= DB::table('users')->get();
		$arrays=array();
		foreach ($users as $user) {
			$user_id = $user->ma_nhan_vien;
			$user_name = $user->name;
			$position = $user->position;
			$birthday =$user->birthday;
			$address= $user->hometown;
			$room_number = User::find($user->id)->room->first()->room_number;
			$room_name = User::find($user->id)->room->first()->room_name;
			$floor=User::find($user->id)->room->first()->floor;
			$a = array('user_id' => $user_id,'user_name' =>$user_name ,'position' =>$position ,'birthday' =>$birthday,'room_name' =>$room_name,'address' => $address,'room_number' =>$room_number,'floor' =>$floor);
			array_push($arrays,$a);
		}
		return view('pages.danh-sach-nhan-vien',compact('arrays'));
	}
	public function search(){
		return view('pages.search');
	}
	
	public function returnUser(&$arrays,$querys){
		foreach ($querys as $result) {
			$user= User::find($result->id);
			$phoneNumber = $user->phoneNumber->first()->phone_number;
			$position = $user->position;
			$name = $user->name;
			$room = $user->room->first()->room_name;
			$ma_nhan_vien = $user->ma_nhan_vien;
			$a = array('type' => '1','user_id' =>$result->id ,'user_name' =>$name ,'ma_nhan_vien' =>$ma_nhan_vien,'room_name' =>$room,'phone_number' => $phoneNumber,'position' =>$position);
			array_push($arrays,$a);
		};
	}
	public function returnRoom(&$arrays,$querys)
	{
		foreach ($querys as $result) {
			$room= Room::find($result->id);
			$room_id = $room->id;
			$room_name = $room->room_name;
			$room_number = $room->room_number;
			$room_floor = $room->floor;
			$master_name = User::find($room->master)->name;
			$a = array('type' => '2','room_id' =>$room_id ,'room_name' =>$room_name ,'room_number' =>$room_number,'room_floor' =>$room_floor,'master_name' => $master_name);
			array_push($arrays,$a);
		};
	}
	public function search_post(){
		$users = DB::table('users');
		$rooms = DB::table('room');
		$srch_item = Input::get('srch_item');
		$all = Input::get('all');
		$room_number = Input::get('room_number');
		$code = Input::get('code');
		$user_name = Input::get('user_name');
		$room_name = Input::get('room_name');
		$position = Input::get('position');
		$floor = Input::get('floor');

		$arrays=array();
		if ($all==1||$user_name==1) {
		
			$result_name = $users->where('name','LIKE','%'.$srch_item.'%')->get();
			$this->returnUser($arrays,$result_name);
		}
		if ($all==1||$code==1) {
			$result_name = $users->where('ma_nhan_vien','LIKE','%'.$srch_item.'%')->get();
			$this->returnUser($arrays,$result_name);
		}
		if ($all==1||$position==1) {
			$result_name = $users->where('position','LIKE','%'.$srch_item.'%')->get();
			$this->returnUser($arrays,$result_name);
		}
		if ($all==1||$room_name==1) {
			$result_name = $rooms->where('room_name','LIKE','%'.$srch_item.'%')->get();
			$this->returnRoom($arrays,$result_name);
		}
		if ($all==1||$room_number==1) {
			$result_name = $rooms->where('room_number','LIKE','%'.$srch_item.'%')->get();
			$this->returnRoom($arrays,$result_name);
		}
		if ($all==1||$floor==1) {
			$result_name = $rooms->where('floor','LIKE','%'.$srch_item.'%')->get();
			$this->returnRoom($arrays,$result_name);
		}
		$arrays = array_map('unserialize', array_unique(array_map('serialize', $arrays)));
		$re=array();
		foreach ($arrays as $array) {
			$re[] = $array;
		}
		return Response::Json($re);
	}
	public function search_home(){
		$users = DB::table('users');
		$rooms = DB::table('room');
		$srch_item = Input::get('srch_item');
		$all = Input::get('all');
		$room_number = Input::get('room_number');
		$code = Input::get('code');
		$user_name = Input::get('user_name');
		$room_name = Input::get('room_name');
		$position = Input::get('position');
		$floor = Input::get('floor');

		$arrays=array();
		if ($all==1||$user_name==1) {
		
			$result_name = $users->where('name','LIKE','%'.$srch_item.'%')->get();
			$this->returnUser($arrays,$result_name);
		}
		if ($all==1||$code==1) {
			$result_name = $users->where('ma_nhan_vien','LIKE','%'.$srch_item.'%')->get();
			$this->returnUser($arrays,$result_name);
		}
		if ($all==1||$position==1) {
			$result_name = $users->where('position','LIKE','%'.$srch_item.'%')->get();
			$this->returnUser($arrays,$result_name);
		}
		if ($all==1||$room_name==1) {
			$result_name = $rooms->where('room_name','LIKE','%'.$srch_item.'%')->get();
			$this->returnRoom($arrays,$result_name);
		}
		if ($all==1||$room_number==1) {
			$result_name = $rooms->where('room_number','LIKE','%'.$srch_item.'%')->get();
			$this->returnRoom($arrays,$result_name);
		}
		if ($all==1||$floor==1) {
			$result_name = $rooms->where('floor','LIKE','%'.$srch_item.'%')->get();
			$this->returnRoom($arrays,$result_name);
		}
		// dd($arrays);
		$send="1";
		$arrays = array_map('unserialize', array_unique(array_map('serialize', $arrays)));
		$re=array();
		foreach ($arrays as $array) {
			$re[] = $array;
		}
		return view('pages.search',compact('arrays','send'));
		
	}

}


