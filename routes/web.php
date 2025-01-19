<?php

use Illuminate\Support\Facades\Route;
use Blogufy\Crud\Http\Controllers\Backend\TagController;
use Blogufy\Crud\Http\Controllers\Backend\ArticleController;
use Blogufy\Crud\Http\Controllers\Backend\CategoryController;

// Articles
Route::controller(ArticleController::class)->group(function(){
    Route::get('article', 'index')->name('dashboard.articles.index');
    Route::get('article/create', 'create')->name('dashboard.articles.create');
    Route::get('article/{article}/edit', 'edit')->name('dashboard.articles.edit');
    Route::post('article', 'store')->name('blogufy::dashboard.articles.store');
    Route::patch('article/{article}', 'update')->name('dashboard.articles.update');
    Route::delete('article/{article}', 'destroy')->name('dashboard.articles.destroy');

    Route::post('article/{article}/status', 'toggleStatus')->name('dashboard.article.status');

});

// Categories
Route::controller(CategoryController::class)->group(function(){
    Route::get('category', 'index')->name('dashboard.category.index');
    Route::get('category/create', 'create')->name('dashboard.category.create');
    Route::get('category/{category}/edit', 'edit')->name('dashboard.category.edit');
    Route::post('category', 'store')->name('dashboard.category.store');
    Route::patch('category/{category}', 'update')->name('dashboard.category.update');
    Route::delete('category/{category}', 'destroy')->name('dashboard.category.destroy');
});

// Tags
Route::controller(TagController::class)->group(function(){
    Route::get('tag', 'index')->name('dashboard.tag.index');
    Route::get('tag/create', 'create')->name('dashboard.tag.create');
    Route::get('tag/{tag}/edit', 'edit')->name('dashboard.tag.edit');
    Route::post('tag', 'store')->name('dashboard.tag.store');
    Route::patch('tag/{tag}', 'update')->name('dashboard.tag.update');
    Route::delete('tag/{tag}', 'destroy')->name('dashboard.tag.destroy');
});