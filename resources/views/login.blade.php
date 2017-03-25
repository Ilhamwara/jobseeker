@extends('layouts.master')
@section('content')
<div class="app app-default">

	<div class="app-container app-login">
		<div class="flex-center">
			<div class="app-body">
				<div class="app-block">
					<div class="app-right-section">
						<div class="app-brand text-center"><span class="highlight">Web Portal Alumni</span> <br> <b>Jobseeker</b></div>
						<div class="app-info">

							<ul class="list">
								<li>
									<div class="icon">
										<i class="fa fa-group" aria-hidden="true"></i>
									</div>
									<div class="title">Anggota <b>999+</b></div>
								</li>
								<li>
									<div class="icon">
										<i class="fa fa-building-o" aria-hidden="true"></i>
									</div>
									<div class="title">Perusahaan <b>Terpercaya</b></div>
								</li>
								<li>
									<div class="icon">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="title">Respon <b>Cepat</b></div>
								</li>
							</ul>
						</div>
					</div>
					<div class="app-form">
						<div class="form-suggestion">
							<b>Login Disini</b>
						</div>
						<form action="/" method="POST">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon2">
									<i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" placeholder="Username" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon3">
										<i class="fa fa-key" aria-hidden="true"></i></span>
										<input type="text" class="form-control" placeholder="Password" required>
									</div>
									<div class="text-center">
										<button class="btn btn-primary btn-submit">Login</button>
									</div>
									<div class="form-line">
										<div class="title">OR</div>
									</div>
									<div class="text-center">
										<a href="{{asset('register')}}" class="btn btn-success btn-submit">Register</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection