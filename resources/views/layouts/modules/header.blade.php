<div class="navbar navbar-expand-md navbar-dark fixed-top">
		<div class="navbar-brand wmin-0 mr-5">
			<a href="index.html" class="d-inline-block">
                <img src="/img/logo.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">

			</ul>

			<span class="navbar-text ml-md-3 mr-md-auto">
				
			</span>

			<ul class="navbar-nav">
				<!-- <li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/lang/gb.png" class="img-flag mr-2" alt="">
						English
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item english"><img src="../../../../global_assets/images/lang/gb.png" class="img-flag" alt=""> English</a>
						<a href="#" class="dropdown-item ukrainian"><img src="../../../../global_assets/images/lang/ua.png" class="img-flag" alt=""> Українська</a>
						<a href="#" class="dropdown-item deutsch"><img src="../../../../global_assets/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
						<a href="#" class="dropdown-item espana"><img src="../../../../global_assets/images/lang/es.png" class="img-flag" alt=""> España</a>
						<a href="#" class="dropdown-item russian"><img src="../../../../global_assets/images/lang/ru.png" class="img-flag" alt=""> Русский</a>
					</div>
				</li> -->


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