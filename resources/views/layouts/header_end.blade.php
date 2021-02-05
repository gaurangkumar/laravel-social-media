
</head>

<body>

    <header>
        <div id="sticky-header" class="main-menu-area header-2-menu pl-55 pr-55">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 d-flex align-items-center">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('logo.png') }}" alt="" width="90"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 align-items-end">
                        <div class="main-menu float-right ">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active">
                                        <a href="{{route("home")}}" class="menu-orgafe">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('about')}}" class="menu-orgafe">About</a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="menu-orgafe">Premixes</a>
                                        @if(count($premixes))
                                        <ul class="sub-menu text-left">
                                            @foreach($premixes as $premix)
                                            <li><a href="{{ route('premix', $premix->slug) }}">{{ $premix->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    <li class="">
                                        <a href="#" class="menu-orgafe">Industry</a>
                                        @if(count($industries))
                                        <ul class="sub-menu text-left">
                                            @foreach($industries as $industry)
                                            <li><a href="{{ route('industry', $industry->slug) }}">{{ $industry->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    <li class="">
                                        <a href="{{route('product')}}" class="menu-orgafe">Product</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('contact')}}" class="menu-orgafe">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
