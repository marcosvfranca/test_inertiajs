<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/teste', function () {
    return Customer::orderByName()
        ->paginate()
        ->through(function ($customer) {
            return new CustomerResource($customer);     
        });
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource('customers', CustomersController::class)->except('show');
    Route::resource('products', ProductsController::class)->except('show');
});
