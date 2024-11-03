<?php

use App\Livewire\Dashboard\AdminDashboard;
use App\Livewire\Projects\ProjectApproval;
use App\Livewire\Projects\ProjectList;
use Illuminate\Support\Facades\Route;


Route::get('/admin',AdminDashboard::class)->name('dashboard.admin');

Route::get('/admin/projects/pending',ProjectApproval::class)->name('project.approval');
Route::get('/amin/projects/approved',ProjectList::class)->name('projects.approved');





