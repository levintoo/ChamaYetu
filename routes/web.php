<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PortfolioComponent;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeComponent::class);
Route::get('/about',AboutUsComponent::class)->name('about');
Route::get('/portfolio',PortfolioComponent::class)->name('portfolio');
Route::get('/blog',BlogComponent::class)->name('blog');
Route::get('/contact',ContactComponent::class)->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
