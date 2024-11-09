<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\ValidAdmin;
use App\Http\Middleware\ValidLogin;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/projects', 'projects')->name('projects');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')
        ->name('admin.index')
        ->middleware(ValidAdmin::class);

    Route::patch('/admin/update/navs', 'navsUpdate')->name('update.nav');
    Route::patch('/admin/update/about', 'aboutUpdate')->name('update.about');
    Route::post('/admin/new/skill', 'skillsAdd')->name('add.skills');
    Route::delete('/admin/delete/skill/{skill}', 'skillsDelete')->name('delete.skills');
    Route::patch('/admin/update/education', 'educationUpdate')->name('update.education');
    Route::patch('/admin/update/service', 'servicesUpdate')->name('update.services');
    Route::post('/admin/new/project', 'projectAdd')->name('add.project');
    Route::delete('/admin/delete/project/{project}', 'projectsDelete')->name('delete.projects');
    Route::patch('/admin/update/contact', 'contactsUpdate')->name('update.contacts');
    Route::patch('/admin/update/social', 'socialsUpdate')->name('update.socials');
});

Route::controller(AdminSessionController::class)->group(function () {
    Route::get('/admin/login', 'index')
        ->name('admin.login')
        ->middleware(ValidLogin::class);

    Route::post('/admin/login', 'login')
        ->name('admin.login.submit');

    Route::post('/admin/logout', 'destroy')
        ->name('admin.logout');
});





