<?php

use App\Livewire\Dashboard\PushingDashboard;
use App\Livewire\Projects\ProjectForm;
use App\Livewire\Projects\ProjectList;
use Illuminate\Support\Facades\Route;

Route::get('/pushing',PushingDashboard::class)->name('dashboard.investor');

Route::get('/projects/create',ProjectForm::class)->name('project.create');
Route::get('/projects/my-projects',ProjectList::class)->name('project.created');

