<?php

use App\Http\Controllers\Frontend\ViewController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/', [ViewController::class, 'index'])->name('view.home');
    Route::get('/office', [ViewController::class, 'office'])->name('view.office');
    Route::get('/about', [ViewController::class, 'about'])->name('view.about');
    Route::get('/jobs', [ViewController::class, 'jobs'])->name('view.jobs');
    Route::get('/job/{id}', [ViewController::class, 'job'])->name('view.job');
    Route::get('/posts', [ViewController::class, 'posts'])->name('view.posts');
    Route::get('/post/{id}', [ViewController::class, 'post'])->name('view.post');
    Route::get('/contacts', [ViewController::class, 'contacts'])->name('view.contacts');
    Route::get('/search', [ViewController::class, 'searchStore'])->name('view.search.store');

    Route::post('/membership-store', [ViewController::class, 'membershipStore'])->name('view.membership.store');
    Route::post('/contact-store', [ViewController::class, 'contactStore'])->name('view.contact.store');
});

Route::post('/locale', [LocaleController::class, 'setLocale'])->name('set.locale');

Route::get('/run-setup', function () {
    Artisan::call('migrate:fresh', ['--force' => true]);
    Artisan::call('db:seed', ['--force' => true]);
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    return 'Setup executed.';
});
