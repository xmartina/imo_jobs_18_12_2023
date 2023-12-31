<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">

            <div class="header-left">
                <div class="header-logo">
                    <a class="d-flex" href="{{ url('/') }}">
                        <img alt="Jobbox" src="{{ asset($settings['logo']) }}">
                    </a>
                </div>
            </div>
            <div class="header-nav">
                <nav class="primary-menu-container nav-main-menu">
                    <ul id="primary-menu-list" class="menu-wrapper main-menu list-unstyled mb-0">
                        @include('front_web/layouts/header_parts/header_links')
                    </ul>
                </nav>
                <div class="burger-icon burger-icon-white" data-bs-toggle="offcanvas" href="#offcanvasMenu"
                     role="button" aria-controls="offcanvasMenu">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            @include('front_web.layouts.header_parts.auth_nav')
        </div>
    </div>
</header>
