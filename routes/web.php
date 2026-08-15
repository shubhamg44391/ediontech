<?php


use Illuminate\Support\Facades\Route;
//Dashboard
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SocialMediaLinkController;
use App\Http\Controllers\AboutBannerController;
use App\Http\Controllers\AboutWhoController;
use App\Http\Controllers\AboutValuesController;
use App\Http\Controllers\AboutTeamController;
use App\Http\Controllers\AboutProcessController;
use App\Http\Controllers\Admin\FaqAdminController;



use App\Http\Controllers\Admin\IpAddressController;
use App\Http\Controllers\Admin\SeoContentController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\Admin\SeoOrderController;
use App\Http\Controllers\Admin\SeoPackageController;

// blog

// front end imported controller
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\WorksController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\InsightsController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RentalSoftwareController;
use App\Http\Controllers\Frontend\SeoMarketingController;
use App\Http\Controllers\Frontend\ResourcesController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\TermsAndConditionsController;

// backend imported controller
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FreeConsultationController;
use App\Http\Controllers\RefundAndCancellationPolicyController;

// Frontend controller

Route::get('/test-mail', function () {
    try {
        \Illuminate\Support\Facades\Mail::raw('This is a test email from Laravel.', function ($message) {
            $message->to('test1718@yopmail.com')->subject('Test Email');
        });
        return 'Test email sent successfully!';
    } catch (\Exception $e) {
        return 'Error sending email: ' . $e->getMessage();
    }
});


Route::get('/clear', function () {

    Artisan::call('optimize:clear');

    return 'Cache Cleared';
});

Route::get('/migrate', function () {

    Artisan::call('migrate');

    return 'Migration Completed';
});

Route::get('/backfill-ips', function () {
    $ips = \Illuminate\Support\Facades\DB::table('ip_addresses')
        ->whereNull('region')
        ->orWhereNull('country')
        ->orWhere('region', '')
        ->orWhere('country', '')
        ->orWhere('region', 'Unknown')
        ->orWhere('country', 'Unknown')
        ->get();
        
    $updated = 0;
    foreach ($ips as $ipRecord) {
        $ip = $ipRecord->ip_address;
        if ($ip && $ip !== '127.0.0.1' && $ip !== '::1') {
            try {
                $response = @file_get_contents("http://ip-api.com/json/{$ip}");
                if ($response) {
                    $location = json_decode($response);
                    if ($location && $location->status === 'success') {
                        \Illuminate\Support\Facades\DB::table('ip_addresses')->where('id', $ipRecord->id)->update([
                            'city' => $location->city ?? $ipRecord->city ?? 'Unknown',
                            'region' => $location->regionName ?? 'Unknown',
                            'country' => $location->country ?? 'Unknown',
                            'updated_at' => now(),
                        ]);
                        $updated++;
                    }
                }
                usleep(150000); // 0.15s delay to stay within rate limits of free ip-api
            } catch (\Exception $e) {
                // Ignore
            }
        }
    }
    
    return "Backfilled {$updated} IP addresses.";
});

Route::get('/migrate-fresh', function () {

    Artisan::call('migrate:fresh --seed');

    return 'Fresh Migration & Seeder Completed';
});

Route::get('/seed', function () {

    Artisan::call('db:seed');

    return 'Seeder Completed';
});

Route::get('/storage-link', function () {

    Artisan::call('storage:link');

    return 'Storage Linked';
});
Route::post('/razorpay/create-order', [RazorpayPaymentController::class, 'createOrder'])->name('razorpay.create-order');
Route::post('/razorpay/verify-payment', [RazorpayPaymentController::class, 'verifyPayment'])->name('razorpay.verify-payment');

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name("home");

 
});

// Backend Controller

Route::get('/products', [ProductController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'show_blog'])->name('blogs.list');
Route::get('/add-blog', [BlogController::class, 'add_blog'])->name('add.blog');
Route::post('/add-blog', [BlogController::class, 'save_blog'])->name('blog.add');

Route::get('/edit-blog/{id}', [BlogController::class, 'edit_blog']);

