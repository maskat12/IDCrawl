<div class="">
<!-- main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
	<div class="navbar-brand wmin-0 mr-5">
		<a href="{{url('/')}}" class="d-inline-block">
			<img src="/img/logo.png" alt="">
		</a>
	</div>
	<div class="d-md-none">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
			<i class="icon-tree5"></i>
		</button>
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
			<i class="icon-paragraph-justify3"></i>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="navbar-mobile">
		
		<div class="navbar-text ml-md-auto mr-md-3"></div>

		<ul class="navbar-nav">
			<!-- IF USER NOT LOGGED IN -->
			@if(!$auth)
				<li class="nav-item dropdown dropdown-user">
					<a href="{{ url('/login')}}" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown" >
						<span>Sign In</span>
					</a>
					
					<ul class="dropdown-menu dropdown-menu-right mt-2">
						<li class="px-3 py-2">
						<form class="form" method="POST" action="{{route('login')}}" role="form">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="email" class="control-label">Email / Username</label>
									<input placeholder="Email" id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
								</div>
								<div class="form-group">
									<label for="password" class="control-label">Password</label>
									<input placeholder="Password" Emailid="password" type="password" name="password" class="form-control" required>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Login</button>
								</div>
								<div class="form-group text-center">
									<small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
								</div>
							</form>
						</li>
					</ul>
				</li>
			@else
			<!-- IF USER LOGGED IN -->
				<li class="nav-item">
					<a href="{{url('dashboard')}}" class="navbar-nav-link">
						<i class="icon-home4 mr-2"></i>
						Dashboard
					</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link">
						<i class="icon-bell2"></i>
						<span class="d-md-none ml-2">Notifications</span>
						<span class="badge badge-mark border-white ml-auto ml-md-0"></span>
					</a>					
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="limitless/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
						<span>User (example)</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<div class="dropdown-divider"></div>
						<a href="/logout" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			@endif
		</ul>
	</div>
</div>
<!-- /main navbar -->
<!-- @if($auth)
<div class="navbar navbar-expand-md navbar-dark">
	<div class="text-center d-md-none w-100">
		<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-navigation">
			<i class="icon-unfold mr-2"></i>
			Navigation
		</button>
	</div>

	<div class="navbar-collapse collapse" id="navbar-navigation">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="{{url('dashboard')}}" class="navbar-nav-link active">
					<i class="icon-home4 mr-2"></i>
					Dashboard
				</a>
			</li>
		</ul>
	</div>
</div>
@endif -->
</div>