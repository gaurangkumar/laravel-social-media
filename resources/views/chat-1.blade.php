<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Messenger - Responsive Bootstrap Application</title>

        <!-- Template core CSS -->
        
        <link href="assets/css/template.min.css" rel="stylesheet">
        <link href="assets/css/template.dark.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)">
        
        
        
    </head>
    <!-- Head -->

    <body>

        <div class="layout">

            <!-- Navigation -->
            <div class="navigation navbar navbar-light justify-content-center py-xl-7">

                <!-- Brand -->
                <a href="#" class="d-none d-xl-block mb-6">
                    <img src="assets/images/brand.svg" class="mx-auto fill-primary" data-inject-svg="" alt="" style="height: 46px;">
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
            <!-- Navigation -->

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
                                                                <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                            </div>
                                                            

                                                            <div class="media-body align-self-center mr-6">
                                                                <h6 class="mb-0">Matthew Wiggins</h6>
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
                                                        <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                    </div>
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">Matthew Wiggins</h6>
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
                                        <!-- Chat link -->
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
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="chat-2.html">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        <div class="avatar avatar-online mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                        </div>
                                                        
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Anna Bridges</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:42 am</p>
                                                            </div>
                                                            <div class="text-truncate">is typing<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Simon Hensley</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:38 am</p>
                                                            </div>
                                                            <div class="text-truncate">I’m sorry, this question would be out of my expertise.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">William Wright</h6>
                                                                <p class="small text-muted text-nowrap ml-4">10:20 am</p>
                                                            </div>
                                                            <div class="text-truncate">Hello! Let me transfer you to the marketing department.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Leslie Sutton</h6>
                                                                <p class="small text-muted text-nowrap ml-4">09:55 am</p>
                                                            </div>
                                                            <div class="text-truncate"><h6 class='d-inline'>You:</h6> I’m sorry, I don’t have the information on that.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Matthew Wiggins</h6>
                                                                <p class="small text-muted text-nowrap ml-4">09:25 am</p>
                                                            </div>
                                                            <div class="text-truncate">Matthew, let me transfer you to the marketing department.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="Thomas Walker">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Thomas Walker</h6>
                                                                <p class="small text-muted text-nowrap ml-4">09:00 am</p>
                                                            </div>
                                                            <div class="text-truncate">I am really sorry to hear that. Is there anything I can do to help you?</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/2.jpg" alt="Zane Mayes">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Zane Mayes</h6>
                                                                <p class="small text-muted text-nowrap ml-4">08:05 am</p>
                                                            </div>
                                                            <div class="text-truncate">That is a good question, let me find out for you.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
                                        <!-- Chat link -->
