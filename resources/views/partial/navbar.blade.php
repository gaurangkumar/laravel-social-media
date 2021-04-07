            <div class="navigation navbar navbar-light justify-content-center py-xl-7">

                <!-- Brand -->
                <a href="{{ route('home') }}" class="d-none d-xl-block mb-6">
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
                        <a class="nav-link position-relative p-0 py-xl-3 active " data-toggle="tab" href="#tab-content-dialogs" title="Chats" role="tab">
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
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-demos" title="Pages" role="tab">
                            <i class="icon-lg fe-layers"></i>
                        </a>
                    </li>

                    <!-- Settings -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" href="{{ route('settings') }}" title="Settings">
                            <i class="icon-lg fe-settings"></i>
                        </a>
                    </li>


                </ul>
                <!-- Menu -->

            </div>
