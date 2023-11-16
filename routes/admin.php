<?php

use App\Http\Controllers\Admin\ClientCategoryController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InternationalRecognitionController;
use App\Http\Controllers\Admin\PeopleController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OurClientController;
use App\Http\Controllers\Admin\PracticeAreasController;
use App\Http\Controllers\Admin\ResourcesController;
use Illuminate\Support\Facades\Route;


//Private Routes
Route::middleware(['preventBackHistory', 'admin'])->group(function () {

    //News
    Route::group(['prefix' => 'news'], function () {
        Route::get('/index', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/{news_id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::put('/{news_id}/update', [NewsController::class, 'update'])->name('admin.news.update');
        Route::put('/update-status', [NewsController::class, 'updateStatus'])->name('admin.news.update.status');
    });

    //Gallery
    Route::group(['prefix' => 'admin/gallery'], function () {
        Route::get('/index', [GalleryController::class, 'index'])->name('admin.gallery.index');
        Route::get('/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
        Route::post('/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::get('/{gallery_id}/edit', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
        Route::put('/{gallery_id}/update', [GalleryController::class, 'update'])->name('admin.gallery.update');
        Route::put('/update-status', [GalleryController::class, 'updateStatus'])->name('admin.gallery.update.status');
    });

    //Resources
    Route::group(['prefix' => 'admin/resources'], function () {
        Route::get('/index', [ResourcesController::class, 'index'])->name('admin.resources.index');
        Route::get('/create', [ResourcesController::class, 'create'])->name('admin.resources.create');
        Route::post('/store', [ResourcesController::class, 'store'])->name('admin.resources.store');
        Route::get('/{resources_id}/edit', [ResourcesController::class, 'edit'])->name('admin.resources.edit');
        Route::put('/{resources_id}/update', [ResourcesController::class, 'update'])->name('admin.resources.update');
        Route::put('/update-status', [ResourcesController::class, 'updateStatus'])->name('admin.resources.update.status');
    });

    //International Recognition
    Route::group(['prefix' => 'admin/international-recognition'], function () {
        Route::get('/index', [InternationalRecognitionController::class, 'index'])->name('admin.international_recognition.index');
        Route::get('/create', [InternationalRecognitionController::class, 'create'])->name('admin.international_recognition.create');
        Route::post('/store', [InternationalRecognitionController::class, 'store'])->name('admin.international_recognition.store');
        Route::get('/{id}/edit', [InternationalRecognitionController::class, 'edit'])->name('admin.international_recognition.edit');
        Route::put('/{id}/update', [InternationalRecognitionController::class, 'update'])->name('admin.international_recognition.update');
        Route::put('/update-status', [InternationalRecognitionController::class, 'updateStatus'])->name('admin.international_recognition.update.status');
    });

    //Practice Areas
    Route::group(['prefix' => 'practice-areas'], function () {
        Route::get('/index', [PracticeAreasController::class, 'index'])->name('admin.practice_areas.index');
        Route::get('/create', [PracticeAreasController::class, 'create'])->name('admin.practice_areas.create');
        Route::post('/store', [PracticeAreasController::class, 'store'])->name('admin.practice_areas.store');
        Route::get('/{practice_areas_id}/edit', [PracticeAreasController::class, 'edit'])->name('admin.practice_areas.edit');
        Route::put('/{practice_areas_id}/update', [PracticeAreasController::class, 'update'])->name('admin.practice_areas.update');
        Route::put('/update-status', [PracticeAreasController::class, 'updateStatus'])->name('admin.practice_areas.update.status');
    });

    //People
    Route::group(['prefix' => 'admin/people'], function () {
        Route::get('/index', [PeopleController::class, 'index'])->name('admin.people.index');
        Route::get('/create', [PeopleController::class, 'create'])->name('admin.people.create');
        Route::post('/store', [PeopleController::class, 'store'])->name('admin.people.store');
        Route::get('/{people_id}/edit', [PeopleController::class, 'edit'])->name('admin.people.edit');
        Route::put('/{people_id}/update', [PeopleController::class, 'update'])->name('admin.people.update');
        Route::put('/update-status', [PeopleController::class, 'updateStatus'])->name('admin.people.update.status');
    });

    //People
    Route::group(['prefix' => 'admin/designation'], function () {
        Route::get('/index', [DesignationController::class, 'index'])->name('admin.designation.index');
        Route::get('/create', [DesignationController::class, 'create'])->name('admin.designation.create');
        Route::post('/store', [DesignationController::class, 'store'])->name('admin.designation.store');
        Route::get('/{designation_id}/edit', [DesignationController::class, 'edit'])->name('admin.designation.edit');
        Route::put('/{designation_id}/update', [DesignationController::class, 'update'])->name('admin.designation.update');
        Route::put('/update-status', [DesignationController::class, 'updateStatus'])->name('admin.designation.update.status');
    });

    //Client Category
    Route::group(['prefix' => 'admin/client-category'], function () {
        Route::get('/index', [ClientCategoryController::class, 'index'])->name('admin.client-category.index');
        Route::get('/create', [ClientCategoryController::class, 'create'])->name('admin.client-category.create');
        Route::post('/store', [ClientCategoryController::class, 'store'])->name('admin.client-category.store');
        Route::get('/{category_id}/edit', [ClientCategoryController::class, 'edit'])->name('admin.client-category.edit');
        Route::put('/{category_id}/update', [ClientCategoryController::class, 'update'])->name('admin.client-category.update');
        Route::put('/update-status', [ClientCategoryController::class, 'updateStatus'])->name('admin.client-category.update.status');
    });

    //Our Client Category
    Route::group(['prefix' => 'admin/our-client'], function () {
        Route::get('/index', [OurClientController::class, 'index'])->name('admin.our-client.index');
        Route::get('/create', [OurClientController::class, 'create'])->name('admin.our-client.create');
        Route::post('/store', [OurClientController::class, 'store'])->name('admin.our-client.store');
        Route::get('/{client_id}/edit', [OurClientController::class, 'edit'])->name('admin.our-client.edit');
        Route::put('/{client_id}/update', [OurClientController::class, 'update'])->name('admin.our-client.update');
        Route::put('/update-status', [OurClientController::class, 'updateStatus'])->name('admin.our-client.update.status');
    });
});
