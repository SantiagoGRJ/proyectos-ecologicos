<?php

use App\Livewire\General\AboutUs;
use App\Livewire\General\Contact;
use App\Livewire\General\Home;
use Illuminate\Support\Facades\Route;

Route::get('/home',Home::class)->name('home.all');
Route::get('/about-us',AboutUs::class)->name('about.all');
Route::get('/contact',Contact::class)->name('contact.all');
