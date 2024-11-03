<?php

use App\Livewire\Dashboard\InvestorDashboard;
use App\Livewire\Projects\ProjectDetail;
use App\Livewire\Projects\ProjectList;
use Illuminate\Support\Facades\Route;

Route::get('/investor',InvestorDashboard::class)->name('dashboard.investor');

Route::get('/projects',ProjectList::class)->name('projects.all');
Route::get('/projects/{projects}/detail',ProjectDetail::class)->name('project.detail');
