
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
  

     <li class="menu-item {{ Request::is('admin/header*') ? 'active' : '' }}">
        <a href="{{ route('header.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bx-home-circle"></i> 
            <div data-i18n="Basic">Header</div>
        </a>
    </li> 
    <li class="menu-item {{ Request::is('admin/social-media*') ? 'active' : '' }}">
        <a href="{{ route('social-media.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bxs-chat"></i> 
            <div data-i18n="Basic">Social Media Links</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Authentications">Home Page</div>
        </a>
        <ul class="menu-sub">
            {{-- <li class="menu-item {{ Request::is('admin/home/banner*') ? 'active' : '' }}">
                <a href="{{ route('banner.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Banner</div>
                </a>
            </li> --}}
            {{-- <li class="menu-item {{ Request::is('admin/home/service*') ? 'active' : '' }}">
                <a href="{{ route('service.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Services</div>
                </a>
            </li> --}}
            {{-- <li class="menu-item {{ Request::is('admin/home/counter*') ? 'active' : '' }}">
                <a href="{{ route('counter.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Counters</div>
                </a>
            </li> --}}
            {{-- <li class="menu-item {{ Request::is('admin/home/client*') ? 'active' : '' }}">
                <a href="{{ route('client.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Clients</div>
                </a>
            </li> --}}
            {{-- <li class="menu-item {{ Request::is('admin/home/work*') ? 'active' : '' }}">
                <a href="{{ route('work.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Works</div>
                </a>
            </li> --}}
        </ul>
    </li>

    {{-- <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Authentications">About Page</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/about/banner*') ? 'active' : '' }}">
                <a href="{{ route('about_banner.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Banner</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/about/who*') ? 'active' : '' }}">
                <a href="{{ route('about_who.index') }}" class="menu-link" >
                    <div data-i18n="Basic">About Who</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/about/values*') ? 'active' : '' }}">
                <a href="{{ route('about_values.index') }}" class="menu-link" >
                    <div data-i18n="Basic">About Values</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/about/team*') ? 'active' : '' }}">
                <a href="{{ route('about_team.index') }}" class="menu-link" >
                    <div data-i18n="Basic">About Teams</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/about/process*') ? 'active' : '' }}">
                <a href="{{ route('about_process.index') }}" class="menu-link" >
                    <div data-i18n="Basic">About Process</div>
                </a>
            </li>
             <li class="menu-item {{ Request::is('admin/home/counter*') ? 'active' : '' }}">
                <a href="{{ route('counter.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Counters</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/home/client*') ? 'active' : '' }}">
                <a href="{{ route('client.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Clients</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/home/work*') ? 'active' : '' }}">
                <a href="{{ route('work.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Works</div>
                </a>
            </li>
        </ul>
    </li> --}}

 
    
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Authentications">Blog Page</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/blog/author*') ? 'active' : '' }}">
                <a href="{{ route('author.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Author</div>
                </a>
            </li>
            
            <li class="menu-item {{ Request::is('admin/blog/post*') ? 'active' : '' }}">
                <a href="{{ route('post.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Post</div>
                </a>
            </li>
            
            <li class="menu-item {{ Request::is('admin/blog/category*') ? 'active' : '' }}">
                <a href="{{ route('category.index') }}" class="menu-link" >
                    <div data-i18n="Basic">Category</div>
                </a>
            </li>
        </ul>
    </li>
    



    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Importants</span>
    </li>


    <li class="menu-item {{ Request::is('admin/leads*') ? 'active' : '' }}">
        <a href="{{ route('leads.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bxs-envelope"></i> 
            <div data-i18n="Basic">Leads</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/subscribers*') ? 'active' : '' }}">
        <a href="{{ route('subscribers.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bxs-user-check"></i>
            <div data-i18n="Basic">Subscribers</div>
        </a>
    </li>
    
    <li class="menu-item {{ Request::is('admin/payment*') ? 'active' : '' }}">
        <a href="{{ route('payment.index') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bxs-user"></i>
            <div data-i18n="Basic">Payment</div>
        </a>
    </li>
    <!-- Components -->
</ul>
