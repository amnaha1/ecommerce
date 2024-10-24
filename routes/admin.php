<?php
use App\Http\Controllers\Backend\Admincontroller;
use Illuminate\Support\Facades\Route;


/** Admin Routes */
route::get('admin/dashboard', [Admincontroller::class, 'dashboard'])->name('dashboard');
