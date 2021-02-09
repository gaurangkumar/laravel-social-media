                        <div class="header-top">
                            <div class="logo ml-2 mt-3">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/template/assets/img/logo.png') }}" alt="Agwis Messanger" class="header_image">
                                </a>
                            </div>
                            <ul class="header-action mt-4">
                                <li>
                                    <a href="#" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h ellipse_header"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right header_drop_icon">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#new_group">New
                                            Group</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#profile_modal">Profile</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#settings_modal">Settings</a>
                                        <a href="login.html" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav nav-tabs chat-tabs mt-4">
                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'home' ? 'active' : '' }}" href="index-2.html">Chats</a>
                            </li>
                            <li class="nav-item ml-1">
                                <a class="nav-link {{ $currentRoute == 'page' ? 'active' : '' }}" href="group.html">Pages</a>
                            </li>
                            <li class="nav-item ml-1">
                                <a class="nav-link {{ $currentRoute == 'status' ? 'active' : '' }}" href="status.html">Status</a>
                            </li>
                            <li class="nav-item ml-1">
                                <a class="nav-link {{ $currentRoute == 'call' ? 'active' : '' }}" href="call-log.html">Call</a>
                            </li>
                        </ul>
