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
            <div class="main main-visible" data-mobile-height="">

                <!-- Chat -->
                <div class="chat">

                    <!-- Chat: body -->
                    <div class="chat-body">

                        <!-- Chat: Header -->
                        <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <div class="row align-items-center">

                                    <!-- Close chat(mobile) -->
                                    <div class="col-3 d-xl-none">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="text-muted px-0" href="#" data-chat="open">
                                                    <i class="icon-md fe-chevron-left"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Chat photo -->
                                    <div class="col-6 col-xl-6">
                                        <div class="media text-center text-xl-left">
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1">Settings</h6>
                                                <small class="text-muted">Update your profile details</small>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- .row -->

                            </div>
                        </div>
                        <!-- Chat: Header -->

                        <!-- Chat: Content-->
                        <div class="chat-content px-lg-8">
                            <div class="container-xxl py-6 py-lg-10">

                                <!-- Accordion -->
                                <div class="accordion modified-accordion mb-n6 mb-lg-8" id="profile-settings">
                                    <div class="card-columns">

                                      <!-- Card -->
                                      <div class="card mb-6 mb-lg-8">
                                        <div class="card-header position-relative">
                                            <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-account" aria-controls="profile-settings-account" aria-expanded="true">
                                                <div class="row no-gutters align-items-center">
                                                    <!-- Title -->
                                                    <div class="col">
                                                        <h5>Account</h5>
                                                        <p>Update your profile details.</p>
                                                    </div>

                                                    <!-- Icon -->
                                                    <div class="col-auto">
                                                        <i class="text-muted icon-md fe-user"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div id="profile-settings-account" class="collapse" data-parent="#profile-settings">
                                          <div class="card-body">
                                            <form action="{{ route('delete-profile') }}" method="post">
                                                @csrf

                                                <div class="form-group">
                                                    @if(!empty($user->profile))
                                                    <div class="row justify-content-md-center">
                                                        <div class="col-8 offset-2">
                          <div class="avatar avatar-xl mb-5">
                            <img class="avatar-img"
                               src="{{ asset(\Storage::url($user->profile)) }}"
                               alt="{{ $user->name }}">
                          </div>
                          <button class="btn btn-danger" type="submit">
                            <i class="fa fa-trash"></i> Remove
                          </button>
                                                        </div>
                                                    </div>
                      @else
                                                    <div class="row justify-content-md-center">
                        <div class="avatar avatar-xl mb-5">
                          <img class="avatar-img"
                             src="{{ asset('storage/index.jpg') }}"
                             alt="{{ $user->name }}">
                        </div>
                                                    </div>
                                                    @endif
                    </div>
                  </form>

                                            <form action="{{ route('profile') }}"
                                                  method="post"
                                                  id="profile-form"
                                                  enctype="multipart/form-data">
                                              @csrf
                                              <div class="form-group">
                                                <x-auth-validation-errors class="text-center mb-6" :errors="$errors" />
                                              </div>

                                              <div class="form-group">
                                                      <label class="small">Avatar</label>
                                                      <div class="position-relative text-center bg-secondary rounded p-6">
                                                          <div class="avatar bg-primary text-white mb-5">
                                                              <i class="icon-md fe-image"></i>
                                                          </div>

                                                          <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                          <input id="upload-user-photo" class="d-none" type="file" name="profile">
                                                          <label class="stretched-label mb-0" for="upload-user-photo"></label>
                                                      </div>
                                                  </div>

                                              <div class="form-group">
                                                  <label class="small" for="profile-name">Name</label>
                                                  <input class="form-control form-control-lg" id="name" type="text" placeholder="Type your name" name="name" value="{{ $user->name }}">
                                              </div>

                                              <div class="form-group">
                                                  <label class="small" for="profile-phone">Phone</label>
                                                  <input class="form-control form-control-lg" id="mobile" type="text" placeholder="(123) 456-7890" name="mobile" value="{{ $user->mobile }}">
                                              </div>

                                              <div class="form-group">
                                                  <label class="small" for="profile-email">Email</label>
                                                  <input class="form-control form-control-lg" id="email" type="email" placeholder="you@yoursite.com" name="email" value="{{ $user->email }}">
                                              </div>

                                             <!-- <div class="form-group">
                                                  <label class="small" for="profile-about">Bio</label>
                                                  <textarea class="form-control form-control-lg" id="profile-about" rows="3" placeholder="Express yourself" data-autosize="true" name="bio"></textarea>
                                              </div>-->

                                              <button class="btn btn-lg btn-primary btn-block" type="submit">Save Preferences</button>
                                          </form>
                                          </div>
                                        </div>
                                        <!-- .collapse -->
                                      </div>
                                      <!-- Card -->

                                      <!-- Card -->
                                      <div class="card mb-6 mb-lg-8">
                                          <div class="card-header position-relative">
                                              <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-notifications" aria-controls="profile-settings-notifications" aria-expanded="true">
                                                  <div class="row no-gutters align-items-center">
                                                      <!-- Title -->
                                                      <div class="col">
                                                          <h5>Notifications</h5>
                                                          <p>Update your profile details.</p>
                                                      </div>

                                                      <!-- Icon -->
                                                      <div class="col-auto">
                                                          <i class="text-muted icon-md fe-bell"></i>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>

                                          <div id="profile-settings-notifications" class="collapse" data-parent="#profile-settings">
                                              <div class="card-body">
                                                  <ul class="list-group list-group-flush">
                                                      <li class="list-group-item pt-0 px-0">
                                                          <div class="d-flex align-items-center justify-content-between mb-2">
                                                              <!-- Title -->
                                                              <h6 class="mb-0">Sound</h6>

                                                              <!-- Switch -->
                                                              <div class="custom-control custom-switch">
                                                                  <input type="checkbox" class="custom-control-input" id="custom-switch-1">
                                                                  <label class="custom-control-label" for="custom-switch-1"></label>
                                                              </div>
                                                          </div>
                                                          <p>Update your profile details.</p>
                                                      </li>

                                                      <li class="list-group-item px-0">
                                                          <div class="d-flex justify-content-between mb-2">
                                                              <!-- Title -->
                                                              <h6 class="mb-0">Exceptions</h6>

                                                              <!-- Switch -->
                                                              <div class="custom-control custom-switch">
                                                                  <input type="checkbox" class="custom-control-input" id="custom-switch-2">
                                                                  <label class="custom-control-label" for="custom-switch-2"></label>
                                                              </div>
                                                          </div>
                                                          <p>Update your profile details.</p>
                                                      </li>

                                                      <li class="list-group-item px-0">
                                                          <div class="d-flex justify-content-between mb-2">
                                                              <!-- Title -->
                                                              <h6 class="mb-0">Message preview</h6>

                                                              <!-- Switch -->
                                                              <div class="custom-control custom-switch">
                                                                  <input type="checkbox" class="custom-control-input" id="custom-switch-3">
                                                                  <label class="custom-control-label" for="custom-switch-3"></label>
                                                              </div>
                                                          </div>
                                                          <p>Update your profile details.</p>
                                                      </li>

                                                      <li class="list-group-item pb-0 px-0">
                                                          <div class="d-flex justify-content-between mb-2">
                                                              <!-- Title -->
                                                              <h6 class="mb-0">Show notifications</h6>

                                                              <!-- Switch -->
                                                              <div class="custom-control custom-switch">
                                                                  <input type="checkbox" class="custom-control-input" id="custom-switch-4">
                                                                  <label class="custom-control-label" for="custom-switch-4"></label>
                                                              </div>
                                                          </div>
                                                          <p>Update your profile details.</p>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div><!-- .collapse -->

                                      </div>
                                      <!-- Card -->

                                      <!-- Card -->
                                      <div class="card mb-6 mb-lg-8">
                                          <div class="card-header position-relative">
                                              <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-security" aria-expanded="true" aria-controls="profile-settings-security">
                                                  <div class="row no-gutters align-items-center">
                                                      <!-- Title -->
                                                      <div class="col">
                                                          <h5>Security</h5>
                                                          <p>Update your profile details.</p>
                                                      </div>

                                                      <!-- Icon -->
                                                      <div class="col-auto">
                                                          <i class="text-muted icon-md fe-shield"></i>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>

                                          <div id="profile-settings-security" class="collapse" data-parent="#profile-settings">
                                              <div class="card-body">
                                                  <form action="{{ route('password') }}" method="post">
                                                      @csrf

                                                      <div class="form-group">
                                                          <label class="small" for="current-password">Current password</label>
                                                          <input name="current-password" id="current-password" type="password" class="form-control form-control-lg" placeholder="Current password">
                                                      </div>

                                                      <div class="form-group">
                                                          <label class="small" for="new-password">New password</label>
                                                          <input name="new-password" id="new-password" type="password" class="form-control form-control-lg" placeholder="New password">
                                                      </div>

                                                      <div class="form-group">
                                                          <label class="small" for="verify-password">Verify password</label>
                                                          <input name="verify-password" id="verify-password" type="password" class="form-control form-control-lg" placeholder="Verify password">
                                                      </div>

                                                      <button class="btn btn-lg btn-primary btn-block" type="submit">
                                                          Change Password
                                                      </button>
                                                  </form>
                                              </div>
                                          </div><!-- .collapse -->

                                      </div>
                                      <!-- Card -->

                                      <!-- Card -->
                                      <div class="card mb-6 mb-lg-8">
                                          <div class="card-header position-relative">
                                              <a href="#" class="text-reset d-block stretched-link collapsed" data-toggle="collapse" data-target="#profile-settings-social" aria-controls="profile-settings-social" aria-expanded="true">
                                                  <div class="row no-gutters align-items-center">
                                                      <!-- Title -->
                                                      <div class="col">
                                                          <h5>Social</h5>
                                                          <p>Update your profile details.</p>
                                                      </div>

                                                      <!-- Icon -->
                                                      <div class="col-auto">
                                                          <i class="text-muted icon-md fe-share-2"></i>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>

                                          <div id="profile-settings-social" class="collapse" data-parent="#profile-settings">
                                              <div class="card-body">

                                                  <form action="{{ route('social') }}" method="post">
                                                      @csrf

                                                      <!-- Twitter -->
                                                      <div class="form-group">
                                                          <label class="small" for="profile-twitter">Twitter</label>
                                                          <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                  <div class="btn btn-ico btn-secondary btn-minimal">
                                                                      <i class="fe-twitter"></i>
                                                                  </div>
                                                              </div>
                                                              <input id="profile-twitter" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                          </div>
                                                      </div>

                                                      <!-- Facebook -->
                                                      <div class="form-group">
                                                          <label class="small" for="profile-facebook">Facebook</label>
                                                          <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                  <div class="btn btn-ico btn-secondary btn-minimal">
                                                                      <i class="fe-facebook"></i>
                                                                  </div>
                                                              </div>
                                                              <input id="profile-facebook" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                          </div>
                                                      </div>

                                                      <!-- Instagram -->
                                                      <div class="form-group">
                                                          <label class="small" for="profile-instagram">Instagram</label>
                                                          <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                  <div class="btn btn-ico btn-secondary btn-minimal">
                                                                      <i class="fe-instagram"></i>
                                                                  </div>
                                                              </div>
                                                              <input id="profile-instagram" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                          </div>
                                                      </div>

                                                      <!-- Github -->
                                                      <div class="form-group">
                                                          <label class="small" for="profile-github">Github</label>
                                                          <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                  <div class="btn btn-ico btn-secondary btn-minimal">
                                                                      <i class="fe-github"></i>
                                                                  </div>
                                                              </div>
                                                              <input id="profile-github" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                          </div>
                                                      </div>

                                                      <!-- Slack -->
                                                      <div class="form-group">
                                                          <label class="small" for="profile-slack">Slack</label>
                                                          <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                  <div class="btn btn-ico btn-secondary btn-minimal">
                                                                      <i class="fe-slack"></i>
                                                                  </div>
                                                              </div>
                                                              <input id="profile-slack" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                                                          </div>
                                                      </div>

                                                      <button class="btn btn-lg btn-primary btn-block" type="submit">Save Preferences</button>
                                                  </form>
                                              </div>
                                          </div><!-- .collapse -->

                                      </div>
                                      <!-- Card -->

                                    </div>
                                </div>
                                <!-- Accordion -->

                            </div>
                        </div>
                        <!-- Chat: Content -->

                    </div>
                    <!-- Chat: body -->

                </div>
                <!-- Chat -->

            </div>
            <!-- Main Content -->

        </div>
        <!-- Layout -->

        <!-- Modal: Invite friends -->
@include('partial.invite')
        <!-- Modal: Invite friends -->

@endsection

@section('scripts')
<script>
	$('#profile-form input#upload-user-photo').val('');
	$('#profile-form input#name').val('{{ $user->name }}');
	$('#profile-form input#email').val('{{ $user->email }}');
	$('#profile-form input#mobile').val('{{ $user->mobile }}');
</script>
@endsection
