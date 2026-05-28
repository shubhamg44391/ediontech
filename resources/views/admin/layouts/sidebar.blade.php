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