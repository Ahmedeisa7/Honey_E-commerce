<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    
    // Additional admin routes can be added here
});
