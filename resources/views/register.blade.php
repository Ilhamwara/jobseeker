@extends('layouts.master')
@section('content')
<div class="app app-default">

	<div class="app-container app-login">
		<div class="flex-center">
			<div class="app-header"></div>
			<div class="app-body">
				<div class="app-block">
					<div class="app-form">
						<div class="form-suggestion text-center">
							<b>Register Disini</b>
						</div>
						<form action="/" method="POST">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<i class="fa fa-paper-plane" aria-hidden="true"></i></span>
									<input type="text" class="form-control" placeholder="Fullname" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon2">
										<i class="fa fa-user" aria-hidden="true"></i></span>
										<input type="text" class="form-control" placeholder="Username" required>
									</div>
									<div class="input-group">
										<span class="input-group-addon" id="basic-addon2">
										<i class="fa fa-envelope" aria-hidden="true"></i></span>
											<input type="email" class="form-control" placeholder="Email" required>
										</div>
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon3">
												<i class="fa fa-key" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Password" required>
											</div>
											<div class="text-center">
												<input type="submit" class="btn btn-success btn-submit" value="Register">
											</div>
											<div class="form-line">
												<div class="title">OR</div>
											</div>
											<div class="text-center">
												<a href="{{url('/')}}" class="btn btn-primary btn-submit">Login</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endsection