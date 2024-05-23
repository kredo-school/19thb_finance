@guest
<div class="bg-color-Background" style="height: 80px;">
    <div class="container">
        <nav class="navbar navbar-expand-lg">

            <!-- logo -->
            <a class="navbar-brand" href="{{ route('welcome') }}" style="max-width: 200px;">
                <img src="{{ asset('images/pig-logo.png') }}" alt="" class="img-fluid">
            </a>
            
            <button class="navbar-toggler"type="button" 
                    data-bs-toggle="collapse" data-bs-target="#navbar-content">
                <span class="navbar-toggler-icon">
                </span>
            </button>

            <!-- nav -->
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav ms-auto me-3 align-middle">
                    <li class="nav-item h5 me-2 mb-0">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item h5 me-2 mb-0">
                        <a class="nav-link" href="{{ route('learnMore') }}">Service</a>
                    </li>
                    <li class="nav-item h5 me-2 mb-0">
                        <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                    </li>
                    <li class="nav-item h5 me-2 mb-0">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                </ul>
                <a href="{{ route('inquiry') }}" class="btn btn-sub border btn-lg rounded-pill color3 px-5 me-0">
                    <span class="h4">inquiry</span>
                </a>
            </div>

        </nav>
    </div>
</div>
@else
<div class="bg-color-Rainbow" style="height: 80px;">
    <div class="container">
        <nav class="navbar navbar-expand-lg">

            <!-- logo -->
            <a class="navbar-brand" href="{{ route('calendars.home') }}" style="max-width: 200px;">
                <img src="{{ asset('images/pig-logo.png') }}" alt="" class="img-fluid">
            </a>

            <!-- nav -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto bg-white rounded-pill pe-3">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a href="">
                            @if(Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="" class="avatar-sm rounded-circle">
                            @else
                                <div style="width: 38px; height: 38px;" class="m-1">
                                    <img src="{{ asset('images/people_default.png') }}" alt="" class="img-fluid avatar-sm border rounded-circle p-1">
                                </div>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- DROPDOWN MENU --}}
                                <span class="fs-5">{{ Auth::user()->name }}</span>  
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <button class="navbar-toggler ms-3" type="button" data-bs-toggle="modal" data-bs-target="#menuModal" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content text-center bg-color-Rainbow">
                    <div class="modal-header">
                        <!-- logo -->
                        <a href="navbar-brand" href="{{ route('calendars.home') }}" style="max-width: 200px;">
                            <img src="{{ asset('images/pig-logo.png') }}" alt="" class="img-fluid">
                        </a>
                        <button type="button" class="btn-close bg-white me-3 align-top" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul style="list-style-type:none;">
                            <li class="h5"><a href="{{ route('welcome') }}">Home</a></li>
                            <li class="h5"><a href="{{ route('learnMore') }}">Service</a></li>
                            <li class="h5"><a href="{{ route('premium')}}">Premium</a></li>
                            <li class="h5"><a href="{{ route('aboutUs') }}">About Us</a></li>
                            <li class="h5"><a href="{{ route('faq') }}">FAQ</a></li>
                            <a href="{{ route('inquiry') }}" class="btn btn-sub border btn-lg rounded rounded-pill color3 px-5 me-0">
                                <span class="h4">inquiry</span>
                            </a>
                        </ul>
                    </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.fullscreen -->
            

        </nav>
    </div>
</div>

@endguest
