<?php

use App\Livewire\ExampleChart;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Kegiatan\Index as KegiatanIndex;
use App\Livewire\Setting\Index as SettingIndex;
use App\Livewire\Manpro\Project\Index as ManproProjectIndex;
use App\Livewire\Admin\User\Table as AdminUserTable;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['prefix'=>'flowbite','as'=>'flowbite.'], function(){
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

        Route::get('/apex', ExampleChart::class)->name('apex.chart');


    });

    Route::group(['prefix'=>'manpro','as'=>'manpro.'], function(){
        Route::get('/projects', ManproProjectIndex::class)->name('project.index');
    });

    Route::get('/kegiatan', KegiatanIndex::class)->name('kegiatan.index');
    Route::get('/settings', SettingIndex::class)->name('settings');

    Route::group(['middleware' => ['role:super-admin']], function () {
        Route::get('/admin/user', AdminUserTable::class)->name('admin.user');
        // Volt::route('/admin/user', 'admin.users')->name('admin.user');
        Volt::route('/admin/role-permission', 'admin.role-permission')->name('admin.role-permission');
    });

});