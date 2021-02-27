@extends('layouts.main')

@section('styles')
@endsection

@section('content')


        <div class="layout">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">Sign up</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Chat web-client.</p>
							<x-auth-validation-errors class="text-center mb-6" :errors="$errors" />
                        <!-- Form -->
                               <form class="mb-6" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            					@csrf

            <!-- Name -->
            <div class="form-group">
<label class="block font-medium text-sm" for="name">
    {{ __('Name') }}
</label>

                <x-input id="name"  class="form-control " type="text" name="name" :value="old('name')" placeholder="Enter your Name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="form-group">
               <label class="block font-medium text-sm" for="email">
    {{ __('Email') }}
</label>


                <x-input id="email"  class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="form-group">
                <label class="block font-medium text-sm" for="password">
    {{ __('Password') }}
</label>


                <x-input id="password"  class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
<label class="block font-medium text-sm" for="password_confirmation">
    {{ __('Password confirmation') }}
</label>

                <x-input id="password_confirmation"  class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>
<div class="form-group">
<label class="block font-medium text-sm" for="mobile">
    {{ __('Phone') }}
</label>

                <x-input id="mobile"  class="form-control"
                                type="numeric"
                                name="mobile" required />
            </div>
                                                <div class="form-group">
<label class="block font-medium text-sm" for="profile">
    {{ __('Photo') }}
</label>
                                                    <div class="position-relative text-center bg-secondary rounded p-6">
                                                        <div class="avatar bg-primary text-white mb-5">
                                                            <i class="icon-md fe-image"></i>
                                                        </div>

                                                        <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                        <input id="profile" class="d-none" type="file"  name="profile" required >
                                                        <label class="stretched-label mb-0" for="profile"></label>
                                                    </div>
                                                    {!!$errors->first('profile', '<span class="text-danger">:message</span>')!!}
                                                </div>

              
				<button class="btn btn-block btn-primary">
                    {{ __('Register') }}
        		 </button>
				          
            
						
        </form>
				<p class="text-center">
					<a  href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
						</p>
                

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->
   @endsection
       @section('scripts')
@endsection
