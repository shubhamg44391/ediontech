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
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\TermsAndConditionsController;

// backend imported controller
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FreeConsultationController;
use App\Http\Controllers\RefundAndCancellationPolicyController;

// Frontend controller


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

    Route::get('/about', [AboutUsController::class, 'index'])->name('about');

    Route::get('/services', [ServicesController::class, 'index'])->name('services');

    Route::get('/seo-package', [PricingController::class, 'index'])->name('seo-package');

    Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
    Route::post('/submit-form', [ContactUsController::class, 'submit'])->name('submit-form');
    Route::get('/reload-captcha', function () {
        return response()->json(['captcha' => captcha_img()]);
    });
    Route::get('/works', [WorksController::class, 'index'])->name('works');

    // At insights URL we redirect to blog-creative page
    Route::get('/blog', [InsightsController::class, 'index'])->name('blog');
    Route::get('/blog-details/{slug}', [InsightsController::class, 'blogDetails'])->name('blog-details');

    Route::get('/faq', [FaqController::class, 'index'])->name('faq');

    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');

    Route::get('/term-and-condition', [TermsAndConditionsController::class, 'index'])->name('term-and-condition');

    Route::get('/free-consultation', [FreeConsultationController::class, 'index'])->name('free-consultation');

    Route::get(
        '/refund-and-cancellation-policy',
        [RefundAndCancellationPolicyController::class, 'index']
    )->name('refund-and-cancellation-policy');
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
    return view('admin.dashboard', [
        'ipAddresses' => $ipAddresses,
        'totalIpCount' => $totalIPCount,
        'cityVisitorCount' => $cityVisitorCount,
        'allCities' => $allCities
    ]);
})->name('dashboard');



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
