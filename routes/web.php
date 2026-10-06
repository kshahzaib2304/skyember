<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\InsightsEssayController;
use App\Http\Controllers\SiteSeoController;
use App\Insights\EssayCatalog;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap.xml', [SiteSeoController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [SiteSeoController::class, 'robots'])->name('robots');

Route::view('/', 'pages.home')->name('home');

Route::view('/solutions', 'pages.solutions')->name('solutions');
Route::view('/solutions/business-software', 'pages.solutions.business-software')
    ->name('solutions.business-software');
Route::view('/solutions/saas-products', 'pages.solutions.saas-products')
    ->name('solutions.saas-products');
Route::view('/solutions/custom-platforms', 'pages.solutions.custom-platforms')
    ->name('solutions.custom-platforms');
Route::view('/solutions/ai-automation', 'pages.solutions.ai-automation')
    ->name('solutions.ai-automation');

Route::view('/services', 'pages.services')->name('services');
Route::view('/services/product-engineering', 'pages.services.product-engineering')
    ->name('services.product-engineering');
Route::view('/services/ui-ux-design', 'pages.services.ui-ux-design')
    ->name('services.ui-ux-design');
Route::view('/services/web-development', 'pages.services.web-development')
    ->name('services.web-development');
Route::view('/services/mobile-development', 'pages.services.mobile-development')
    ->name('services.mobile-development');
Route::view('/services/cloud-devops', 'pages.services.cloud-devops')
    ->name('services.cloud-devops');

Route::view('/company', 'pages.company')->name('company');
Route::view('/company/about', 'pages.company.about')->name('company.about');
Route::view('/company/process', 'pages.company.process')->name('company.process');
Route::view('/company/technology', 'pages.company.technology')->name('company.technology');

Route::view('/insights', 'pages.insights')->name('insights');
Route::get('/insights/{slug}', [InsightsEssayController::class, 'show'])
    ->whereIn('slug', EssayCatalog::slugs())
    ->name('insights.show');

Route::view('/work', 'pages.work')->name('work');
Route::view('/work/business-operations-platform', 'pages.work.business-operations-platform')
    ->name('work.business-operations-platform');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'prepare'])
    ->middleware('throttle:20,1')
    ->name('contact.prepare');
