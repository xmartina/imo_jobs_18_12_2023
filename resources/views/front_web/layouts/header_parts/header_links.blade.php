<li id="menu-item-93"
    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-93">
    <a href="{{ route('front.home') }}" aria-current="page" class="{{ Request::is('/') ? 'active' : '' }}">{{ __('web.home') }}</a>
</li>
<li id="menu-item-96"
    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96">
    <a class="{{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('front.about.us') }}">{{ __('web.about_us') }}</a>
</li>
<li id="menu-item-145"
    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145 ">
    <a class="{{ Request::is('search-jobs') || Request::is('job-details*') ? 'active' : '' }}" href="{{ route('front.search.jobs') }}">{{ __('web.jobs') }}</a>
</li>
<li id="menu-item-134"
    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134 ">
    <a class="{{ Request::is('company-lists') || Request::is('company-details*') ? 'active' : '' }}" href="{{ route('front.company.lists') }}">{{ __('web.companies') }}</a>
</li>
@auth
    @role('Employer|Admin')
        <li id="menu-item-139"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139">
            <a class=" {{ Request::is('candidate-lists') || Request::is('candidate-details*') ? 'active' : '' }}" href="{{ route('front.candidate.lists') }}">{{ __('web.job_seekers') }}
            </a>
        </li>
    @endrole
@endauth

<li id="menu-item-123"
    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-123 has-children">
    <a class=" {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ route('front.contact') }}">{{ __('web.contact_us') }}</a>
</li>

<!--<ul class="sub-menu">
    <li id="menu-item-1348"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-97 current_page_item menu-item-1348">
        <a href="index.htm" aria-current="page" class="active">Home 1</a>
    </li>
    <li id="menu-item-1347"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1347"><a
            href="home-2/index.htm">Home 2</a></li>
    <li id="menu-item-1346"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1346"><a
            href="home-3/index.htm">Home 3</a></li>
    <li id="menu-item-1368"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1368"><a
            href="home-4/index.htm">Home 4</a></li>
    <li id="menu-item-1409"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1409"><a
            href="home-5/index.htm">Home 5</a></li>
    <li id="menu-item-1408"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1408"><a
            href="home-6/index.htm">Home 6</a></li>
</ul>-->
