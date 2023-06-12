<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserPackageController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\WebhookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\ActivationController;
Route::get('/', function () {
    return view('home.welcome');
})->name('front');
Route::get('user/pay', [HomeControllers::class, 'index']);

Route::get('user/receive', [WebhookController::class, 'handle']);

Route::get('/try', [PageController::class,'home']) -> name('home');
Route::get('/test', [PaymentController::class, 'test']);
Route::middleware(['auth', 'verified', 'user-package'])->group(function () {
    // return view('user.dashboard');
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

    Route::get('user/package/payment/free', [PaymentController::class, 'free'])->name('free')->withoutMiddleware('user-package');
    Route::get('/user/package', [UserPackageController::class, 'index'])->name('user.package')->withoutMiddleware('user-package');
Route::post('user/package/payment',[PaymentController::class,'blockpay'])->name('payment')->withoutMiddleware('user-package');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 Route::get('/about-us', [HomeController::class, 'about']) ->name('about');
 Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
 Route::get('/Our-contact', [HomeController::class, 'project'])->name('project');

//logout
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

require __DIR__.'/auth.php';