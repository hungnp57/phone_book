<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use \App\Role;
use \App\Permission;
use \App\User;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('/phong-ban/id={id}', 'PagesController@roomID');
Route::get('/phong-ban', 'PagesController@room');
Route::get('/tim-kiem', 'PagesController@search');
Route::get('/danh-sach-lien-he', 'PagesController@contact');
Route::get('/danh-sach-lien-he/id={id}', 'PagesController@contactID');
Route::get('/danh-sach-cong-viec/id={id}', 'PagesController@work');
Route::get('/timeline', 'PagesController@timeline');
Route::get('/timeline/id={id}', 'PagesController@timelineID');
Route::get('/lich-lam-viec/id={id}', 'PagesController@calendar');
Route::get('/them-nhan-vien', 'PagesController@addUser');
Route::get('/thong-bao-he-thong', 'PagesController@systemContact');
Route::get('/ho-so/id={id}', 'PagesController@profile');
Route::get('/thiet-lap/id={$id}', 'PagesController@setting');


Route::get('/start', function()
{
	$user = new Role();
	$user->name         = 'user';
	$user->display_name = 'Employee'; // optional
	$user->description  = 'Chỉ được quyền sửa thông tin cá nhân của mình'; // optional
	$user->save();

	$admin = new Role();
	$admin->name         = 'admin';
	$admin->display_name = 'User Administrator'; // optional
	$admin->description  = 'Quản lý nhân viên'; // optional
	$admin->save();

	$superAdmin = new Role();
	$superAdmin->name         = 'superAdmin';
	$superAdmin->display_name = 'User Super Administrator'; // optional
	$superAdmin->description  = 'Quyền cao nhất, quản lý nhân viên và admin'; // optional
	$superAdmin->save();

	$editInfo = new Permission();
	$editInfo->name         = 'edit-Info';
	$editInfo->display_name = 'Edit Information'; // optional
	// Allow a user to...
	$editInfo->description  = 'Edit Information'; // optional
	$editInfo->save();

	$editUser = new Permission();
	$editUser->name         = 'edit-user';
	$editUser->display_name = 'Edit Users'; // optional
	// Allow a user to...
	$editUser->description  = 'edit existing users'; // optional
	$editUser->save();

	$editAdmin = new Permission();
	$editAdmin->name         = 'edit-admin';
	$editAdmin->display_name = 'Edit Admins'; // optional
	// Allow a user to...
	$editAdmin->description  = 'edit existing admins'; // optional
	$editAdmin->save();

    $user->attachPermission($editInfo);
    $admin->attachPermission($editUser);
    $superAdmin->attachPermission($editAdmin);

    $user1 = User::find(1);

    $user1->attachRole($superAdmin);

    return 'Woohoo!';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
