@extends('layouts.main')

@section('styles')
@endsection

@section('content')
        <div class="layout" style="background: url({{ asset('assets/pexels-skitterphoto-630754.jpg') }});background-size: cover;">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11" style="color:black !important">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">Sign in</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Chat web-client.</p>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}" class="mb-6">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-group">
                                <label class="block font-medium text-sm" for="email">
                                    {{ __('Email') }}
                                </label>

                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="block font-medium text-sm" for="password">
                                    {{ __('Password') }}
                                </label>

                                <x-input id="password" class="form-control"
                                         type="password"
                                         name="password"
                                         required autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" id="remember" name="remember">
                                    <label class="custom-control-label" for="remember">{{ __('Remember me') }}</label>
                                </div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                @endif
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">{{ __('Login') }}</button>
                        </form>
                          
                        <!-- Text -->
                        <p class="text-center">
                            Don't have an account yet <a href="{{ route('register') }}">{{ __('Signup') }}</a>.
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->
@endsection

@section('scripts')
@endsection
