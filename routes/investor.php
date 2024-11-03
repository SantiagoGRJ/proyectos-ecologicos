<?php

use App\Livewire\Dashboard\InvestorDashboard;
use App\Livewire\Projects\ProjectDetail;

use App\Livewire\Projects\ProjectSearch;
use Illuminate\Support\Facades\Route;

Route::get('/investor',InvestorDashboard::class)->name('dashboard.investor');

Route::get('/projects',ProjectSearch::class)->name('projects.all');
Route::get('/projects/{project}/detail',ProjectDetail::class)->name('project.detail');

