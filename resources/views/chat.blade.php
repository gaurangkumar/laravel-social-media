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
                                                <img src="{{ empty($sender->profile) ?
																 asset('storage/index.jpg') :
																 asset(\Storage::url($sender->profile))
														  }}"
                                                     class="avatar-img" alt="{{ $sender->name }}">
                                            </div>

                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1">{{ $sender->name }}</h6>
                                                <span class="badge badge-dot badge-success d-inline-block d-xl-none mr-1"></span>
                                                <small class="text-muted">Online</small>
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
							@foreach($chats as $chat)
                                <!-- Message -->
                                @if($chat->user_id == $sender->id)
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-2-info">
                                        <img class="avatar-img"
                                             src="{{ empty($sender->profile) ?
                                                 asset('storage/index.jpg') :
                                                 asset(\Storage::url($sender->profile))
                                             }}" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <!--<h6 class="mb-2">{{ $sender->name }}</h6>-->
                                                    <div>{{ $chat->msg }}</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">
                                                            {{ date("H:i a", strtotime($chat->created_at)) }}
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
							    @else
                                <!-- Message -->
                                <div class="message message-right">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                                        <img class="avatar-img"
                                             src="{{ empty($user->profile) ?
                                                asset('storage/index.jpg') :
                                                asset(\Storage::url($user->profile))
                                             }}" alt="">
                                    </div>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center justify-content-end">

                                                <!-- Message: dropdown -->
                                                <div class="dropdown">
                                                    <a class="text-muted opacity-60 mr-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                                                <!-- Message: content -->
                                                <div class="message-content bg-primary text-white">
                                                    <!--<h6 class="mb-2">{{ $user->name }}</h6>-->
                                                    <div>{{ $chat->msg }}</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">
                                                            {{ date("H:i a", strtotime($chat->created_at)) }}
                                                        </small>
                                                    </div>
                                                </div>
                                                <!-- Message: content -->

                                            </div>
                                        </div>
                                        <!-- Message: row -->

                                    </div>
                                    <!-- Message: body -->
                                </div>
                                <!-- Message -->
                                @endif
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

                                <form id="chat-id-2-form" action="{{ route('sendchat', $sender->id) }}" data-emoji-form="" method="post">
									@csrf
                                    <div class="form-row align-items-center">
                                        <div class="col">
                                            <div class="input-group">

                                                <!-- Textarea -->
                                                <textarea id="chat-id-2-input" name="msg" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                                <!-- Emoji button -->
                                                <div class="input-group-append">
                                                    <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                                        <img src="assets/images/smile.svg" data-inject-svg="" alt="">
                                                    </button>
                                                </div>

                                                <!-- Upload button -->
                                                <div class="input-group-append">
                                                    <button id="chat-upload-btn-2" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                                        <img src="assets/images/paperclip.svg" data-inject-svg="" alt="">
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
                                            <h6 class="mb-n2">{{ $sender->name }}</h6>
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
                                        <img class="avatar-img" src="{{ asset($sender->profile) }}" alt="{{ $sender->name }}">
                                    </div>
                                    <h5>{{ $sender->name }}</h5>
                                    {!! is_null($business) ? '' : '<h3>'.ucwords($business->name).'</h3>' !!}
                                    {!! is_null($business) ? '' : '<small>'.ucwords($business->btype).'</small>' !!}
                                    <p class="text-muted">{{ is_null($business) ? '' : $business->description }}</p>
                                </div>

                                <!-- Navs -->
                                <div class="nav nav-tabs nav-justified bg-light rounded-0" role="tablist">
                                    <a class="nav-item nav-link active" href="#chat-2-user-details" data-toggle="tab" aria-selected="true" role="tab">Details</a>
                                    @if(!empty($business))
                                    <a class="nav-item nav-link" href="#chat-2-user-files" data-toggle="tab"  role="tab">Files</a>
                                    @endif
                                </div>
                                <!-- Navs -->

                                <div class="tab-content" role="tablist">
                                    <!-- Details -->
                                    <div id="chat-2-user-details" class="tab-pane fade show active" role="tabpanel">
                                        <ul class="list-group list-group-flush mb-8">
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Address</p>
                                                        <p>{{ is_null($business) ? '' : $business->address }}</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fas fa-map-marker-alt"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Phone</p>
                                                        <p>{{ $sender->mobile }}</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-mic"></i>
                                                </div>
                                            </li>

                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Email</p>
                                                        <p>{{ $sender->email }}</p>
                                                    </div>
                                                    <i class="text-muted icon-sm fe-mail"></i>
                                                </div>
                                            </li>

                                            @if( !empty($business) && !empty($business->website) )
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <p class="small text-muted mb-0">Website</p>
                                                        <p><a href='{{$business->website}}' target='blank'>{{$business->website}}</a></p>
                                                    </div>
                                                    <i class="text-muted icon-sm fas fa-globe"></i>
                                                </div>
                                            </li>
                                            @endif
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
                                    @if(!empty($business))
                                    <div id="chat-2-user-files" class="tab-pane fade" role="tabpanel">
                                        <ul class="list-group list-group-flush list-group-no-border-first">

                                            <!-- File -->
                                            @if(!empty($business->products))
                                                @foreach($business->products as $product)
                                            <li class="list-group-item py-6">
                                                <div class="media">

                                                    <div class="icon-shape bg-primary text-white mr-5">
                                                        @if(empty($product->img))
                                                        <i class="fas fa-shopping-cart"></i>
                                                        @else
                                                        <img src="{{ asset(\Storage::url($product->img)) }}" class="rounded-circle" width="50">
                                                        @endif
                                                    </div>

                                                    <div class="media-body align-self-center overflow-hidden">
                                                        <h6 class="text-truncate mb-0">
                                                            <a href="#" class="text-reset" title="E5419783-047D-4B4C-B30E-F24DD8247731.JPG">{{ $product->name }}</a>
                                                        </h6>

                                                        <ul class="list-inline small mb-0">
                                                            <li class="list-inline-item">
                                                                <span class="text-muted"><i class="fas fa-rupee-sign"></i> {{$product->price}}</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted text-uppercase">
                                                                    {{ strlen($product->description) > 10 ? substr($product->description, 0, 10).'...' : $product->description }}
                                                                </span>
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
                                                @endforeach
                                            @endif
                                            <!-- File -->

                                        </ul>
                                    </div>
                                    @endif
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