<!-- Chat link -->
                                        <a class="text-reset nav-link p-0 mb-6" href="#">
                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">Brian Dawson</h6>
                                                                <p class="small text-muted text-nowrap ml-4">08:00 am</p>
                                                            </div>
                                                            <div class="text-truncate">I’m not sure, but let me find out for you.</div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>
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
                                                    <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                                                </div>

                                                <h5>Matthew Wiggins</h5>
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
                                                            <p>+39 02 87 21 43 19</p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mic"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Email</p>
                                                            <p>anna@gmail.com</p>
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
                                            <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                                Logout
                                                <span class="fe-log-out ml-auto"></span>
                                            </button>
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
            <div class="main main-visible" data-mobile-height="">

                <!-- Chat -->
                <div id="chat-1" class="chat dropzone-form-js" data-dz-url="some.html">

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
                                                <img src="assets/images/avatars/11.jpg" class="avatar-img" alt="">
                                            </div>

                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1">Bootstrap Themes</h6>
                                                <small class="text-muted">35 members</small>
                                                <small class="text-muted mx-2"> • </small>
                                                <small class="text-muted">HTML, CSS, and Javascript Help</small>
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

                                <!-- Message -->
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <h6 class="mb-2">William Wright</h6>
                                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">8 mins ago</small>
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

                                <!-- Message -->
                                <div class="message message-right">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                                        <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
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
                                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">8 mins ago</small>
                                                    </div>
                                                </div>
                                                <!-- Message: content -->

                                            </div>
                                        </div>
                                        <!-- Message: row -->

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
                                                    <div class="media">
                                                        <a href="#" class="icon-shape mr-5">
                                                            <i class="fe-paperclip"></i>
                                                        </a>
                                                        <div class="media-body overflow-hidden flex-fill">
                                                            <a href="#" class="d-block text-truncate font-medium text-reset">bootstrap.min.js</a>
                                                            <ul class="list-inline small mb-0">
                                                                <li class="list-inline-item">
                                                                    <span class="t">79.2 KB</span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span class="text-uppercase">js</span>
                                                                </li>
                                                            </ul>
                                                        </div>
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

                                <!-- Divider -->
                                <div class="message-divider my-9 mx-lg-5">
                                    <div class="row align-items-center">

                                        <div class="col">
                                            <hr>
                                        </div>

                                        <div class="col-auto">
                                            <small class="text-muted">Today</small>
                                        </div>

                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <!-- Divider -->

                                <!-- Message -->
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light w-100">
                                                    <h6 class="mb-2">William Wright shared 3 photos:</h6>
                                                    <div class="form-row py-3">
                                                        <div class="col">
                                                            <img class="img-fluid rounded" src="../Boomerang/1.2/assets/images/team/1.jpg" data-action="zoom" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <img class="img-fluid rounded" src="../Boomerang/1.2/assets/images/team/2.jpg" data-action="zoom" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <img class="img-fluid rounded" src="../Boomerang/1.2/assets/images/team/3.jpg" data-action="zoom" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">8 mins ago</small>
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

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">8 mins ago</small>
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
                                    <!-- Message: body -->
                                </div>
                                <!-- Message -->

                                <!-- Message -->
                                <div class="message message-right">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                                        <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
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
                                                    <div>I'm going to meet a friend of mine at the department store. Yeah, I have to buy some presents for my parents.</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">8 mins ago</small>
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

                                <!-- Message -->
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <h6 class="mb-2">Matthew Wiggins</h6>
                                                    <div>I'm going to meet a friend of mine at the department store. Yeah, I have to buy some presents for my parents.</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">8 mins ago</small>
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
                                    <!-- Message: body -->
                                </div>
                                <!-- Message -->

                                <!-- Message -->
                                <div class="message message-right">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                                        <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
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
                                                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65">8 mins ago</small>
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

                                <!-- Message: Typing -->
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" href="#" data-chat-sidebar-toggle="#chat-1-user-profile">
                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <div>William is typing<span class="typing-dots"><span>.</span><span>.</span><span>.</span></span></div>
                                                </div>
                                                <!-- Message: content -->

                                            </div>
                                        </div>
                                        <!-- Message: row -->

                                    </div>
                                    <!-- Message: body -->
                                </div>
                                <!-- Message: Typing -->

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

                                <form id="chat-id-1-form" action="https://themes.2the.me/Messenger-1.1/assets/php/upload.php" data-emoji-form="">
                                    <div class="form-row align-items-center">
                                        <div class="col">
                                            <div class="input-group">

                                                <!-- Textarea -->
                                                <textarea id="chat-id-1-input" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                                <!-- Emoji button -->
                                                <div class="input-group-append">
                                                    <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                                        <img src="assets/images/smile.svg" data-inject-svg="" alt="">
                                                    </button>
                                                </div>

                                                <!-- Upload button -->
                                                <div class="input-group-append">
                                                    <button id="chat-upload-btn-1" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
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
                                            <h6 class="mb-n2">Bootstrap Themes</h6>
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
                                        <img class="avatar-img" src="assets/images/avatars/11.jpg" alt="">
                                    </div>
                                    <h5>Bootstrap Themes</h5>
                                    <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p>
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
                                            <!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    <div class="avatar avatar-sm avatar-online mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                    </div>
                                                    
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">Anna Bridges</a>
                                                        </h6>
                                                        <small class="text-muted">Online</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    <div class="avatar avatar-sm avatar-online mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                    </div>
                                                    
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">Simon Hensley</a>
                                                        </h6>
                                                        <small class="text-muted">Online</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    
                                                    <div class="avatar avatar-sm mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">William Wright</a>
                                                        </h6>
                                                        <small class="text-muted">last seen 7 hours ago</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    
                                                    <div class="avatar avatar-sm mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">Leslie Sutton</a>
                                                        </h6>
                                                        <small class="text-muted">last seen 6 days ago</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    
                                                    <div class="avatar avatar-sm mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">Matthew Wiggins</a>
                                                        </h6>
                                                        <small class="text-muted">last seen 2 days ago</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    
                                                    <div class="avatar avatar-sm mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="Thomas Walker">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">Thomas Walker</a>
                                                        </h6>
                                                        <small class="text-muted">last seen 10 minutes ago</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    
                                                    <div class="avatar avatar-sm mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/2.jpg" alt="Zane Mayes">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">Zane Mayes</a>
                                                        </h6>
                                                        <small class="text-muted">last seen 6 days ago</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    
                                                    <div class="avatar avatar-sm mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">Brian Dawson</a>
                                                        </h6>
                                                        <small class="text-muted">last seen 2 days ago</small>
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
                                            </li>
                                            <!-- Member -->
