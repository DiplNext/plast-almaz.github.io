<!--offcanvas menu area start-->
<div class="body_overlay"></div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="welcome_text text-center">
                        <a class="sticky_none" href="{{ route('home') }}">
                            <img src="/img/logo/logo.png" alt="">
                            <span>plast-almaz.md</span>
                        </a>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Catalog</a>
                                <ul class="sub-menu">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('category', $category) }}">{{ $category->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}">
                                <a href="{{ route('contacts') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<!--header area start-->
<header class="header_section">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header_top_inner d-flex justify-content-between">
                        <div class="welcome_text">
                            <p>World Wide Completely Free Returns and Free Shipping</p>
                        </div>
                        <div class="header_top_sidebar d-flex align-items-center">
                            <ul class="d-flex">
                                <li><i class="icofont-phone"></i> <a href="tel:+00123456789">+00 123 456 789</a>
                                </li>
                                <li><i class="icofont-envelope"></i> <a
                                        href="mailto:demo@example.com">demo@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_header d-flex justify-content-between align-items-center">
                    <div class="header_logo">
                        <a class="sticky_none" href="{{ route('home') }}">
                            <img src="/img/logo/logo.png" alt="">
                            <span>plast-almaz.md</span>
                        </a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <li>
                                    <a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                                        href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ Route::currentRouteName() == 'catalog' || Route::currentRouteName() == 'category' ? 'active' : '' }}"
                                        href="#">Catalog</a>
                                    <ul class="bucker-dropdown">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a
                                                    href="{{ route('category', $category) }}">{{ $category->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="">
                                    <a class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                                        href="{{ route('about') }}">About</a>
                                </li>
                                <li>
                                    <a class="{{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}"
                                        href="{{ route('contacts') }}">Contacts</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_account">
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->
