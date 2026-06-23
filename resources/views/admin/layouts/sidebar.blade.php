<ul class="py-1 menu-inner">
    <!-- Dashboard -->
    <li class="menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
    </li>


    </li>
    <li class="menu-item {{ Request::is('admin/header*') ? 'active' : '' }}">
        <a href="{{ route('header.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Basic">Header</div>
        </a>
    </li>
<li class="menu-item {{ (Request::is('admin/update/*') || Request::is('admin/faq/*')) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Authentications">Website Pages</div>
        </a>
         <ul class="menu-sub">

            <li class="menu-item {{ Request::is('admin/faq/list*') ? 'active' : '' }}">
                <a href="{{ route('admin.faq.index') }}" class="menu-link">
                    <div data-i18n="Basic">FAQ</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/home') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'home']) }}" class="menu-link">
                    <div data-i18n="Basic">Home </div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/about') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'about']) }}" class="menu-link">
                    <div data-i18n="Basic">About </div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/services') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'services']) }}" class="menu-link">
                    <div data-i18n="Basic">Services</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/pricing') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'pricing']) }}" class="menu-link">
                    <div data-i18n="Basic">Pricing </div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/consultation') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'consultation']) }}" class="menu-link">
                    <div data-i18n="Basic">Consultation </div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/works') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'works']) }}" class="menu-link">
                    <div data-i18n="Basic">Works </div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/insights') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'insights']) }}" class="menu-link">
                    <div data-i18n="Basic">Insights</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/contact') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'contact']) }}" class="menu-link">
                    <div data-i18n="Basic">Contact</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/privacy-policy') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'privacy-policy']) }}" class="menu-link">
                    <div data-i18n="Basic">Pivacy Policy</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/terms-and-condition') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'terms-and-condition']) }}" class="menu-link">
                    <div data-i18n="Basic">Term of Use</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/refund-and-cancellation-policy') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'refund-and-cancellation-policy']) }}" class="menu-link">
                    <div data-i18n="Basic">Refund</div>
                </a>
            </li>
        

        </ul>

    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Authentications">Blog Page</div>
        </a>
        <ul class="menu-sub">

            <li class="menu-item {{ Request::is('admin/blog/post*') ? 'active' : '' }}">
                <a href="{{ route('post.index') }}" class="menu-link">
                    <div data-i18n="Basic">Post</div>
                </a>
            </li>

        </ul>
    </li>

    
     <li class="menu-item {{ Request::is('admin/leads*') ? 'active' : '' }}">
        <a href="{{ route('leads.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bxs-envelope"></i>
            <div data-i18n="Basic">Leads</div>
        </a>
    </li> 

    <!-- Components -->
</ul>