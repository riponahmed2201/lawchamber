<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

//Auth
Route::get('login', [AuthController::class, 'showLoginForm'])->name('frontend.showLoginForm');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('frontend.showRegisterForm');
Route::get('reset-password', [AuthController::class, 'showResetPasswordForm'])->name('frontend.showResetPasswordForm');
Route::get('change-password', [AuthController::class, 'showChangePasswordForm'])->name('frontend.showChangePasswordForm');


//practices-areas
Route::get('people', [FrontendController::class, 'showPeoplePage'])->name('frontend.showPeoplePage');
Route::get('people/view/{people_id}', [FrontendController::class, 'showPeopleViewPage'])->name('frontend.showPeopleViewPage');

//practices-areas
Route::get('practices-areas', [FrontendController::class, 'showPracticesAreasPage'])->name('frontend.showPracticesAreasPage');
Route::get('practices-areas/view/{id}', [FrontendController::class, 'showPracticesAreasViewPage'])->name('frontend.showPracticesAreasViewPage');

//recognition
Route::get('international-recognition', [FrontendController::class, 'showRecognitionPage'])->name('frontend.showrecognitionPage');
Route::get('pro-bono', [FrontendController::class, 'showProBonoPage'])->name('frontend.showProBonoPage');
Route::get('gallery', [FrontendController::class, 'showGalleryPage'])->name('frontend.showGalleryPage');

//Resources
Route::get('resources', [FrontendController::class, 'showResourcesPage'])->name('frontend.showResourcesPage');
Route::get('resources-details/{resources_id}', [FrontendController::class, 'viewResourcesDetails'])->name('frontend.viewResourcesDetails');

//Pages
Route::get('privacy-policy', [FrontendController::class, 'showPrivacyPolicyPage'])->name('frontend.showPrivacyPolicyPage');
Route::get('terms-and-conditions', [FrontendController::class, 'showTermsAndConditionsPage'])->name('frontend.showTermsAndConditionsPage');

//web pages routes
Route::get('about', [FrontendController::class, 'showAboutPage'])->name('frontend.showAboutPage');

Route::get('contact-us', [FrontendController::class, 'contactUs'])->name('frontend.contactUs');
Route::post('store/contact-us', [FrontendController::class, 'storeContactUsData'])->name('frontend.storeContactUsData');

//Project
Route::get('project', [FrontendController::class, 'project'])->name('frontend.project');
Route::get('project-details/{project_id}', [FrontendController::class, 'projectDetails'])->name('frontend.projectDetails');

//Event
Route::get('event', [FrontendController::class, 'event'])->name('frontend.event');
Route::get('event-details/{event_id}', [FrontendController::class, 'eventDetails'])->name('frontend.eventDetails');

//News and Updates
Route::get('news-and-updates', [FrontendController::class, 'newsAndUpdates'])->name('frontend.newsAndUpdates');
Route::get('news-and-updates/view/{news_id}', [FrontendController::class, 'newsAndUpdatesDetails'])->name('frontend.newsAndUpdatesDetails');

//our client category
Route::get('our-client-details', [FrontendController::class, 'ourClientDetails'])->name('frontend.ourClientDetails');
