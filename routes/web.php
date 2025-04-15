<?php

use App\Http\Controllers\Frontend\ViewController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/', [ViewController::class, 'index'])->name('view.home');
    Route::get('/office', [ViewController::class, 'office'])->name('view.office');
    Route::get('/about', [ViewController::class, 'about'])->name('view.about');
    Route::get('/jobs', [ViewController::class, 'jobs'])->name('view.jobs');
    Route::get('/posts', [ViewController::class, 'posts'])->name('view.posts');
    Route::get('/contacts', [ViewController::class, 'contacts'])->name('view.contacts');

    Route::post('/membership-store', [ViewController::class, 'membershipStore'])->name('view.membership.store');
    Route::post('/contact-store', [ViewController::class, 'contactStore'])->name('view.contact.store');
});

Route::post('/locale', [LocaleController::class, 'setLocale'])->name('set.locale');
