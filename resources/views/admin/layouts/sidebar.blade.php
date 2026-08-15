<ul class="py-1 menu-inner">
    <!-- Dashboard -->
    <li class="menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Header Setting -->
    <li class="menu-item {{ Request::is('admin/header*') ? 'active' : '' }}">
        <a href="{{ route('header.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Basic">Header Settings</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Website Pages</span>
    </li>

    <!-- 1. Home Page -->
    <li class="menu-item {{ Request::is('admin/update/home') ? 'active' : '' }}">
        <a href="{{ route('title.content',['slug'=>'home']) }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home"></i>
            <div data-i18n="Basic">Home Page</div>
        </a>
    </li>

    <!-- 2. Rental Software Dropdown -->
    <li class="menu-item {{ (Request::is('admin/update/car-rental*') || Request::is('admin/update/fleet*') || Request::is('admin/update/vehicle*') || Request::is('admin/update/chauffeur*') || Request::is('admin/update/rental*') || Request::is('admin/update/telematics*') || Request::is('admin/update/damage*') || Request::is('admin/update/corporate*') || Request::is('admin/update/locations')) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-car"></i>
            <div data-i18n="Authentications">Rental Software</div>
        </a>
        <ul class="menu-sub">
            <!-- Platforms Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/car-rental-software-development') || Request::is('admin/update/fleet-management-software') || Request::is('admin/update/car-rental-booking-engine') || Request::is('admin/update/vehicle-rental-app-development') || Request::is('admin/update/chauffeur-limousine-booking-software')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Platforms</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/car-rental-software-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'car-rental-software-development']) }}" class="menu-link">
                            <div data-i18n="Basic">Car Rental Software Dev</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/fleet-management-software') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'fleet-management-software']) }}" class="menu-link">
                            <div data-i18n="Basic">Fleet Management Software</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/car-rental-booking-engine') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'car-rental-booking-engine']) }}" class="menu-link">
                            <div data-i18n="Basic">Car Rental Booking Engine</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/vehicle-rental-app-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'vehicle-rental-app-development']) }}" class="menu-link">
                            <div data-i18n="Basic">Vehicle Rental App Dev</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/chauffeur-limousine-booking-software') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'chauffeur-limousine-booking-software']) }}" class="menu-link">
                            <div data-i18n="Basic">Chauffeur & Limousine</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Modules Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/rental-pricing-engine') || Request::is('admin/update/telematics-integration') || Request::is('admin/update/damage-inspection-module') || Request::is('admin/update/corporate-accounts-billing')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Modules</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/rental-pricing-engine') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'rental-pricing-engine']) }}" class="menu-link">
                            <div data-i18n="Basic">Dynamic Pricing Engine</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/telematics-integration') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'telematics-integration']) }}" class="menu-link">
                            <div data-i18n="Basic">Telematics Integration</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/damage-inspection-module') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'damage-inspection-module']) }}" class="menu-link">
                            <div data-i18n="Basic">Damage & Inspection Capture</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/corporate-accounts-billing') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'corporate-accounts-billing']) }}" class="menu-link">
                            <div data-i18n="Basic">Corporate Accounts & Billing</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- By Market Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/car-rental-software-development-dubai') || Request::is('admin/update/car-rental-software-development-amman') || Request::is('admin/update/car-rental-software-development-riyadh') || Request::is('admin/update/locations')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">By Market</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/car-rental-software-development-dubai') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'car-rental-software-development-dubai']) }}" class="menu-link">
                            <div data-i18n="Basic">Rental Software in Dubai</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/car-rental-software-development-amman') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'car-rental-software-development-amman']) }}" class="menu-link">
                            <div data-i18n="Basic">Rental Software in Amman</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/car-rental-software-development-riyadh') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'car-rental-software-development-riyadh']) }}" class="menu-link">
                            <div data-i18n="Basic">Rental Software in Riyadh</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/locations') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'locations']) }}" class="menu-link">
                            <div data-i18n="Basic">All Locations</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Cost Calculator -->
            <li class="menu-item {{ Request::is('admin/update/rental-software-cost-calculator') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'rental-software-cost-calculator']) }}" class="menu-link">
                    <div data-i18n="Basic">Cost Calculator</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- 3. Services Dropdown -->
    <li class="menu-item {{ (Request::is('admin/update/services') || Request::is('admin/update/website-*') || Request::is('admin/update/custom-software*') || Request::is('admin/update/mobile-app*') || Request::is('admin/update/ecommerce-*') || Request::is('admin/update/cms-*') || Request::is('admin/update/logo-*') || Request::is('admin/update/ui-ux*') || Request::is('admin/update/ai-*') || Request::is('admin/update/cloud-*') || Request::is('admin/update/iot-*') || Request::is('admin/update/big-data*')) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-code-alt"></i>
            <div data-i18n="Authentications">Services</div>
        </a>
        <ul class="menu-sub">
            <!-- Build Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/website-development') || Request::is('admin/update/custom-software-development') || Request::is('admin/update/mobile-app-development') || Request::is('admin/update/ecommerce-development') || Request::is('admin/update/cms-development')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Build</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/website-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'website-development']) }}" class="menu-link">
                            <div data-i18n="Basic">Website Development</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/custom-software-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'custom-software-development']) }}" class="menu-link">
                            <div data-i18n="Basic">Custom Software</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/mobile-app-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'mobile-app-development']) }}" class="menu-link">
                            <div data-i18n="Basic">Mobile App Development</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/ecommerce-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'ecommerce-development']) }}" class="menu-link">
                            <div data-i18n="Basic">E-commerce Development</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/cms-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'cms-development']) }}" class="menu-link">
                            <div data-i18n="Basic">CMS Development</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Design Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/website-design') || Request::is('admin/update/logo-branding') || Request::is('admin/update/mobile-app-design') || Request::is('admin/update/ui-ux-design')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Design</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/website-design') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'website-design']) }}" class="menu-link">
                            <div data-i18n="Basic">Website Design</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/logo-branding') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'logo-branding']) }}" class="menu-link">
                            <div data-i18n="Basic">Logo & Branding</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/mobile-app-design') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'mobile-app-design']) }}" class="menu-link">
                            <div data-i18n="Basic">Mobile App Design</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/ui-ux-design') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'ui-ux-design']) }}" class="menu-link">
                            <div data-i18n="Basic">UI/UX Design</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Technology Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/ai-development') || Request::is('admin/update/cloud-solutions') || Request::is('admin/update/iot-solutions') || Request::is('admin/update/big-data-analytics')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Technology</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/ai-development') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'ai-development']) }}" class="menu-link">
                            <div data-i18n="Basic">AI & Machine Learning</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/cloud-solutions') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'cloud-solutions']) }}" class="menu-link">
                            <div data-i18n="Basic">Cloud Solutions</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/iot-solutions') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'iot-solutions']) }}" class="menu-link">
                            <div data-i18n="Basic">IoT Solutions</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/big-data-analytics') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'big-data-analytics']) }}" class="menu-link">
                            <div data-i18n="Basic">Big Data Analytics</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- All Services -->
            <li class="menu-item {{ Request::is('admin/update/services') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'services']) }}" class="menu-link">
                    <div data-i18n="Basic">All Services</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- 4. SEO & Marketing Dropdown -->
    <li class="menu-item {{ (Request::is('admin/update/seo-*') || Request::is('admin/update/local-seo*') || Request::is('admin/update/technical-seo*') || Request::is('admin/update/link-building*') || Request::is('admin/update/ppc-*') || Request::is('admin/update/social-media*') || Request::is('admin/update/content-marketing') || Request::is('admin/update/email-marketing') || Request::is('admin/update/ai-search*') || Request::is('admin/update/answer-engine*') || Request::is('admin/update/ai-assistant*')) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-line-chart"></i>
            <div data-i18n="Authentications">SEO & Marketing</div>
        </a>
        <ul class="menu-sub">
            <!-- Organic SEO Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/seo-services') || Request::is('admin/update/local-seo-services') || Request::is('admin/update/technical-seo-audit') || Request::is('admin/update/ecommerce-seo') || Request::is('admin/update/link-building-services')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Organic SEO</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/seo-services') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'seo-services']) }}" class="menu-link">
                            <div data-i18n="Basic">SEO Services Overview</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/local-seo-services') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'local-seo-services']) }}" class="menu-link">
                            <div data-i18n="Basic">Local SEO Services</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/technical-seo-audit') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'technical-seo-audit']) }}" class="menu-link">
                            <div data-i18n="Basic">Technical SEO Audit</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/ecommerce-seo') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'ecommerce-seo']) }}" class="menu-link">
                            <div data-i18n="Basic">Ecommerce SEO</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/link-building-services') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'link-building-services']) }}" class="menu-link">
                            <div data-i18n="Basic">Link Building</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Paid & Social Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/ppc-advertising') || Request::is('admin/update/social-media-marketing') || Request::is('admin/update/content-marketing') || Request::is('admin/update/email-marketing')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Paid & Social</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/ppc-advertising') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'ppc-advertising']) }}" class="menu-link">
                            <div data-i18n="Basic">Google Ads / PPC</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/social-media-marketing') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'social-media-marketing']) }}" class="menu-link">
                            <div data-i18n="Basic">Social Media Marketing</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/content-marketing') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'content-marketing']) }}" class="menu-link">
                            <div data-i18n="Basic">Content Marketing</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/email-marketing') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'email-marketing']) }}" class="menu-link">
                            <div data-i18n="Basic">Email Marketing</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- AI Search Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/ai-search-optimisation') || Request::is('admin/update/answer-engine-optimisation') || Request::is('admin/update/ai-assistant-visibility')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">AI Search</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/ai-search-optimisation') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'ai-search-optimisation']) }}" class="menu-link">
                            <div data-i18n="Basic">AI Search Optimisation</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/answer-engine-optimisation') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'answer-engine-optimisation']) }}" class="menu-link">
                            <div data-i18n="Basic">Answer Engine Optimisation</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/ai-assistant-visibility') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'ai-assistant-visibility']) }}" class="menu-link">
                            <div data-i18n="Basic">ChatGPT & Perplexity Visibility</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <!-- 5. Resources Dropdown -->
    <li class="menu-item {{ (Request::is('admin/blog*') || Request::is('admin/update/works') || Request::is('admin/faq*') || Request::is('admin/update/glossary') || Request::is('admin/update/rental-software-cost-calculator') || Request::is('admin/update/free-consultation') || Request::is('admin/update/industries') || Request::is('admin/update/about') || Request::is('admin/update/certifications') || Request::is('admin/update/locations') || Request::is('admin/update/contact')) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-folder-open"></i>
            <div data-i18n="Authentications">Resources</div>
        </a>
        <ul class="menu-sub">
            <!-- Read Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/blog') || Request::is('admin/update/blog-details') || Request::is('admin/update/works') || Request::is('admin/faq*') || Request::is('admin/update/glossary')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Read</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/blog') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'blog']) }}" class="menu-link">
                            <div data-i18n="Basic">Blog Page </div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/works') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'works']) }}" class="menu-link">
                            <div data-i18n="Basic">Case Studies / Works</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/faq/list*') ? 'active' : '' }}">
                        <a href="{{ route('admin.faq.index') }}" class="menu-link">
                            <div data-i18n="Basic">FAQ Page</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/glossary') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'glossary']) }}" class="menu-link">
                            <div data-i18n="Basic">Glossary</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Tools Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/rental-software-cost-calculator') || Request::is('admin/update/free-consultation')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Tools</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/rental-software-cost-calculator') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'rental-software-cost-calculator']) }}" class="menu-link">
                            <div data-i18n="Basic">Rental Software Cost Calculator</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/free-consultation') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'free-consultation']) }}" class="menu-link">
                            <div data-i18n="Basic">Free Website Audit / Consultation</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Company Sub-Dropdown -->
            <li class="menu-item {{ (Request::is('admin/update/industries') || Request::is('admin/update/about') || Request::is('admin/update/certifications') || Request::is('admin/update/locations') || Request::is('admin/update/contact')) ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Basic">Company</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('admin/update/industries') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'industries']) }}" class="menu-link">
                            <div data-i18n="Basic">Industries</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/about') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'about']) }}" class="menu-link">
                            <div data-i18n="Basic">About Us</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/certifications') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'certifications']) }}" class="menu-link">
                            <div data-i18n="Basic">Certifications & Partners</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/locations') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'locations']) }}" class="menu-link">
                            <div data-i18n="Basic">Locations</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('admin/update/contact') ? 'active' : '' }}">
                        <a href="{{ route('title.content',['slug'=>'contact']) }}" class="menu-link">
                            <div data-i18n="Basic">Contact</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <!-- 6. Pricing Dropdown -->
    <li class="menu-item {{ (Request::is('admin/update/seo-package') || Request::is('admin/update/seo-package-details')) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-tag-alt"></i>
            <div data-i18n="Authentications">Pricing</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/update/seo-package') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'seo-package']) }}" class="menu-link">
                    <div data-i18n="Basic">Pricing Page </div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/update/seo-package-details') ? 'active' : '' }}">
                <a href="{{ route('title.content',['slug'=>'seo-package-details']) }}" class="menu-link">
                    <div data-i18n="Basic">Pricing Details Page </div>
                </a>
            </li>
        </ul>
    </li>

    <!-- 7. Works Page -->
    <li class="menu-item {{ Request::is('admin/update/works') ? 'active' : '' }}">
        <a href="{{ route('title.content',['slug'=>'works']) }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-briefcase"></i>
            <div data-i18n="Basic">Works</div>
        </a>
    </li>

    <!-- 8. Contact Page -->
    <li class="menu-item {{ Request::is('admin/update/contact') ? 'active' : '' }}">
        <a href="{{ route('title.content',['slug'=>'contact']) }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-envelope"></i>
            <div data-i18n="Basic">Contact</div>
        </a>
    </li>

    <!-- 9. Free Consultation Page -->
    <li class="menu-item {{ Request::is('admin/update/free-consultation') ? 'active' : '' }}">
        <a href="{{ route('title.content',['slug'=>'free-consultation']) }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-phone-call"></i>
            <div data-i18n="Basic">Free Consultation</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Content & Management</span>
    </li>

    <!-- Blog Page -->
    <li class="menu-item {{ Request::is('admin/blog*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-book-open"></i>
            <div data-i18n="Authentications">Blog Page</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/blog/category*') ? 'active' : '' }}">
                <a href="{{ route('category.index') }}" class="menu-link">
                    <div data-i18n="Basic">Category</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/blog/post*') ? 'active' : '' }}">
                <a href="{{ route('post.index') }}" class="menu-link">
                    <div data-i18n="Basic">Post</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Leads -->
    <li class="menu-item {{ Request::is('admin/leads*') ? 'active' : '' }}">
        <a href="{{ route('leads.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-envelope"></i>
            <div data-i18n="Authentications">Leads</div>
        </a>
    </li>

    <!-- SEO Orders -->
    <li class="menu-item {{ Request::is('admin/seo-orders*') ? 'active' : '' }}">
        <a href="{{ route('admin.seo-orders.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-credit-card"></i>
            <div data-i18n="Basic">SEO Orders</div>
        </a>
    </li>

    <!-- SEO Pricing -->
    <li class="menu-item {{ Request::is('admin/seo-packages*') ? 'active' : '' }}">
        <a href="{{ route('admin.seo-packages.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-dollar-circle"></i>
            <div data-i18n="Basic">SEO Pricing</div>
        </a>
    </li>
</ul>