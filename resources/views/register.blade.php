
@extends('layouts.main')

@section('styles')
<style type="text/css">
    body{
        background: url({{ asset('assets/wp2722825.jpg') }}) ; 
        background-size:cover;
    }
</style>
@endsection

@section('content')


        <div class="layout">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11" style="color:white !important">

                        <!-- Heading -->
                        <h1 class="font-bold text-center text-white">Sign up</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Agwis Chat web-client.</p>

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


                                <x-input id="email"  class="form-control" type="email" name="email" :value="old('email')" placeholder="Enter your Email" required />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="block font-medium text-sm" for="password">
                    {{ __('Password') }}
                </label>


                                <x-input id="password"  class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" placeholder="Enter your Password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                <label class="block font-medium text-sm" for="password_confirmation">
                    {{ __('Password confirmation') }}
                </label>

                                <x-input id="password_confirmation"  class="form-control"
                                                type="password"
                                                name="password_confirmation" required placeholder="Enter your confirm Password" />
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label class="block font-medium text-sm" for="mobile">
                                    {{ __('Phone') }}
                                </label>

                                <x-input id="mobile"
                                         class="form-control"
                                         type="numeric"
                                         name="mobile" required placeholder="Enter your Phone" />
                            </div>

                            <!-- Photo -->
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

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary">
                                {{ __('Register') }}
                             </button>

                        </form>

                        <p class="text-center text-white">
                            <a  class="text-white" href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->
@endsection
@section('scripts')

@endsection
