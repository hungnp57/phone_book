@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-2 form-login center-block">
			<div class="panel panel-default">
				<div class="panel-heading">
					 <img src="{{asset('dist/img/user2-160x160.jpg') }}" class="img-circle center-block" alt="Cinque Terre" width="200" height="200">
				</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<div class="col-md-10 center-block login-input">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Mã nhân viên">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-10 center-block login-input">
								<input type="password" class="form-control" name="password" placeholder="Mật khẩu">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 center-block login-input">
								<button type="submit" class="btn btn-primary col-md-12">Đăng nhập</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Quên mật khẩu?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
