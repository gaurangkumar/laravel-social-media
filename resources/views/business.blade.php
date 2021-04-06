@extends('layouts.main')

@section('styles')
@endsection

@section('content')

        <div class="layout">

            <!-- Navigation -->
@include('partial.navbar')
            <!-- Navigation -->

            <!-- Sidebar -->
@include('partial.sidebar')
            <!-- Sidebar -->

            <!-- Main Content -->
            <div class="main main-visible" data-mobile-height="">

                <!-- Chat -->
                <div id="chat-2" class="chat dropzone-form-js" data-dz-url="some.html">

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
                                            <div class="avatar avatar-sm avatar-online d-none d-lg-inline-block mr-5">
                                                <img src="{{ empty($business->profile) ?
																 asset('storage/index.jpg') :
																 asset(\Storage::url($business->profile))
														  }}"
                                                     class="avatar-img" alt="{{ $business->name }}">
                                            </div>

                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1">{{ ucwords($business->name) }}</h6>
                                                <span class="badge badge-dot badge-success d-inline-block d-xl-none mr-1"></span>
                                                <small class="text-muted">{{ $business->btype }} </small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Chat toolbar -->
                                    <div class="col-3 col-xl-6 text-right">
                                        <ul class="nav justify-content-end">
                                            <li class="nav-item list-inline-item d-none d-xl-block mr-3">
                                                <a class="nav-link text-muted px-3" data-toggle="collapse" data-target="#chat-2-search" href="#" title="Search this chat">
                                                    <i class="icon-md fe-search"></i>
                                                </a>
                                            </li>

                                            <li class="nav-item list-inline-item d-none d-xl-block mr-0">
                                                <a class="nav-link text-muted px-3" href="#" data-chat-sidebar-toggle="#chat-2-info" title="Details">
                                                    <i class="icon-md fe-more-vertical"></i>
                                                </a>
                                            </li>

                                            <!-- Mobile nav -->
                                            <li class="nav-item list-inline-item d-block d-xl-none">
                                                <div class="dropdown">
                                                    <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-md fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item d-flex align-items-center" data-toggle="collapse" data-target="#chat-2-search" href="#">
                                                            Search <span class="ml-auto pl-5 fe-search"></span>
                                                        </a>

                                                        <a class="dropdown-item d-flex align-items-center" href="#" data-chat-sidebar-toggle="#chat-2-info">
                                                            Chat Info <span class="ml-auto pl-5 fe-more-horizontal"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Mobile nav -->
                                        </ul>
                                    </div>

                                </div><!-- .row -->

                            </div>
                        </div>
                        <!-- Chat: Header -->

                        <!-- Chat: Search -->
                        <div class="collapse border-bottom px-lg-8" id="chat-2-search">
                            <div class="container-xxl py-4 py-lg-6">

                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Search this chat" aria-label="Search this chat">

                                    <div class="input-group-append">
                                        <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Chat: Search -->

                        <!-- Chat: Content-->
                        <div class="chat-content px-lg-8">
                            <div class="container-xxl py-6 py-lg-10">			
							@foreach($businesses as $business)
                                <!-- Message -->
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-2-info">
                                        <img class="avatar-img"
                                             src="{{ empty($business->profile) ?
                                                 asset('storage/index.jpg') :
                                                 asset(\Storage::url($business->profile))
                                             }}" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <div></div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">
                                                             {{ date("H:i a", strtotime($business->created_at)) }} 
                                                        </small>
                                                    </div>
                                                </div>
                                                <!-- Message: content -->

                                                <!-- Message: dropdown -->
                                                <div class="dropdown">
                                                    <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe-more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Edit <span class="ml-auto fe-edit-3"></span>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Share <span class="ml-auto fe-share-2"></span>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Delete <span class="ml-auto fe-trash-2"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Message: dropdown -->

                                            </div>
                                        </div>
                                        <!-- Message: row -->

                                    </div>
                                    <!-- Message: Body -->
                                </div>
                                <!-- Message -->
                            @endforeach

                                <!-- Divider -->

                            </div>

                            <!-- Scroll to end -->
                            <div class="end-of-chat"></div>
                        </div>
                        <!-- Chat: Content -->

                        <!-- Chat: DropzoneJS container -->
                        <!-- Chat: DropzoneJS container -->

                        <!-- Chat: Footer -->
                        <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <form id="chat-id-2-form" action="{{ route('post_create', $page->id) }}" data-emoji-form="" method="post" enctype="multipart/form-data">
									@csrf
                                    <fieldset {{ ($page->user_id == $user->id) ? '' : 'disabled' }}>
                                    <div class="form-row align-items-center">
                                        <div class="col">
                                            <div class="input-group">

                                                <!-- Textarea -->
                                                <textarea id="chat-id-2-input" name="msg" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                                <!-- Emoji button -->
                                                <div class="input-group-append">
                                                    <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                                        <img src="{{ asset('assets/images/smile.svg') }}" data-inject-svg="" alt="">
                                                    </button>
                                                </div>

                                                <!-- Upload button -->
                                                <div class="input-group-append">
                                                    <button id="chat-upload-btn-2" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                                        <img src="{{ asset('assets/images/paperclip.svg') }}" data-inject-svg="" alt="">
                                                    </button>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- Submit button -->
                                        <div class="col-auto">
                                            <button class="btn btn-ico btn-primary rounded-circle" type="submit">
                                                <span class="fe-send"></span>
                                            </button>
                                        </div>

                                    </div>
                                    </fieldset>

                                </form>

                            </div>
                        </div>
                        <!-- Chat: Footer -->
                    </div>
                    <!-- Chat: body -->

                    <!-- Chat Details -->
                    <div id="chat-2-info" class="chat-sidebar">
                        <div class="d-flex h-100 flex-column">

                            <!-- Header -->
                            <div class="border-bottom py-4 py-lg-6">
                                <div class="container-fluid">

                                    <ul class="nav justify-content-between align-items-center">
                                        <!-- Close sidebar -->
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                                                <i class="icon-md fe-chevron-left"></i>
                                            </a>
                                        </li>

                                        <!-- Title(mobile) -->
                                        <li class="text-center d-block d-lg-none">
                                            <h6 class="mb-n2">{{ $business->name }}</h6>
                                            <small class="text-muted">Chat Details</small>
                                        </li>

                                        <!-- Dropdown -->
                                        <li class="nav-item list-inline-item">
                                            <div class="dropdown">
                                                <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-md fe-sliders"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Mute
                                                        <span class="ml-auto fe-bell"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete
                                                        <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- Header -->

                            <!-- Body -->
                            <div class="hide-scrollbar flex-fill">

                                <div class="border-bottom text-center py-9 px-10">
                                    <!-- Photo -->
                                    <div class="avatar avatar-xl mx-5 mb-5">
                                        <img class="avatar-img" src="{{ empty($business->profile) ?
                                                                 asset('storage/index.jpg') :
                                                                 asset(\Storage::url($business->profile))
                                                          }}" alt="{{ $page->name }}">
                                    </div>
                                    <h5> {{ $business->name }} </h5>
                                    <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p>
                                </div>

                                <!-- Navs -->
                                <div class="nav nav-tabs nav-justified bg-light rounded-0" role="tablist">
                                    <a class="nav-item nav-link active" href="#chat-2-user-details" data-toggle="tab" aria-selected="true" role="tab">Details</a>
                                    <a class="nav-item nav-link" href="#chat-2-user-files" data-toggle="tab"  role="tab">Files</a>
                                </div>
                                <!-- Navs -->

                                <div class="tab-content" role="tablist">
                                    <!-- Details -->
                                    <div id="chat-2-user-details" class="tab-pane fade show active" role="tabpanel">
                                        <ul class="list-group list-group-flush mb-8">
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Country</p>
                                                        <p>Warsaw, Poland</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-globe"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Phone</p>
                                                        <p>{{ $business->mobile }}</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-mic"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Email</p>
                                                        <p></p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-mail"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Time</p>
                                                        <p>10:03 am</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-clock"></i>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item py-6">
                                                <a href="#" class="media text-muted">
                                                    <div class="media-body align-self-center">
                                                        Twitter
                                                    </div>
                                                    <i class="icon-sm fe-twitter"></i>
                                                </a>
                                            </li>

                                            <li class="list-group-item py-6">
                                                <a href="#" class="media text-muted">
                                                    <div class="media-body align-self-center">
                                                    Facebook
                                                    </div>
                                                    <i class="icon-sm fe-facebook"></i>
                                                </a>
                                            </li>

                                            <li class="list-group-item py-6">
                                                <a href="#" class="media text-muted">
                                                    <div class="media-body align-self-center">
                                                        Github
                                                    </div>
                                                    <i class="icon-sm fe-github"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Details -->

                                    <!-- Files -->
                                    <div id="chat-2-user-files" class="tab-pane fade" role="tabpanel">
                                        <ul class="list-group list-group-flush list-group-no-border-first">
                                            <!-- File -->
                                            <li class="list-group-item py-6">
                                                <div class="media">

                                                    <div class="icon-shape bg-primary text-white mr-5">
                                                        <i class="fe-paperclip"></i>
                                                    </div>

                                                    <div class="media-body align-self-center overflow-hidden">
                                                        <h6 class="text-truncate mb-0">
                                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                        </h6>

                                                        <ul class="list-inline small mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="text-muted">79.2 KB</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted text-uppercase">txt</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Download <span class="ml-auto fe-download"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Share <span class="ml-auto fe-share-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- File -->