<!-- Member -->
                                            <li class="list-group-item py-6">
                                                <div class="media align-items-center">

                                                    
                                                    
                                                    <div class="avatar avatar-sm mr-5">
                                                        <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <h6 class="mb-0">
                                                            <a href="#" class="text-reset">William Greer</a>
                                                        </h6>
                                                        <small class="text-muted">last seen 10 minutes ago</small>
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
                                            </li>
                                            <!-- Member -->

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
                                            <h6 class="mb-n2">Bootstrap Themes</h6>
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
                                <form action="#">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">A</small>
                                        </li>

                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                <div class="avatar avatar-sm avatar-online mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                                </div>
                                                
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">Anna Bridges</h6>
                                                    <small class="text-muted">Online</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-1" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-1"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-1"></label>
                                        </li>
                                        <!-- Member -->


                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">B</small>
                                        </li>

                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                
                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">Brian Dawson</h6>
                                                    <small class="text-muted">last seen 2 hours ago</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-2" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-2"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-2"></label>
                                        </li>
                                        <!-- Member -->


                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">L</small>
                                        </li>

                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                
                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">Leslie Sutton</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-3" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-3"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-3"></label>
                                        </li>
                                        <!-- Member -->


                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">M</small>
                                        </li>

                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                
                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">Matthew Wiggins</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-4" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-4"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-4"></label>
                                        </li>
                                        <!-- Member -->


                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">S</small>
                                        </li>

                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                
                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">Simon Hensley</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-5" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-5"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-5"></label>
                                        </li>
                                        <!-- Member -->


                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">W</small>
                                        </li>

                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                
                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">William Wright</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-6" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-6"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-6"></label>
                                        </li>
                                        <!-- Member -->
<!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                
                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">William Greer</h6>
                                                    <small class="text-muted">last seen 10 minutes ago</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-7" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-7"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-7"></label>
                                        </li>
                                        <!-- Member -->


                                        <li class="list-group-item py-4">
                                            <small class="text-uppercase">Z</small>
                                        </li>

                                        <!-- Member -->
                                        <li class="list-group-item py-6">
                                            <div class="media align-items-center">

                                                
                                                
                                                <div class="avatar avatar-sm mr-5">
                                                    <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h6 class="mb-0">Zane Mayes</h6>
                                                    <small class="text-muted">last seen 3 days ago</small>
                                                </div>

                                                <div class="align-self-center ml-auto">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="id-add-user-chat-1-user-8" type="checkbox">
                                                        <label class="custom-control-label" for="id-add-user-chat-1-user-8"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Label -->
                                            <label class="stretched-label" for="id-add-user-chat-1-user-8"></label>
                                        </li>
                                        <!-- Member -->

                                    </ul>
                                </form>
                                <!-- Members -->
                            </div>
                            <!-- Body -->

                            <!-- Button -->
                            <div class="border-top py-7">
                                <div class="container-fluid">
                                    <button class="btn btn-lg btn-block btn-primary d-flex align-items-center" type="submit">
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

        <!-- Scripts -->
        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins/plugins.bundle.js"></script>
        <script src="assets/js/template.js"></script>
        <!-- Scripts -->

    </body>
</html>