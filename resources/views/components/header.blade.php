<header class="tj-header-area header-absolute">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">

                <div class="logo-box">
                    <a href="{{url('/')}}">
                        <img class="rounded-pill" src="{{asset('images/me.png')}}" alt="">
                    </a>
                </div>

                <div class="header-info-list d-none d-md-inline-block">
                    <ul class="ul-reset">
                        <li><a href="{{url('/')}}">Sharafat</a></li>
                    </ul>
                </div>

                <div class="header-menu">
                    <nav>
                        <ul>
                            <li class=""><a href="#services-section">Services</a></li>
                            <li class=""><a href="#works-section">Works</a></li>
                            <li class=""><a href="#resume-section">Resume</a></li>
                            <li class=""><a href="#skills-section">Skills</a></li>
                            <li class=""><a href="#testimonials-section">Testimonials</a></li>
                            <li><a href="#contact-section">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-button">
                    <a href="#" class="btn tj-btn-primary">Hire me!</a>
                    @if (Request::session()->has('authenticated'))
                    <a href="{{url('dashboard')}}" class="btn tj-btn-secondary mx-2">{{__("Admin")}}</a>
                    @else
                    <a href="{{url('login')}}" class="btn tj-btn-secondary mx-2">Login</a>
                    @endif         
                </div>

                <div class="menu-bar d-lg-none">
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="tj-header-area header-2 header-sticky sticky">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap align-items-center">

                <div class="logo-box">
                    <a href="{{url('/')}}">
                        <img class="rounded-pill" src="{{asset('images/me.png')}}" alt="">
                    </a>
                </div>

                <div class="header-info-list d-none d-md-inline-block">
                    <ul class="ul-reset">
                        <li><a href="{{url('/')}}">Sharafat</a></li>
                    </ul>
                </div>

                <div class="header-menu">
                    <nav>
                        <ul>
                            <li class=""><a href="#services-section">Services</a></li>
                            <li class=""><a href="#works-section">Works</a></li>
                            <li class=""><a href="#resume-section">Resume</a></li>
                            <li class=""><a href="#skills-section">Skills</a></li>
                            <li class=""><a href="#testimonials-section">Testimonials</a></li>
                            <li><a href="#contact-section">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-button">
                    <a href="#" class="btn tj-btn-primary">Hire me!</a>
                    @if (Request::session()->has('authenticated'))
                    <a href="{{url('dashboard')}}" class="btn tj-btn-secondary mx-2">{{__("Admin")}}</a>
                    @else
                    <a href="{{url('login')}}" class="btn tj-btn-secondary mx-2">Login</a>
                    @endif              
                </div>

                <div class="menu-bar d-lg-none">
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>