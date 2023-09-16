<?php

use App\Http\Controllers\Admin\BarristersController;
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

    //Barristers
    Route::group(['prefix' => 'barristers'], function () {
        Route::get('/index', [BarristersController::class, 'index'])->name('admin.barristers.index');
        Route::get('/create', [BarristersController::class, 'create'])->name('admin.barristers.create');
        Route::post('/store', [BarristersController::class, 'store'])->name('admin.barristers.store');
        Route::get('/{barristers_id}/edit', [BarristersController::class, 'edit'])->name('admin.barristers.edit');
        Route::put('/{barristers_id}/update', [BarristersController::class, 'update'])->name('admin.barristers.update');
        Route::put('/update-status', [BarristersController::class, 'updateStatus'])->name('admin.barristers.update.status');
    });
});
