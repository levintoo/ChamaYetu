<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\MailboxComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PortfolioComponent;
use App\Http\Livewire\User\CompleteProfileComponent;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeComponent::class)->name('index-page');
Route::get('/about',AboutUsComponent::class)->name('about');
Route::get('/blog',BlogComponent::class)->name('blog');
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/portfolio',PortfolioComponent::class)->name('portfolio');


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//Route::middleware(['auth:sanctum', 'verified', 'authsecretary'])->group(function () {
//    sec
//});

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/admin/mailbox', MailboxComponent::class)->name('admin.malbox');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',DashboardComponent::class)->name('dashboard');
    Route::get('/dashboard/profile',CompleteProfileComponent::class)->name('dashboard.profile');
});



