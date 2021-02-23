@extends('layouts.main')

@section('styles')
@endsection

@section('content')

        <div class="layout">

            <!-- Navbar -->
            <div class="navigation navbar navbar-light justify-content-center py-xl-7">

                <!-- Brand -->
                <a href="#" class="d-none d-xl-block mb-6">
                    <img src="{{ asset('assets/images/brand.svg') }}" class="mx-auto fill-primary" data-inject-svg="" alt="" style="height: 46px;">
                </a>

                <!-- Menu -->
                <ul class="nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center py-3 py-lg-0" role="tablist">

                    <!-- Invisible item to center nav vertically -->
                    <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
                        <a class="nav-link position-relative p-0 py-xl-3" href="#" title="">
                            <i class="icon-lg fe-x"></i>
                        </a>
                    </li>

                    <!-- Create group -->
                    <li class="nav-item">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-create-chat" title="Create chat" role="tab">
                            <i class="icon-lg fe-edit"></i>
                        </a>
                    </li>

                    <!-- Friend -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-friends" title="Friends" role="tab">
                            <i class="icon-lg fe-users"></i>
                        </a>
                    </li>

                    <!-- Chats -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3 active" data-toggle="tab" href="#tab-content-dialogs" title="Chats" role="tab">
                            <i class="icon-lg fe-message-square"></i>
                            <div class="badge badge-dot badge-primary badge-bottom-center"></div>
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-user" title="User" role="tab">
                            <i class="icon-lg fe-user"></i>
                        </a>
                    </li>

                    <!-- Demo only: Documentation -->
                    <li class="nav-item mt-xl-9 d-none d-xl-block flex-xl-grow-1">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-demos" title="Demos" role="tab">
                            <i class="icon-lg fe-layers"></i>
                        </a>
                    </li>

                    <!-- Settings -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" href="settings.html" title="Settings">
                            <i class="icon-lg fe-settings"></i>
                        </a>
                    </li>

                </ul>
                <!-- Menu -->

            </div>
            <!-- Navbar -->

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="tab-content h-100" role="tablist">
                    <div class="tab-pane fade h-100" id="tab-content-create-chat" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Create group</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Tabs -->
                                    <ul class="nav nav-tabs nav-justified mb-6" role="tablist">
                                        <li class="nav-item">
                                            <a href="#create-group-details" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">Details</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#create-group-members" class="nav-link" data-toggle="tab" role="tab" aria-selected="false">Members</a>
                                        </li>
                                    </ul>
                                    <!-- Tabs -->

                                    <!-- Create chat -->
                                    <div class="tab-content" role="tablist">

                                        <!-- Chat details -->
                                        <div id="create-group-details" class="tab-pane fade show active" role="tabpanel">
                                            <form action="#">
                                                <div class="form-group">
                                                    <label class="small">Photo</label>
                                                    <div class="position-relative text-center bg-secondary rounded p-6">
                                                        <div class="avatar bg-primary text-white mb-5">
                                                            <i class="icon-md fe-image"></i>
                                                        </div>

                                                        <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                        <input id="upload-chat-photo" class="d-none" type="file">
                                                        <label class="stretched-label mb-0" for="upload-chat-photo"></label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="small" for="new-chat-title">Name</label>
                                                    <input class="form-control form-control-lg" name="new-chat-title" id="new-chat-title" type="text" placeholder="Group Name">
                                                </div>

                                                <div class="form-group">
                                                    <label class="small" for="new-chat-topic">Topic (optional)</label>
                                                    <input class="form-control form-control-lg" name="new-chat-topic" id="new-chat-topic" type="text" placeholder="Group Topic">
                                                </div>

                                                <div class="form-group mb-0">
                                                    <label class="small" for="new-chat-description">Description</label>
                                                    <textarea class="form-control form-control-lg" name="new-chat-description" id="new-chat-description" rows="6" placeholder="Group Description"></textarea>
                                                </div>

                                            </form>
                                        </div>
                                        <!-- Chat details -->

                                        <!-- Chat Members -->
                                        <div id="create-group-members" class="tab-pane fade" role="tabpanel">
                                            <nav class="list-group list-group-flush mb-n6">

                                                <div class="mb-6">
                                                    <small class="text-uppercase">A</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            <div class="avatar avatar-online mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                            </div>
                                                            
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Anna Bridges</h6>
                                                                <small class="text-muted">Online</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-1" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-1"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">B</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Brian Dawson</h6>
                                                                <small class="text-muted">last seen 2 hours ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-2" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-2"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-2"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">L</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Leslie Sutton</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-3" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-3"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-3"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">M</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="{{ $user->name }}">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">{{ $user->name }}</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-4" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-4"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-4"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">S</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Simon Hensley</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-5" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-5"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-5"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">W</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">William Wright</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-6" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-6"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-6"></label>
                                                </div>
                                                <!-- Friend --><!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">William Greer</h6>
                                                                <small class="text-muted">last seen 10 minutes ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-7" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-7"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-7"></label>
                                                </div>
                                                <!-- Friend -->

                                                <div class="mb-6">
                                                    <small class="text-uppercase">Z</small>
                                                </div>

                                                <!-- Friend -->
                                                <div class="card mb-6">
                                                    <div class="card-body">

                                                        <div class="media">
                                                            
                                                            
                                                            <div class="avatar mr-5">
                                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Zane Mayes</h6>
                                                                <small class="text-muted">last seen 3 days ago</small>
                                                            </div>

                                                            <div class="align-self-center ml-auto">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" id="id-user-8" type="checkbox">
                                                                    <label class="custom-control-label" for="id-user-8"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Label -->
                                                    <label class="stretched-label" for="id-user-8"></label>
                                                </div>
                                                <!-- Friend -->

                                            </nav>
                                        </div>
                                        <!-- Chat Members -->

                                    </div>
                                    <!-- Create chat -->

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="pb-6">
                                <div class="container-fluid">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Create group</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade h-100" id="tab-content-friends" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Friends</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Button -->
                                    <button type="button" class="btn btn-lg btn-block btn-secondary d-flex align-items-center mb-6" data-toggle="modal" data-target="#invite-friends">
                                        Invite friends
                                        <i class="fe-users ml-auto"></i>
                                    </button>

                                    <!-- Friends -->
                                    <nav class="mb-n6">

                                        <div class="mb-6">
                                            <small class="text-uppercase">A</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    <div class="avatar avatar-online mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                    </div>
                                                    
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Anna Bridges</h6>
                                                        <small class="text-muted">Online</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="chat-2.html" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">B</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Brian Dawson</h6>
                                                        <small class="text-muted">last seen 2 hours ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">L</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Leslie Sutton</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">M</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="{{ $user->name }}">
                                                    </div>
                                                    

                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{ $user->name }}</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">S</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Simon Hensley</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">W</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">William Wright</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend --><!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">William Greer</h6>
                                                        <small class="text-muted">last seen 10 minutes ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                        <div class="mb-6">
                                            <small class="text-uppercase">Z</small>
                                        </div>

                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    
                                                    <div class="avatar mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Zane Mayes</h6>
                                                        <small class="text-muted">last seen 3 days ago</small>
                                                    </div>

                                                    <div class="align-self-center ml-5">
                                                        <div class="dropdown z-index-max">
                                                            <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    New chat <span class="ml-auto fe-edit-2"></span>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                                    Delete <span class="ml-auto fe-trash-2"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Link -->
                                                <a href="#" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->

                                    </nav>
                                    <!-- Friends -->

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Chats</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Favourites -->
                                    <div class="text-center hide-scrollbar d-flex my-7" data-horizontal-scroll="">
                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/2.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">William</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Simon</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Zane</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">William</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/8.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Simon</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>
                                    </div>
                                    <!-- Favourites -->

                                    <!-- Chats -->
                                    <nav class="nav d-block list-discussions-js mb-n6">
                                        <!-- group 
                                        <a class="text-reset nav-link p-0 mb-6" href="chat-1.html">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/11.jpg" alt="Bootstrap Themes">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Bootstrap Themes</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:42 am</p>
                                                            </div>
                                                            <div class="text-truncate">Anna Bridges: Hey, Maher! How are you? The weather is great isn't it?</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                                <div class="badge badge-circle badge-primary badge-border-light badge-top-right">
                                                    <span>3</span>
                                                </div>
                                                
                                            </div>
                                        </a>
                                        -->

                                        @foreach($side_chats as $chat)
                                        <a class="text-reset nav-link p-0 mb-6" href="
                                            @if($chat->user_id == auth()->user()->id)
                                                {{ route('chat', $chat->rid) }}
                                            @else
                                                {{ route('chat', $chat->user_id) }}
                                            @endif
                                        ">
                                            <div class="card card-active-listener">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <!--for offline - <div class="avatar mr-5">-->
                                                        <div class="avatar avatar-online mr-5">
                                                            <img class="avatar-img" src="
                                                                @if($chat->user_id == auth()->user()->id)
                                                                    {{ asset($chat->recievers->profile) }}
                                                                @else
                                                                    {{ asset($chat->users->profile) }}
                                                                @endif" alt="
                                                                    @if($chat->user_id == auth()->user()->id)
                                                                        {{ $chat->recievers->name }}
                                                                    @else
                                                                        {{ $chat->users->name }}
                                                                    @endif
                                                                             ">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">
                                                                    @if($chat->user_id == auth()->user()->id)
                                                                        {{ $chat->recievers->name }}
                                                                    @else
                                                                        {{ $chat->users->name }}
                                                                    @endif
                                                                </h6>
                                                                <p class="small text-muted text-nowrap ml-4">
                                                                    {{ date("H:i a", strtotime($chat->created_at)) }}
                                                                </p>
                                                            </div>
                                                            <!-- last chat -->
                                                            <div class="text-truncate">
                                                                <!--you send last msg '['.$chat->id.'] '. - <h6 class='d-inline'>You:</h6>-->
                                                                {{ $chat->msg }}
                                                            </div>
                                                            <!-- typing <div class="text-truncate">is typing<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach
                                        <!-- Chat link -->

                                    </nav>
                                    <!-- Chats -->

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade h-100" id="tab-content-demos" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Demos</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media align-items-center">
                                                <div class="mr-5">
                                                    <img src="assets/images/brand.svg" class="fill-primary" data-inject-svg="" alt="" style="height: 46px; width: 46px;">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-0">
                                                        <a href="documentation/index.html" class="text-basic-inverse stretched-link">Documentation</a>
                                                    </h5>
                                                    <p>Quick setup and build tools.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <h5 class="my-6">Chat Pages:</h5>

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/chat.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Light mode</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="demo-light/index.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/chat-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Dark mode</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="demo-dark/index.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <h5 class="my-6">Account Pages:</h5>

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/sign-in-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Sign In</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="signin.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/sign-up-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Sign Up</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="signup.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <img class="card-img-top" alt="" src="assets/images/demos/password-reset-dark.jpg">
                                        <div class="card-body border-top">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="mb-0">Password Reset</h5>
                                                </div>
                                                <div class="align-self-center">
                                                    <a href="password-reset.html" class="text-muted stretched-link">
                                                        <i class="fe-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade h-100" id="tab-content-user" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Profile</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Search -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <div class="text-center py-6">
                                                <!-- Photo -->
                                                <div class="avatar avatar-xl mb-5">
                                                    <img class="avatar-img" src="{{ asset($user->profile) }}" alt="">
                                                </div>

                                                <h5>{{ $user->name }}</h5>
                                                <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Country</p>
                                                            <p>Warsaw, Poland</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-globe"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Phone</p>
                                                            <p>{{ $user->mobile }}</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mic"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Email</p>
                                                            <p>{{ $user->email }}</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mail"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Time</p>
                                                            <p>10:03 am</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-clock"></i>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 py-6">
                                                    <a href="#" class="media text-muted">
                                                        <div class="media-body align-self-center">
                                                            Twitter
                                                        </div>
                                                        <i class="icon-sm fe-twitter"></i>
                                                    </a>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <a href="#" class="media text-muted">
                                                        <div class="media-body align-self-center">
                                                        Facebook
                                                        </div>
                                                        <i class="icon-sm fe-facebook"></i>
                                                    </a>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <a href="#" class="media text-muted">
                                                        <div class="media-body align-self-center">
                                                            Github
                                                        </div>
                                                        <i class="icon-sm fe-github"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <div class="form-row">
                                        <div class="col">
                                            <!-- Button -->
                                            <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                                Settings
                                                <span class="fe-settings ml-auto"></span>
                                            </button>
                                        </div>

                                        <div class="col">
                                            <!-- Button -->
                                        <form method="POST" action="{{ route('logout') }}" >
                                            @csrf
                                            <button href="route('logout')"
													   type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Logout') }}
												<span class="fe-log-out ml-auto"></span>
                                            </button>
                                        </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Sidebar -->

            <!-- Main Content -->
            <div class="main" data-mobile-height="">

                <!-- Default Page -->
                <div class="chat flex-column justify-content-center text-center">
                    <div class="container-xxl">

                        <div class="avatar avatar-lg mb-5">
                            <img class="avatar-img" src="{{ asset($user->profile) }}" alt="">
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
        <div id="dropzone-template-js">
            <div class="col-lg-4 my-3">
                <div class="card bg-light">
                    <div class="card-body p-3">
                        <div class="media align-items-center">

                            <div class="dropzone-file-preview">
                                <div class="avatar avatar rounded bg-secondary text-basic-inverse d-block mr-5">
                                    <i class="fe-paperclip"></i>
                                </div>
                            </div>

                            <div class="dropzone-image-preview">
                                <div class="avatar avatar mr-5">
                                    <img src="#" class="avatar-img rounded" data-dz-thumbnail="" alt="">
                                </div>
                            </div>

                            <div class="media-body overflow-hidden">
                                <h6 class="text-truncate small mb-0" data-dz-name></h6>
                                <p class="extra-small" data-dz-size></p>
                            </div>

                            <div class="ml-5">
                                <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted" data-dz-remove>
                                    <i class="fe-x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DropzoneJS: Template -->

        <!-- Modal: Invite friends -->
        <div class="modal fade" id="invite-friends" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <div class="media flex-fill">
                            <div class="icon-shape rounded-lg bg-primary text-white mr-5">
                                <i class="fe-users"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h5 class="modal-title">Invite friends</h5>
                                <p class="small">Invite colleagues, clients and friends.</p>
                            </div>
                        </div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="invite-email" class="small">Email</label>
                                <input type="text" class="form-control form-control-lg" id="invite-email">
                            </div>

                            <div class="form-group mb-0">
                                <label for="invite-message" class="small">Invitation message</label>
                                <textarea class="form-control form-control-lg" id="invite-message" data-autosize="true"></textarea>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-block btn-primary d-flex align-items-center">
                            Invite friend
                            <i class="fe-user-plus ml-auto"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal: Invite friends -->

@endsection

@section('scripts')
@endsection
