<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Kegiatan\Index as KegiatanIndex;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Volt::route('/settings', 'settings')->name('settings');

    Volt::route('/crud/products', 'crud.products')->name('crud.products');
    Volt::route('/crud/users', 'crud.users')->name('crud.users');

    Volt::route('/page/maintenance', 'page.maintenance')->name('page.maintenance');
    Volt::route('/page/error404', 'page.p404')->name('page.error404');
    Volt::route('/page/error500', 'page.p500')->name('page.error500');
    Volt::route('/page/pricing', 'page.pricing')->name('page.pricing');

    Volt::route('/authentication/sign-in', 'authentication.signin')->name('authentication.signin');
    Volt::route('/authentication/sign-up', 'authentication.signup')->name('authentication.signup');
    Volt::route('/authentication/forgot-password', 'authentication.forgot-password')->name('authentication.forgot-password');
    Volt::route('/authentication/reset-password', 'authentication.reset-password')->name('authentication.reset-password');
    // Volt::route('/authentication/sign-in', 'authentication.signin')->name('authentication.signin');

    Volt::route('/playground/stacked', 'playground.stacked')->name('playground.stacked');
    Volt::route('/playground/sidebar', 'playground.sidebar')->name('playground.sidebar');

    Route::get('/kegiatan', KegiatanIndex::class)->name('kegiatan.index');

});