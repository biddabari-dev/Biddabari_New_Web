<header id="Header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="mobile-menu d-flex justify-content-between align-items-center">
                <div class="main-logo">
                    <a href="{{ route('front.home') }}"><img src="{{ asset('frontend') }}/assets/images/logo/biddabari-logo.png" alt="Logo"
                            srcset=""></a>
                </div>

                <div class="moblie-icon">
                    <div class="nav-item login-button">
                        @if(auth()->check())
                        <a href="{{ route('dashboard') }}" type="button" class="btn btn_warning">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" type="button" class="btn btn_warning">Login</a>
                        @endif
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <div class="search_button">

                        <form class="search_button_area" action="">
                            <div class="input-group">
                                <span class="input-group-text border-0">
                                    <button class="" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </span>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Search courses" name="search" />
                            </div>
                        </form>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('front.home') }}">হোম </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('course') ? 'active' : '' }}" href="{{ route('front.all-courses') }}">কোর্সসমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('exam') ? 'active' : '' }}" href="{{ route('front.all-exams') }}">পরীক্ষাসমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('free-course') ? 'active' : '' }}" href="{{ route('front.free-courses') }}">ফ্রি সার্ভিস</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('notice') ? 'active' : '' }}" href="{{ route('front.notices') }}">নোটিশ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ route('front.all-blogs') }}">ব্লগ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('product') ? 'active' : '' }}" href="{{ route('front.all-products') }}">বই</a>
                    </li>
                </ul>

                @if(auth()->check())
                <a href="#" class="border-radius-50" data-bs-toggle="dropdown">
                    <img src="{{ asset('frontend/man.png') }}" width="50" alt="login image">
                </a>
                <div class="dropdown-menu dropdown-menu-end" style="right: 305px;">
                    <div class="dropdown-item">
                        <a href="{{ route('dashboard') }}" class="text-dark f-s-20">Dashboard</a>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{ route('front.all-job-circulars') }}" class="text-dark f-s-20">Job Circulars</a>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{ route('front.student.view-profile') }}" class="text-dark f-s-20">Profile</a>
                    </div>
                    <div class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                        <a href="#" class="text-dark f-s-20">Logout</a>
                        <form action="{{ route('logout') }}" method="post" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </div>

                @else
                <div class="nav-item login-button">
                    <a href="{{ route('login') }}" type="button" class="btn btn_warning">Login</a>
                </div>
                @endif
            </div>
        </div>
    </nav>
</header>

