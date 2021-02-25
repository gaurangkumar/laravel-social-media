@extends('layouts.main')

@section('styles')
@endsection

@section('content')

        <div class="layout">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">Sign in</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Chat web-client.</p>

                        <!-- Form -->
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="mb-6">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-label   class="sr-only" for="email" :value="__('Email')" />

                <x-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" class="sr-only" />

                <x-input id="password" class="form-control form-control-lg"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="form-group d-flex justify-content-between">
				 <div class="custom-control custom-checkbox">
                <label for="remember_me" class="custom-control-input">
                    <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
					<label class="custom-control-label" for="checkbox-remember">{{ __('Remember me') }}</label>
                    
                </label>
				</div>
				 @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>

            <div>
                

                <button class="btn btn-lg btn-block btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
        </form>

						
                          
                        <!-- Text -->
                        <p class="text-center">
                            Don't have an account yet <a href="register">Sign up</a>.
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->

         @endsection

@section('scripts')
@endsection