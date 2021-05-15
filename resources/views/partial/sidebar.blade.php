            <div class="sidebar">
                <div class="tab-content h-100" role="tablist">
                    <!-- create-group -->
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

                                    <!-- Create group -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

									<form id="createGroup" action="{{ route('group.store') }}" method="post" enctype="multipart/form-data">
                                    	@csrf

                                        <div class="tab-content" role="tablist">
                                            <!-- Group details -->
                                            <div id="create-group-details" class="tab-pane fade show active" role="tabpanel">
                                                    <div class="form-group">
                                                        <label class="small">Photo</label>
                                                        <div class="position-relative text-center bg-secondary rounded p-6">
                                                            <div class="avatar bg-primary text-white mb-5">
                                                                <i class="icon-md fe-image"></i>
                                                            </div>

                                                            <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                            <input id="upload-group-photo" name="profile" class="d-none" type="file">
                                                            <label class="stretched-label mb-0" for="upload-group-photo"></label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="small" for="name">Name</label>
                                                        <input class="form-control form-control-lg" name="name" id="name" type="text" placeholder="Group Name">
                                                    </div>


                                                    <div class="form-group mb-0">
                                                        <label class="small" for="description">Description</label>
                                                        <textarea class="form-control form-control-lg" name="description" id="description" rows="6" placeholder="Group Description"></textarea>
                                                    </div>

                                            </div>
                                            <!-- Chat details -->

                                            <!-- Chat Members -->
                                            <div id="create-group-members" class="tab-pane fade" role="tabpanel">
                                                <nav class="list-group list-group-flush mb-n6">

                                                    @foreach($friends as $letter => $friend_list)
                                                    <div class="mb-6">
                                                        <small class="text-uppercase">{{ $letter }}</small>
                                                    </div>

                                                    @foreach($friend_list as $friend)
                                                    <!-- Friend -->
                                                    <div class="card mb-6">
                                                        <div class="card-body">

                                                            <div class="media">
                                                                <div class="avatar avatar-online mr-5">
                                                                    <img class="avatar-img" src="{{ empty($friend->profile) ? asset('storage/index.jpg') : asset(\Storage::url($friend->profile)) }}" alt="{{ $friend->name }}">
                                                                </div>

                                                                <div class="media-body align-self-center mr-6">
                                                                    <h6 class="mb-0">{{ $friend->name }}</h6>
                                                                    <small class="text-muted">Online</small>
                                                                </div>

                                                                <div class="align-self-center ml-auto">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input class="custom-control-input" id="id-user-{{ $friend->id }}" type="checkbox" name="members[]" value="{{ $friend->id }}">
                                                                        <label class="custom-control-label" for="id-user-{{ $friend->id }}"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <!-- Label -->
                                                        <label class="stretched-label" for="id-user-{{ $friend->id }}"></label>
                                                    </div>
                                                    <!-- Friend -->
                                                    @endforeach
                                                    @endforeach

                                                </nav>
                                            </div>
                                            <!-- Chat Members -->
                                        </div>
                                    </form>
                                    <!-- Create chat -->

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="pb-6">
                                <div class="container-fluid">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="$('#createGroup').submit()">Create group</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- friends-list -->
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

                                        @foreach($friends as $letter => $friend_list)
                                        <div class="mb-6">
                                            <small class="text-uppercase">{{ $letter }}</small>
                                        </div>

                                            @foreach($friend_list as $friend)
                                        <!-- Friend -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    <div class="avatar avatar-online mr-5">
                                                        <img class="avatar-img" src="{{ empty($friend->profile) ? asset('storage/index.jpg') : asset(\Storage::url($friend->profile)) }}" alt="{{ $friend->name }}">
                                                    </div>
                                                    
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{ $friend->name }}</h6>
                                                        <small class="text-muted">Online</small>
                                                        <!--<small class="text-muted">last seen 2 hours ago</small>-->
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
                                                <a href="{{ route('chat', $friend->id) }}" class="stretched-link"></a>

                                            </div>
                                        </div>
                                        <!-- Friend -->
                                            @endforeach
                                        @endforeach

                                    </nav>
                                    <!-- Friends -->

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- chats-->
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
                                    <!--<div class="text-center hide-scrollbar d-flex my-7" data-horizontal-scroll="">
                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6" data-toggle="modal" data-target="#status-modal">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/2.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">William</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6" data-toggle="modal" data-target="#exampleModalPreview">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/3.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">Simon</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6" data-toggle="modal" data-target="#full-modal">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/4.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm avatar-online mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/5.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">Zane</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/6.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/7.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">William</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/8.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">Simon</div>
                                        </a>

                                        <a href="#" class="d-block text-reset mr-7 mr-lg-6">
                                            <div class="avatar avatar-sm mb-3">
                                                <img class="avatar-img" src="{{ asset('assets/images/avatars/9.jpg') }}" alt="Image Description">
                                            </div>
                                            <div class="small">Thomas</div>
                                        </a>
                                    </div>-->
                                    <!-- Favourites -->

                                    <!-- Chats -->
                                    <nav class="nav d-block list-discussions-js mb-n6">

                                        <!-- Chat link -->
                                        @foreach($side_chats as $chat)
                                            @php
                                                if($chat->group_id) {
                                                    $chat_link = route('group.show', $chat->group_id);

                                                    $chat_img = $chat->groups->profile;

                                                    $chat_user = ucwords($chat->groups->name);
                                                }
                                                elseif($chat->user_id == $user->id) {
                                                    $chat_link = route('chat', $chat->rid);

                                                    $chat_img = $chat->users->profile;

                                                    $chat_user = ucwords($chat->recievers->name);
                                                }
                                                else {
                                                    $chat_link = route('chat', $chat->user_id);

                                                    $chat_img = $chat->users->profile;

                                                    $chat_user = ucwords($chat->users->name);
                                                }
                                                $chat_img = empty($chat_img) ?
                                                     asset('storage/index.jpg') :
                                                     asset(\Storage::url($chat_img));
                                            @endphp
                                        <a class="text-reset nav-link p-0 mb-6" href="{{ $chat_link }}">
                                            <div class="card card-active-listener">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <!--for online - add avatar-online class-->
                                                        <div class="avatar mr-5">
                                                            <img class="avatar-img" src="{{ $chat_img }}" alt="{{ $chat_user }}">
                                                        </div>
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">
                                                                    {{ $chat_user }}
                                                                    <!--<div class="badge badge-circle badge-primary badge-border-light badge-top-right">
                                                                        <span>3</span>
                                                                    </div>-->
                                                                </h6>
                                                                <p class="small text-muted text-nowrap ml-4">
                                                                    {{ date("H:i A", strtotime($chat->created_at)) }}
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

                    <!-- pages -->
                    <div class="tab-pane fade h-100" id="tab-content-demos" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Pages</h2>
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

                                            <div class="media align-items-center text-primary">
                                                <div class="mr-5">
                                                    <i class="fas fa-2x fa-plus-circle"></i>
                                                    <!--<img src="assets/images/brand.svg" class="fill-primary" data-inject-svg="" alt="" style="height: 46px; width: 46px;">-->
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-basic-inverse stretched-link text-primary" data-toggle="modal" data-target="#createPage">Create New Page</a>
                                                    </h5>
                                                    <!--p>Quick setup and build tools.</p-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Modal -->
                                    <div class="modal fade" id="createPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Create New page</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('page.store') }}"
                                                          method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label class="small" for="profile">Photo</label>
                                                            <div class="position-relative text-center bg-secondary rounded p-6">
                                                                <div class="avatar bg-primary text-white mb-5">
                                                                    <i class="icon-md fe-image"></i>
                                                                </div>

                                                                <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                                <input id="profile" class="d-none" type="file" name="profile">
                                                                <label class="stretched-label mb-0" for="profile"></label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-title">Name</label>
                                                            <input class="form-control form-control-lg" id="new-chat-title" type="text" placeholder="Page Name" name="name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-topic">Unique Name</label>
                                                            <input class="form-control form-control-lg" id="new-chat-topic" type="text" placeholder="Page Unique Name" name="uname">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-description">Description</label>
                                                            <textarea class="form-control form-control-lg" id="new-chat-description" rows="6" placeholder="Page Description" name="description"></textarea>
                                                        </div>

                                                        <div class="form-group mb-0">
                                                            <div class="row">
                                                                <div class=" col-6">
                                                                    <button type="button" class="btn btn-lg btn-secondary btn-block" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class=" col-6">
                                                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Create Page</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="my-6">Pages:</h5>

                                    <nav class="nav d-block list-discussions-js mb-n6">

                                        @foreach($pages as $page)
                                        <a class="text-reset nav-link p-0 mb-6"
                                           href="{{ route('page.show', $page->pages->uname) }}">
                                            <div class="card card-active-listener">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <!--for offline - <div class="avatar mr-5">-->
                                                        <div class="avatar avatar-online mr-5">
                                                            <img class="avatar-img"
                                                                 src="
                                                                {{
                                                                   empty($page->pages->profile) ? asset('storage/index.jpg') :
                                                                   asset(\Storage::url($page->pages->profile))
																}}"
                                                                 alt="{{ $page->pages->name }}">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto">
                                                                    {{ $page->pages->name }}
                                                                </h6>
                                                                <p class="small text-muted text-nowrap ml-4">
                                                                    {{ date("H:i a", strtotime($page->pages->created_at)) }}
                                                                </p>
                                                            </div>
                                                            <!-- last chat -->
                                                            <div class="text-truncate">
                                                                <!--you send last msg '['.$chat->id.'] '. - <h6 class='d-inline'>You:</h6>-->
                                                                {{ $page->pages->description }}
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

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- user-profile -->
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
                                                    <img class="avatar-img" src="{{ empty($user->profile) ? asset('storage/index.jpg') :
														asset(\Storage::url($user->profile))
													}}" alt="">
                                                </div>

                                                <h5>{{ $user->name }}</h5>
                                                <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
  

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    @if( $user->businesses->count() )
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <div class="media align-items-center text-primary">
                                                <div class="mr-5">
                                                        <!-- <i class="fas fa-shopping-cart"></i> -->
                                                    <img src="{{ asset(\Storage::url($user->businesses[0]->profile)) }}" class="fill-primary rounded-circle" data-inject-svg="" alt="" style="height: 46px; width: 46px;">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-basic-inverse stretched-link text-primary" data-toggle="modal" data-target="#showBusiness">{{ ucwords($user->businesses[0]->name)}}</a>
                                                    </h5>
                                                    <p>{{ $user->businesses[0]->btype}}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media align-items-center text-primary">
                                                <div class="mr-5">
                                                    <i class="fas fa-2x fa-plus-circle"></i>
                                                    <!--<img src="assets/images/brand.svg" class="fill-primary" data-inject-svg="" alt="" style="height: 46px; width: 46px;">-->
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-basic-inverse stretched-link text-primary" data-toggle="modal" data-target="#createProduct">Add Product</a>
                                                    </h5>
                                                    <!--p>Quick setup and build tools.</p-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div id="showBusiness" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Business</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('business.store') }}"
                                                          method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <img src="{{ asset(\Storage::url($user->businesses[0]->profile)) }}" class="mt-3 ml-3 fill-primary rounded-circle" data-inject-svg="" alt="" style="height: 200px; width: 200px;">
                                                            </div>
                                                            <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="small" for="profile">Photo</label>
                                                            <div class="position-relative text-center bg-secondary rounded p-6">
                                                                <div class="avatar bg-primary text-white mb-5">
                                                                    <i class="icon-md fe-image"></i>
                                                                </div>

                                                                <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                                <input id="busProfile" class="d-none" type="file" name="profile">
                                                                <label class="stretched-label mb-0" for="busProfile"></label>
                                                            </div>
                                                        </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-title">Name</label>
                                                            <input class="form-control form-control-lg" id="new-chat-title" type="text" placeholder="Business Name" name="name" value="{{ $user->businesses[0]->name }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-topic">Business Type</label>
                                                            <select class="form-control form-control-lg" id="new-chat-topic" placeholder="Business Type" name="btype">
                                                                @php
                                                                    $btypes = ['Apparel & clothes','Arts &entertainment','Beauty & Cosmetic','Eduction','Eventaplanner','Finance','Grocery Store','Hotel','Medical $ Health','Nonprofit  Oraganization','Restaurant','Travel &Transportation'];
                                                                @endphp
                                                                
                                                                @foreach($btypes as $btype)
                                                                <option value="{{ $btype }}"
                                                                {{ $user->businesses[0]->btype == $btype ? 'selected' : '' }}>
                                                                    {{ $btype }}
                                                                </option>
                                                                @endforeach
                                                            
                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-topic">Address</label>
                                                            <input class="form-control form-control-lg" id="new-chat-topic" type="text" placeholder=" Business Address" name="address" value="{{$user->businesses[0]->address}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-website">Website</label>
                                                            <input class="form-control form-control-lg" id="new-chat-website" type="text" placeholder="Business Website" name="website" value="{{ $user->businesses[0]->website }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-description">Description</label>
                                                            <textarea class="form-control form-control-lg" id="new-chat-description" rows="6" placeholder="Business Description" name="description">{{ $user->businesses[0]->description }}</textarea>
                                                        </div>

                                                        <div class="form-group mb-0">
                                                            <div class="row">
                                                                <div class=" col-6">
                                                                    <button type="button" class="btn btn-lg btn-secondary btn-block" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class=" col-6">
                                                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Create Business</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="createProduct" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('product.store') }}"
                                                          method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="business_id" value="{{ $user->businesses[0]->id }}">

                                                        <div class="form-group">
                                                            <label class="small" for="img">Photo</label>
                                                            <div class="position-relative text-center bg-secondary rounded p-6">
                                                                <div class="avatar bg-primary text-white mb-5">
                                                                    <i class="icon-md fe-image"></i>
                                                                </div>

                                                                <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                                <input id="img" class="d-none" type="file" name="img">
                                                                <label class="stretched-label mb-0" for="img"></label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-title">Name</label>
                                                            <input class="form-control form-control-lg" id="new-chat-title" type="text" placeholder="Product Name" name="name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-topic">Price
                                                        </label>
                                                            <input class="form-control form-control-lg" id="new-chat-topic" type="text" placeholder="product price" name="price">
                                                        </div>

                                                         <div class="form-group">
                                                            <label class="small" for="new-chat-topic">Discount</label>
                                                            <input class="form-control form-control-lg" id="new-chat-topic" type="text" placeholder="Product Discount" name="discount">
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-description">Description</label>
                                                            <textarea class="form-control form-control-lg" id="new-chat-description" rows="6" placeholder="Product Description" name="description"></textarea>
                                                        </div>

                                                        <div class="form-group mb-0">
                                                            <div class="row">
                                                                <div class=" col-6">
                                                                    <button type="button" class="btn btn-lg btn-secondary btn-block" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class=" col-6">
                                                                    <button class="btn btn-lg btn-primary btn-block" type="submit">AddProduct</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @else
                                    <div class="card mb-6">
                                        <div class="card-body">

                                            <div class="media align-items-center text-primary">
                                                <div class="mr-5">
                                                    <i class="fas fa-2x fa-plus-circle"></i>
                                                    <!--<img src="assets/images/brand.svg" class="fill-primary" data-inject-svg="" alt="" style="height: 46px; width: 46px;">-->
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-basic-inverse stretched-link text-primary" data-toggle="modal" data-target="#createBusiness">Create New Business</a>
                                                    </h5>
                                                    <!--p>Quick setup and build tools.</p-->
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div id="createBusiness" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Create New Business</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('business.store') }}"
                                                          method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label class="small" for="profile">Photo</label>
                                                            <div class="position-relative text-center bg-secondary rounded p-6">
                                                                <div class="avatar bg-primary text-white mb-5">
                                                                    <i class="icon-md fe-image"></i>
                                                                </div>

                                                                <p class="small text-muted mb-0">You can upload jpg, gif or png files. <br> Max file size 3mb.</p>
                                                                <input id="busProfile" class="d-none" type="file" name="profile">
                                                                <label class="stretched-label mb-0" for="busProfile"></label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-title">Name</label>
                                                            <input class="form-control form-control-lg" id="new-chat-title" type="text" placeholder="Business Name" name="name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-topic">Business Type</label>
                                                            <select class="form-control form-control-lg" id="new-chat-topic" placeholder="Business Type" name="btype">
                                                                @php
                                                                    $btypes = ['Apparel & clothes','Arts &entertainment','Beauty & Cosmetic','Eduction','Eventaplanner','Finance','Grocery Store','Hotel','Medical $ Health','Nonprofit  Oraganization','Restaurant','Travel &Transportation'];
                                                                @endphp
                                                                
                                                                @foreach($btypes as $btype)
                                                                <option value="{{ $btype }}">
                                                                    {{ $btype }}
                                                                </option>
                                                                @endforeach
                                                            
                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-topic">Address</label>
                                                            <input class="form-control form-control-lg" id="new-chat-topic" type="text" placeholder=" Business Address" name="address">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="small" for="new-chat-website">Website</label>
                                                            <input class="form-control form-control-lg" id="new-chat-website" type="text" placeholder="Business Website" name="website">
                                                        </div>

														<div class="form-group">
                                                            <label class="small" for="new-chat-description">Description</label>
                                                            <textarea class="form-control form-control-lg" id="new-chat-description" rows="6" placeholder="Business Description" name="description"></textarea>
                                                        </div>

                                                        <div class="form-group mb-0">
                                                            <div class="row">
                                                                <div class=" col-6">
                                                                    <button type="button" class="btn btn-lg btn-secondary btn-block" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class=" col-6">
                                                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Create Business</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									@endif

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

@include('partial.status')