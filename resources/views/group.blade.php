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
                                            <div class="avatar avatar-sm d-none d-xl-inline-block mr-5">
                                                <img src="{{ empty($group->profile) ?
																 asset('storage/index.jpg') :
																 asset(\Storage::url($group->profile))
														  }}" class="avatar-img" alt="{{ ucwords($group->name) }}">
                                            </div>

                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1">{{ ucwords($group->name)  }}</h6>
                                                <small class="text-muted">{{ $members_count }} members</small>
                                                <small class="text-muted mx-2"> • </small>
                                                <small class="text-muted">{{ $group->description }}</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Chat toolbar -->
                                    <div class="col-3 col-xl-6 text-right">
                                        <ul class="nav justify-content-end">
                                            <li class="nav-item list-inline-item d-none d-xl-block mr-5">
                                                <a class="nav-link text-muted px-3" data-toggle="collapse" data-target="#chat-1-search" href="#" title="Search this chat">
                                                    <i class="icon-md fe-search"></i>
                                                </a>
                                            </li>

                                            <li class="nav-item list-inline-item d-none d-xl-block mr-3">
                                                <a class="nav-link text-muted px-3" href="#" data-chat-sidebar-toggle="#chat-1-members" title="Add People">
                                                    <i class="icon-md fe-user-plus"></i>
                                                </a>
                                            </li>

                                            <li class="nav-item list-inline-item d-none d-xl-block mr-0">
                                                <a class="nav-link text-muted px-3" href="#" data-chat-sidebar-toggle="#chat-1-info" title="Details">
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
                                                        <a class="dropdown-item d-flex align-items-center" data-toggle="collapse" data-target="#chat-1-search" href="#">
                                                            Search <span class="ml-auto pl-5 fe-search"></span>
                                                        </a>

                                                        <a class="dropdown-item d-flex align-items-center" href="#" data-chat-sidebar-toggle="#chat-1-info">
                                                            Chat Info <span class="ml-auto pl-5 fe-more-horizontal"></span>
                                                        </a>

                                                        <a class="dropdown-item d-flex align-items-center" href="#" data-chat-sidebar-toggle="#chat-1-members">
                                                            Add Members <span class="ml-auto pl-5 fe-user-plus"></span>
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
                        <div class="collapse border-bottom px-lg-8" id="chat-1-search">
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
                                @if($chat->user_id != $user->id)
                                <!-- Message -->
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                                        <img class="avatar-img" src="{{ empty($chat->users->profile) ?
                                                 asset('storage/index.jpg') :
                                                 asset(\Storage::url($chat->users->profile))
                                             }}" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <h6 class="mb-2">{{$chat->users->name }}</h6>
                                                    <div>{{$chat->msg}}</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">{{ date("H:i a", strtotime($chat->created_at)) }}</small>
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
                                        <img class="avatar-img" src= "{{ empty($chat->users->profile) ?
                                                 asset('storage/index.jpg') :
                                                 asset(\Storage::url($chat->users->profile))
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
                                                    <div>{{ $chat->msg}}</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">{{ date("H:i a", strtotime($chat->created_at)) }}</small>
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

                            </div>

                            <!-- Scroll to end -->
                            <div class="end-of-chat"></div>
                        </div>
                        <!-- Chat: Content -->

                        <!-- Chat: DropzoneJS container -->
                        <div class="chat-files hide-scrollbar px-lg-8">
                            <div class="container-xxl">
                                <div class="dropzone-previews-js form-row py-4"></div>
                            </div>
                        </div>
                        <!-- Chat: DropzoneJS container -->

                        <!-- Chat: Footer -->
                        <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <form id="chat-id-2-form" action="{{ route('groupchat', $group->id) }}" data-emoji-form="" method="post">
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
                    <div id="chat-1-info" class="chat-sidebar">
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
                                            <h6 class="mb-n2">{{ $group->name }}</h6>
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
                                        <img class="avatar-img" src="{{ empty($group->profile) ?
																 asset('storage/index.jpg') :
																 asset(\Storage::url($group->profile))
														  }}" alt="{{ ucwords($group->name) }}">
                                    </div>
                                    <h5>{{ ucwords($group->name) }}</h5>
                                    <p class="text-muted">{{ $group->description }}</p>
                                </div>

                                <!-- Navs -->
                                <ul class="nav nav-tabs nav-justified bg-light rounded-0" role="tablist">
                                    <li class="nav-item">
                                        <a href="#chat-id-1-members" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#chat-id-1-files" class="nav-link" data-toggle="tab" role="tab">Files</a>
                                    </li>
                                </ul>
                                <!-- Navs -->

                                <div class="tab-content">
                                    <!-- Members -->
                                    <div id="chat-id-1-members" class="tab-pane fade show active">
                                        <ul class="list-group list-group-flush list-group-no-border-first">
                                            @foreach($group_members as $members)
                                                @foreach($members as $member)
                                            <!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    <div class="avatar avatar-sm avatar-online mr-5">
                                                        <img class="avatar-img" src="{{ empty($member->profile) ? asset('storage/index.jpg') : asset(\Storage::url($member->profile)) }}" alt="{{ ucwords($member->name) }}">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">
                                                                {{ ucwords($member->name) }}
                                                            </a>
                                                        </h6>
                                                        <!--<small class="text-muted">Online</small>-->
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Promote <span class="ml-auto fe-trending-up"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Restrict <span class="ml-auto fe-trending-down"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-user-x"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                @endforeach
                                            </li>
                                            <!-- Member -->
                                                
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- Members -->

                                    <!-- Files -->
                                    <div id="chat-id-1-files" class="tab-pane fade">
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

                    <!-- New members -->
                    <div id="chat-1-members" class="chat-sidebar">
                        <div class="d-flex h-100 flex-column">

                            <!-- Header -->
                            <div class="border-bottom py-4 py-lg-6">
                                <div class="container-fluid">

                                    <ul class="nav justify-content-between align-items-center">
                                        <!-- Close sidebar -->
                                        <li class="nav-item">
                                            <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                                                <i class="icon-md fe-chevron-left"></i>
                                            </a>
                                        </li>

                                        <!-- Title(mobile) -->
                                        <li class="text-center d-block d-lg-none">
                                            <h6 class="mb-n2">{{ ucwords($group->name) }}</h6>
                                            <small class="text-muted">Add Members</small>
                                        </li>

                                        <!-- Dropdown -->
                                        <li class="nav-item">
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
                                <!-- Search -->
                                <div class="border-bottom py-7">
                                    <div class="container-fluid">

                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Search for users..." aria-label="Search users...">
                                                <div class="input-group-append">
                                                    <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                        <i class="fe-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- Search -->

                                <!-- Members -->

                                <form action="{{ route('group_members', $group->id) }}" method="post" id="editgroup">
                                    @csrf
                                    <ul class="list-group list-group-flush">
                                        @foreach($edit_members as $letter => $members)
                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">{{ strtoupper($letter) }}</small>

                                        </li>

                                            @foreach($members as $member)
                                            @php
                                            $key = array_search($member->id, array_column($group->members->toArray(), 'user_id'));
                                            if($key === false) {
                                                $checked = '';
                                            }
                                            else {
                                                $checked = 'checked';
                                            }
                                            @endphp
                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                <div class="avatar avatar-sm avatar-online mr-5">

                                                    <img class="avatar-img" src="{{ empty($member->profile) ? asset('storage/index.jpg') : asset(\Storage::url($member->profile)) }}" alt="{{ ucwords($member->name) }}">
                                                </div>
                                                
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">{{ ucwords($member->name) }}</h6>

                                                    <small class="text-muted">Online</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">

                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-{{ $member->id }}" type="checkbox" value="{{ $member->id }}" name="members[]" {{ $checked }}>
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-{{ $member->id }}"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-{{ $member->id }}"></label>
                                        </li>
                                        <!-- Member -->
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </form>
                                <!-- Members -->
                            </div>
                            <!-- Body -->

                            <!-- Button -->
                            <div class="border-top py-7">
                                <div class="container-fluid">
                                    <button class="btn btn-lg btn-block btn-primary d-flex align-items-center" type="submit" onClick="$('#editgroup').submit()">
                                        Add members
                                        <span class="fe-user-plus ml-auto"></span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- New members -->

                    <!-- User's details -->
                    <div id="chat-1-user-profile" class="chat-sidebar">
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
                                            <h6 class="mb-n2">William Wright</h6>
                                            <small class="text-muted">User Details</small>
                                        </li>

                                        <!-- Dropdown -->
                                        <li class="nav-item list-inline-item">
                                            <div class="dropdown">
                                                <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-md fe-sliders"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Mute <span class="ml-auto fe-bell"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
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
                                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="">
                                        <div class="badge badge-sm badge-pill badge-primary badge-border-basic badge-top-right">
                                            <span class="text-uppercase">Pro</span>
                                        </div>
                                    </div>
                                    <h5>William Wright</h5>
                                    <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p>
                                </div>

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
                                                <p>+39 02 87 21 43 19</p>
                                            </div>
                                            <i class="text-muted icon-sm fe-mic"></i>
                                        </div>
                                    </li>

                                    <li class="list-group-item py-6">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Email</p>
                                                <p>anna@gmail.com</p>
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
                            <!-- Body -->

                            <!-- Button -->
                            <div class="border-top py-7">
                                <div class="container-fluid">
                                    <button class="btn btn-lg btn-block btn-primary d-flex align-items-center" type="submit">
                                        Add friend
                                        <span class="fe-user-plus ml-auto"></span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- User's details -->

                </div>
                <!-- Chat -->

            </div>
            <!-- Main Content -->

            <!-- Active Users: Sidebar -->

            <!-- Active Users: Sidebar -->

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

    </body>
</html>