<!-- File -->
                                            <li class="list-group-item py-6">
                                                <div class="media">

                                                    <div class="icon-shape bg-primary text-white mr-5">
                                                        <i class="fe-paperclip"></i>
                                                    </div>

                                                    <div class="media-body align-self-center overflow-hidden">
                                                        <h6 class="text-truncate mb-0">
                                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                        </h6>

                                                        <ul class="list-inline small mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="text-muted">79.2 KB</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted text-uppercase">psd</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Download <span class="ml-auto fe-download"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Share <span class="ml-auto fe-share-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- File -->

<!-- File -->
                                            <li class="list-group-item py-6">
                                                <div class="media">

                                                    <div class="icon-shape bg-primary text-white mr-5">
                                                        <i class="fe-paperclip"></i>
                                                    </div>

                                                    <div class="media-body align-self-center overflow-hidden">
                                                        <h6 class="text-truncate mb-0">
                                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                        </h6>

                                                        <ul class="list-inline small mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="text-muted">79.2 KB</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted text-uppercase">pdf</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Download <span class="ml-auto fe-download"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Share <span class="ml-auto fe-share-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- File -->

<!-- File -->
                                            <li class="list-group-item py-6">
                                                <div class="media">

                                                    <div class="icon-shape bg-primary text-white mr-5">
                                                        <i class="fe-paperclip"></i>
                                                    </div>

                                                    <div class="media-body align-self-center overflow-hidden">
                                                        <h6 class="text-truncate mb-0">
                                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                        </h6>

                                                        <ul class="list-inline small mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="text-muted">79.2 KB</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted text-uppercase">txt</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Download <span class="ml-auto fe-download"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Share <span class="ml-auto fe-share-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- File -->

<!-- File -->
                                            <li class="list-group-item py-6">
                                                <div class="media">

                                                    <div class="icon-shape bg-primary text-white mr-5">
                                                        <i class="fe-paperclip"></i>
                                                    </div>

                                                    <div class="media-body align-self-center overflow-hidden">
                                                        <h6 class="text-truncate mb-0">
                                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                                        </h6>

                                                        <ul class="list-inline small mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="text-muted">79.2 KB</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted text-uppercase">pdf</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Download <span class="ml-auto fe-download"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Share <span class="ml-auto fe-share-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- File -->


                                        </ul>
                                    </div>
                                    <!-- Files -->
                                </div>

                            </div>
                            <!-- Body -->

                        </div>
                    </div>
                    <!-- Chat Details -->

                </div>
                <!-- Chat -->

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
