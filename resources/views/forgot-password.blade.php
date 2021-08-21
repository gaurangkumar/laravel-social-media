@extends('layouts.main')

@section('styles')
@endsection

@section('content')
        <div class="layout" style="background: url({{ asset('assets/pexels-skitterphoto-630754.jpg') }});background-size: cover;">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11" style="color:black !important">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">Password Reset</h1>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <!-- Text -->
                        <p class="text-center mb-6">Enter your email address to reset password.</p>

                        <!-- Form -->
                        <form class="mb-6" method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email -->
                            <div class="form-group">
                                <label class="block font-medium text-sm" for="email">
                                    {{ __('Email') }}
                                </label>

                                <x-input id="email"
                                         class="form-control"
                                         type="email"
                                         name="email"
                                         :value="old('email')"
                                         required autofocus
                                         placeholder="Enter your email" />
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block btn-primary" type="submit">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </form>

                        <!-- Text -->
                        <p class="text-center">
                            Got password? <a href="{{ route('login') }}">{{ __('Login') }}</a>.
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->
@endsection

@section('scripts')
@endsection
