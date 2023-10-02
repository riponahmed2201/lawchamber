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

//About us
Route::get('practices-areas', [FrontendController::class, 'showPracticesAreasPage'])->name('frontend.showPracticesAreasPage');

//recognition
Route::get('recognition', [FrontendController::class, 'showRecognitionPage'])->name('frontend.showrecognitionPage');
Route::get('pro-bono', [FrontendController::class, 'showProBonoPage'])->name('frontend.showProBonoPage');
Route::get('resources', [FrontendController::class, 'showResourcesPage'])->name('frontend.showResourcesPage');

//web pages routes
Route::get('about', [FrontendController::class, 'showAboutPage'])->name('frontend.showAboutPage');
Route::get('contact-us', [FrontendController::class, 'contactUs'])->name('frontend.contactUs');

//Project
Route::get('project', [FrontendController::class, 'project'])->name('frontend.project');
Route::get('project-details/{project_id}', [FrontendController::class, 'projectDetails'])->name('frontend.projectDetails');

//Event
Route::get('event', [FrontendController::class, 'event'])->name('frontend.event');
Route::get('event-details/{event_id}', [FrontendController::class, 'eventDetails'])->name('frontend.eventDetails');

//Blog
Route::get('blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('blog-details/{blog_id}', [FrontendController::class, 'blogDetails'])->name('frontend.blogDetails');
