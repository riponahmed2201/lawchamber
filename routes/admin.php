<?php

use App\Http\Controllers\Admin\ClientCategoryController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\PeopleController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PracticeAreasController;
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
});
