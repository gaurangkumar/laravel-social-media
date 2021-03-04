@extends('layouts.main')

@section('styles')
@endsection

@section('content')

        <div class="layout">

            <!-- Navbar -->
@include('partial.navbar')
            <!-- Navbar -->

            <!-- Sidebar -->
@include('partial.sidebar')
            <!-- Sidebar -->

            <!-- Main Content -->
            <div class="main" data-mobile-height="">

                <!-- Default Page -->
                <div class="chat flex-column justify-content-center text-center">
                    <div class="container-xxl">

                        <div class="avatar avatar-lg mb-5">
                            <img class="avatar-img" src="{{ empty($user->profile) ?
															asset('storage/index.jpg') :
															asset(\Storage::url($user->profile))
														 }}" alt="">
                        </div>

                        <h6>Hey, {{ explode(' ', $user->name)[0] }}!</h6>
                        <p>Please select a chat to start messaging.</p>
                    </div>
                </div>
                <!-- Default Page -->

            </div>
            <!-- Main Content -->

        </div>
        <!-- Layout -->

        <!-- DropzoneJS: Template -->
@include('partial.dropzone')
        <!-- DropzoneJS: Template -->

        <!-- Modal: Invite friends -->
@include('partial.invite')
        <!-- Modal: Invite friends -->

@endsection

@section('scripts')
@endsection
