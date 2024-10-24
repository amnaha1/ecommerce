<?php
use App\Http\Controllers\Backend\Vendorcontroller;
use Illuminate\Support\Facades\Route;



/**vendor routes */
Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