Route::put('/edit-blog/{id}', [BlogController::class, 'update_blog'])->name('blogs.edit');
Route::get('/delete-blog/{id}', [BlogController::class, 'delete_blog']);


//Dashboard 
Route::get('/dashboard', function () {

    $ipAddressController = new IpAddressController();
    $ipAddresses = $ipAddressController->getIPAddresses();
    $totalIPCount = $ipAddressController->getTotalIPCount();
    $cityVisitorCount = $ipAddressController->showCityVisitorChart();
    $allCities = $ipAddressController->getAllCities();
    
    // Fetch page view statistics paginated (using page_views_page parameter to avoid conflict)
    $pageViews = \Illuminate\Support\Facades\DB::table('page_views')
        ->select('page_path', DB::raw('SUM(views) as total_views'), DB::raw('COUNT(distinct ip_address) as unique_visitors'))
        ->groupBy('page_path')
        ->orderBy('total_views', 'desc')
        ->paginate(10, ['*'], 'page_views_page');

    return view('admin.dashboard', [
        'ipAddresses' => $ipAddresses,
        'totalIpCount' => $totalIPCount,
        'cityVisitorCount' => $cityVisitorCount,
        'allCities' => $allCities,
        'pageViews' => $pageViews,
    ]);
})->name('dashboard');

Route::get('/admin/ip-page-views', function (Illuminate\Http\Request $request) {
    $ip = $request->query('ip');
    $pageViews = \Illuminate\Support\Facades\DB::table('page_views')
        ->where('ip_address', $ip)
        ->select('page_path', 'views')
        ->orderBy('views', 'desc')
        ->get();
    return response()->json($pageViews);
})->name('admin.ip.page-views');



// Dashboard Blog Routes Banner
Route::middleware('auth')->group(function () {

    // header Index Page
    Route::get('/admin/blog/author', [AuthorController::class, 'index'])->name('author.index');

    // Store header (Post)
    Route::post('/admin/blog/author', [AuthorController::class, 'store'])->name('author.store');

    // Update header (Put/Patch)
    Route::put('/admin/blog/author/{author}', [AuthorController::class, 'update'])->name('author.update');

    Route::delete('/admin/blog/author/{id}', [AuthorController::class, 'destroy'])->name('author.destroy');
});


// admin dashboard header route

Route::middleware('auth')->group(function () {
    // header Index Page
    Route::get('/admin/header', [headerController::class, 'index'])->name('header.index');

    // Store header (Post)
    Route::post('/admin/header', [headerController::class, 'create'])->name('header.create');

    // Update header (Put/Patch)
    Route::put('admin/header/{header}', [headerController::class, 'update'])->name('header.update');
});

