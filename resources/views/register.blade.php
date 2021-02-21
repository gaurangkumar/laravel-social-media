<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup | Agwis Messanger</title>
	
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/template/assets/img/favicon.ico') }}">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/template/assets/css/bootstrap.min.css') }}">
	
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('/template/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/plugins/fontawesome/css/all.min.css') }}">
	
    <!-- Custom scroll CSS -->
    <link rel="stylesheet" href="{{ asset('/template/assets/plugins/mcustomscroll/jquery.mCustomScrollbar.css') }}">
	
    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('/template/assets/css/app.css') }}">

</head>

	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">			
			<!-- Page Content -->
			<div class="content align-items-center">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<!-- <h3>Login <br><span>Access to our Chat</span></h3> -->
											<a href="">
			                                    <img src="{{ asset('/template/assets/img/logo.png') }}" alt="" class="header_image">
			                                </a>
										</div>
										<form method="POST" action="{{ route('register') }}">
                                            <div class="form-group">
                                                <label for="name" :value="__('Name')">Name</label>
                                                <input class="form-control form-control-lg group_formcontrol" name="name" type="text" placeholder="Enter your Name" :value="old('name')" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" :value="__('Email')">Email</label>
                                                <input class="form-control form-control-lg group_formcontrol" name="email" type="email" placeholder="Enter your email" :value="old('email')" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" :value="__('Password')">Password</label>
                                                <input class="form-control form-control-lg group_formcontrol" name="password" id="password" type="password" placeholder="Enter your password" required autocomplete="new-password">
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
                                                <input class="form-control form-control-lg group_formcontrol" name="password_confirmation" id="password_confirmation" type="text" placeholder="Enter your password" required>
                                            </div>
                                            <div class="pt-1">
			                                	<div class="text-center">
			                                     	<button class="btn newgroup_create btn-block d-block w-100" type="submit">{{ __('Register') }}</button>
			                                    </div>
			                                </div>
										</form>
										<div class="login-or">
											<span class="or-line"></span>
											<span class="span-or">or</span>
										</div>
										<div class="row form-row social-login">
											<div class="col-6">
												<a href="#" target="_blank" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
											</div>
											<div class="col-6">
												<a href="#" class="btn btn-google btn-block" target="_blank"><i class="fab fa-google mr-1"></i> Login</a>
											</div>
										</div>
										<div class="text-center dont-have"> <a href="{{ route('login') }}">{{ __('Already registered?') }} Login</a></div>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
						</div>
					</div>
				</div>
			</div>		
			<!-- /Page Content -->
		</div>
		<!-- /Main Wrapper -->
	  
	<!-- jQuery -->
    <script src="{{ asset('/template/assets/js/jquery-3.4.1.min.js') }}"></script>
	
	<!-- Bootstrap Core JS -->
    <script src="{{ asset('/template/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/template/assets/js/bootstrap.min.js') }}"></script>

	<!-- Custom Scroll JS -->
    <script src="{{ asset('/template/assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('/template/assets/plugins/mcustomscroll/jquery.mCustomScrollbar.js') }}"></script>
	
	<!-- Custom JS -->
    <script src="{{ asset('/template/assets/js/script.js') }}"></script>
	
</body>
</html>