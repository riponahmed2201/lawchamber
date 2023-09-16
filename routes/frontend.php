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


//Our Barristers
Route::get('barristers', [FrontendController::class, 'our_barrister'])->name('frontend.our_barrister');

//About us
Route::get('about-us/introduction', [FrontendController::class, 'aboutUsIntroduction'])->name('frontend.aboutUsIntroduction');

//web pages routes
Route::get('about-us', [FrontendController::class, 'aboutUs'])->name('frontend.aboutUs');
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