// Dashboard Blog Routes  Banner
Route::middleware('auth')->group(function () {

    // header Index Page
    Route::get('/admin/blog/post', [PostController::class, 'index'])->name('post.index');

    // Store header (Post)
    Route::post('/admin/blog/post', [PostController::class, 'store'])->name('post.store');

    // Update header (Put/Patch)
    Route::put('/admin/blog/post/{post}', [PostController::class, 'update'])->name('post.update');

    Route::delete('/admin/blog/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});


// FAQ 
Route::middleware('auth')->group(function () {

    // header Index Page
    Route::get('/admin/faq/list', [FaqAdminController::class, 'index'])->name('admin.faq.index');
    Route::get('/admin/faq/add', [FaqAdminController::class, 'create'])->name('admin.faq.create');

    // Store header (Post)
    Route::post('/admin/faq/add', [FaqAdminController::class, 'store'])->name('admin.faq.store');

    // Update header (Put/Patch)
    Route::get('/admin/faq/edit/{faq}', [FaqAdminController::class, 'edit'])->name('admin.faq.edit');
    Route::put('/admin/faq/edit/{faq}', [FaqAdminController::class, 'update'])->name('admin.faq.update');

    Route::delete('/admin/faq/{id}', [FaqAdminController::class, 'destroy'])->name('admin.faq.destroy');
});

//  SEO Content route

Route::middleware('auth')->group(function () {

    // header Index Page
    // Route::get('/admin/title/{slug}', [SeoContentController::class, 'seoContent'])->name('');
    Route::get('/admin/update/{slug}', [SeoContentController::class, 'editSeoContent'])->name('title.content');
    Route::put('/admin/update/{slug}', [SeoContentController::class, 'updateSeoContent'])->name('title.update');

});

// home Banner
Route::middleware('auth')->group(function () {

    // header Index Page
    Route::get('/admin/blog/category', [CategoryController::class, 'index'])->name('category.index');

    // Store header (Post)
    Route::post('/admin/blog/category', [CategoryController::class, 'store'])->name('category.store');

    // Update header (Put/Patch)
    Route::put('/admin/blog/category/{category}', [CategoryController::class, 'update'])->name('category.update');

    Route::delete('/admin/blog/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});


// Show the form
Route::middleware('auth')->group(function () {

    // Display the list of leads
    Route::get('/admin/leads', [LeadController::class, 'index'])->name('leads.index');
    // Edit a lead
    Route::get('/admin/leads/{lead}/edit', [LeadController::class, 'edit'])->name('leads.edit');
    // Update a lead
    Route::put('/admin/leads/{lead}', [LeadController::class, 'update'])->name('leads.update');
    // Delete a lead
    Route::delete('/admin/leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy');
});

// Store data from the form
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribers.store');

Route::middleware('auth')->group(function () {
    Route::get('/admin/subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');
    Route::delete('/unsubscribe/{id}', [SubscriberController::class, 'destroy'])->name('subscribers.destroy');
});


// home Banner
Route::middleware('auth')->group(function () {

    // header Index Page
    Route::get('/admin/payment', [PaymentController::class, 'index'])->name('payment.index');
});

// SEO Package Payment Transactions
Route::middleware('auth')->group(function () {
    Route::get('/admin/seo-orders', [SeoOrderController::class, 'index'])->name('admin.seo-orders.index');
    Route::delete('/admin/seo-orders/{id}', [SeoOrderController::class, 'destroy'])->name('admin.seo-orders.destroy');
});

// SEO Package Pricing Management
Route::middleware('auth')->group(function () {
    Route::get('/admin/seo-packages', [SeoPackageController::class, 'index'])->name('admin.seo-packages.index');
    Route::put('/admin/seo-packages', [SeoPackageController::class, 'update'])->name('admin.seo-packages.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/social-media', [SocialMediaLinkController::class, 'index'])->name('social-media.index');
    Route::get('/admin/social-media/create', [SocialMediaLinkController::class, 'create'])->name('social-media.create');
    Route::post('/admin/social-media', [SocialMediaLinkController::class, 'store'])->name('social-media.store');
    Route::get('/admin/social-media/{id}/edit', [SocialMediaLinkController::class, 'edit'])->name('social-media.edit');
    Route::put('/admin/social-media/{id}', [SocialMediaLinkController::class, 'update'])->name('social-media.update');
});

// About Banner
Route::middleware('auth')->group(function () {
    // header Index Page
    Route::get('/admin/about/banner', [AboutBannerController::class, 'index'])->name('about_banner.index');

    // Store header (Post)
    Route::post('/admin/about/banner', [AboutBannerController::class, 'create'])->name('about_banner.create');

    // Update header (Put/Patch)
    Route::put('/admin/about/banner/{banner}', [AboutBannerController::class, 'update'])->name('about_banner.update');

    // header Index Page
    Route::get('/admin/about/who', [AboutWhoController::class, 'index'])->name('about_who.index');

    // Update header (Put/Patch)
    Route::put('/admin/about/who/{who}', [AboutWhoController::class, 'update'])->name('about_who.update');
    // header Index Page


    Route::get('/admin/about/values', [AboutValuesController::class, 'index'])->name('about_values.index');

    // Update header (Put/Patch)
    Route::put('/admin/about/values/{values}', [AboutValuesController::class, 'update'])->name('about_values.update');

    Route::get('/admin/about/team', [AboutTeamController::class, 'index'])->name('about_team.index');

    // Update header (Put/Patch)
    Route::put('/admin/about/team/{team}', [AboutTeamController::class, 'update'])->name('about_team.update');

    Route::get('/admin/about/process', [AboutProcessController::class, 'index'])->name('about_process.index');

    // Update header (Put/Patch)
    Route::put('/admin/about/process/{process}', [AboutProcessController::class, 'update'])->name('about_process.update');
});

// Auth routes
require __DIR__ . '/auth.php';

// Rental Software routes
Route::get('/car-rental-software-development', [RentalSoftwareController::class, 'carRentalSoftwareDevelopment'])->name('rental.car-software');
Route::get('/fleet-management-software', [RentalSoftwareController::class, 'fleetManagementSoftware'])->name('rental.fleet-management');
Route::get('/car-rental-booking-engine', [RentalSoftwareController::class, 'carRentalBookingEngine'])->name('rental.booking-engine');
Route::get('/vehicle-rental-app-development', [RentalSoftwareController::class, 'vehicleRentalAppDevelopment'])->name('rental.app-development');
Route::get('/chauffeur-limousine-booking-software', [RentalSoftwareController::class, 'chauffeurLimousineBookingSoftware'])->name('rental.chauffeur-limousine');
Route::get('/rental-pricing-engine', [RentalSoftwareController::class, 'rentalPricingEngine'])->name('rental.pricing-engine');
Route::get('/telematics-integration', [RentalSoftwareController::class, 'telematicsIntegration'])->name('rental.telematics');
Route::get('/damage-inspection-module', [RentalSoftwareController::class, 'damageInspectionModule'])->name('rental.damage-inspection');
Route::get('/corporate-accounts-billing', [RentalSoftwareController::class, 'corporateAccountsBilling'])->name('rental.corporate-billing');
Route::get('/car-rental-software-development-dubai', [RentalSoftwareController::class, 'carRentalSoftwareDevelopmentDubai'])->name('rental.dubai');
Route::get('/car-rental-software-development-amman', [RentalSoftwareController::class, 'carRentalSoftwareDevelopmentAmman'])->name('rental.amman');
Route::get('/car-rental-software-development-riyadh', [RentalSoftwareController::class, 'carRentalSoftwareDevelopmentRiyadh'])->name('rental.riyadh');
Route::get('/locations', [RentalSoftwareController::class, 'locations'])->name('rental.locations');
Route::get('/rental-software-cost-calculator', [RentalSoftwareController::class, 'rentalSoftwareCostCalculator'])->name('rental.calculator');

// Services routes
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/website-development', [ServicesController::class, 'websiteDevelopment'])->name('services.website-development');
Route::get('/custom-software-development', [ServicesController::class, 'customSoftwareDevelopment'])->name('services.custom-software');
Route::get('/mobile-app-development', [ServicesController::class, 'mobileAppDevelopment'])->name('services.mobile-app-dev');
Route::get('/ecommerce-development', [ServicesController::class, 'ecommerceDevelopment'])->name('services.ecommerce-dev');
Route::get('/cms-development', [ServicesController::class, 'cmsDevelopment'])->name('services.cms-dev');
Route::get('/website-design', [ServicesController::class, 'websiteDesign'])->name('services.website-design');
Route::get('/logo-branding', [ServicesController::class, 'logoBranding'])->name('services.logo-branding');
Route::get('/mobile-app-design', [ServicesController::class, 'mobileAppDesign'])->name('services.mobile-app-design');
Route::get('/ui-ux-design', [ServicesController::class, 'uiUxDesign'])->name('services.ui-ux-design');
Route::get('/ai-development', [ServicesController::class, 'aiDevelopment'])->name('services.ai-dev');
Route::get('/cloud-solutions', [ServicesController::class, 'cloudSolutions'])->name('services.cloud');
Route::get('/iot-solutions', [ServicesController::class, 'iotSolutions'])->name('services.iot');
Route::get('/big-data-analytics', [ServicesController::class, 'bigDataAnalytics'])->name('services.big-data');

// SEO & Marketing routes
Route::get('/seo-services', [SeoMarketingController::class, 'seoServices'])->name('seo.services');
Route::get('/local-seo-services', [SeoMarketingController::class, 'localSeoServices'])->name('seo.local');
Route::get('/technical-seo-audit', [SeoMarketingController::class, 'technicalSeoAudit'])->name('seo.technical-audit');
Route::get('/ecommerce-seo', [SeoMarketingController::class, 'ecommerceSeo'])->name('seo.ecommerce');
Route::get('/link-building-services', [SeoMarketingController::class, 'linkBuildingServices'])->name('seo.link-building');
Route::get('/ppc-advertising', [SeoMarketingController::class, 'ppcAdvertising'])->name('seo.ppc');
Route::get('/social-media-marketing', [SeoMarketingController::class, 'socialMediaMarketing'])->name('seo.social-media');
Route::get('/content-marketing', [SeoMarketingController::class, 'contentMarketing'])->name('seo.content');
Route::get('/email-marketing', [SeoMarketingController::class, 'emailMarketing'])->name('seo.email');
Route::get('/ai-search-optimisation', [SeoMarketingController::class, 'aiSearchOptimisation'])->name('seo.ai-search');
Route::get('/answer-engine-optimisation', [SeoMarketingController::class, 'answerEngineOptimisation'])->name('seo.answer-engine');
Route::get('/ai-assistant-visibility', [SeoMarketingController::class, 'aiAssistantVisibility'])->name('seo.ai-assistant');

// Resources & Company routes
Route::get('/blog', [ResourcesController::class, 'blog'])->name('resources.blog');
Route::get('/blog-details', [ResourcesController::class, 'blogDetails'])->name('resources.blog-details');
Route::get('/blog/{slug}', [ResourcesController::class, 'blogDetails'])->name('resources.blog-single');
Route::get('/works', [ResourcesController::class, 'works'])->name('resources.works');
Route::get('/faq', [ResourcesController::class, 'faq'])->name('resources.faq');
Route::get('/glossary', [ResourcesController::class, 'glossary'])->name('resources.glossary');
Route::get('/free-consultation', [ResourcesController::class, 'freeConsultation'])->name('resources.free-consultation');
Route::get('/about', [ResourcesController::class, 'about'])->name('resources.about');
Route::get('/industries', [ResourcesController::class, 'industries'])->name('resources.industries');
Route::get('/certifications', [ResourcesController::class, 'certifications'])->name('resources.certifications');
Route::get('/contact', [ResourcesController::class, 'contact'])->name('resources.contact');
Route::post('/contact', [ResourcesController::class, 'submitContact'])->name('contact.store');
Route::post('/free-consultation', [ResourcesController::class, 'submitConsultation'])->name('consultation.store');
Route::post('/case-study-lead', [ResourcesController::class, 'submitCaseStudyLead'])->name('case-study.lead');
Route::get('/seo-package', [ResourcesController::class, 'pricing'])->name('resources.pricing');
Route::get('/seo-package-details', [ResourcesController::class, 'pricingDetails'])->name('resources.pricing-details');
Route::get('/seo-package-details/{slug}', [ResourcesController::class, 'pricingDetails'])->name('resources.pricing-details-slug');
Route::get('/pricing-details', [ResourcesController::class, 'pricingDetails'])->name('resources.pricing-details-alt');

// Legal & Policy routes
Route::get('/privacy-policy', [ResourcesController::class, 'privacyPolicy'])->name('resources.privacy-policy');
Route::get('/term-and-condition', [ResourcesController::class, 'termsAndConditions'])->name('resources.term-and-condition');
Route::get('/terms-and-conditions', [ResourcesController::class, 'termsAndConditions'])->name('resources.terms-and-conditions');
Route::get('/refund-and-cancellation-policy', [ResourcesController::class, 'refundAndCancellationPolicy'])->name('resources.refund-and-cancellation-policy');

// Captcha Reload Route
Route::get('/reload-captcha', function () {
    return response()->json(['captcha' => captcha_img()]);
})->name('captcha.reload');

// Industry sub-pages & dynamic detail route
Route::get('/{slug}', [ResourcesController::class, 'industryDetail'])->name('industry.detail');


