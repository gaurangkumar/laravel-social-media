@extends('layouts.main')
@section('content')
<div class="account-page">	
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
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

										<form method="POST" action="{{ route('register') }}">
											@csrf
                                            <div class="form-group">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="form-control form-control-lg group_formcontrol" placeholder="Enter your Name" type="text" name="name" :value="old('name')" required autofocus />
                                            </div>
                                            <div class="form-group">
                                               
												                <x-label for="email" :value="__('Email')" />

             <x-input id="email" class="form-control form-control-lg group_formcontrol" type="email" name="email" placeholder="Enter your email" :value="old('email')" required /> 
                                                
                                            </div>
                                            <div class="form-group">
                                                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control form-control-lg group_formcontrol"
                                type="password"
                                name="password"
						 placeholder="Enter your password"
                                required autocomplete="new-password" />
                                                
                                            </div>
                                            <div class="form-group">
												<x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control form-control-lg group_formcontrol"
                                type="password"
						 placeholder="Enter your password"
                                name="password_confirmation" required />
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
</div>
@endsection
