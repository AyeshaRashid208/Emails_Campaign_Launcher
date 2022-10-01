<!-- ==== header start ==== -->
<header class="header">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h4>Rental Property</h4>
                <!-- <img src="/assets/images/logo.png" alt="Logo" class="logo" /> -->
            </a>
            <div class="navbar__out order-2 order-xl-3">
                <div class="nav__group__btn">
                    @auth
                        <a href="{{ route('dashboard') }}" class="button button--effect d-none d-sm-block"> Dashboard <i class="fa-solid fa-arrow-right-long"></i></a>
                        <a href="{{ route('login') }}" class="log d-none d-sm-block" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="log d-none d-sm-block"> Log In </a>
                        <a href="{{ route('register') }}" class="button button--effect d-none d-sm-block"> Join Now <i class="fa-solid fa-arrow-right-long"></i></a>
                    @endauth
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                    aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse order-3 order-xl-2" id="primaryNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subscribe') }}">Subscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- ==== #header end ==== -->