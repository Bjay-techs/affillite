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
use App\Http\Controllers\FileController;
use App\Http\Controllers\User\ActivationController;
use App\Http\Controllers\Admin\AdminController;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

    // Your routes here


Route::get('/', function () {
    return view('home.welcome');
})->name('front');
// Route::get('user/pay'), [HomeControllers::class, 'index']);

// Route::get('try'), [PageController::class,'home']) -> name('home');
// Route::get('test'), [PaymentController::class, 'test']);

Route::middleware(['auth', 'verified', 'user-package'])->group(function () {
    // return view('user.dashboard');
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

    Route::get('user/package/payment/free', [PaymentController::class, 'free'])->name('free')->withoutMiddleware('user-package');
    Route::get('user/package', [UserPackageController::class, 'index'])->name('user.package')->withoutMiddleware('user-package');
Route::Post('user/package/payment',[PaymentController::class,'blockpay'])->name('payment')->withoutMiddleware('user-package');
Route::get('user/package/pay',[PaymentController::class,'test'])->withoutMiddleware('user-package');
Route::get('user/package/unconfirmed',[PaymentController::class,'unconfirmed'])->withoutMiddleware('user-package');
Route::get('user/dashboard/activate/', [ActivationController::class, 'index'])->name('user.dashboard.activate');
Route::post('user/dashboard/activate/validate', [ActivationController::class, 'upgrade'])->name('user.dashboard.validate');
});

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
       Route::post('profile', [ProfileController::class, 'updates'])->name('profile.updates');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 Route::get('about', [HomeController::class, 'about'])->name('about');
 Route::get('contact', [HomeController::class, 'contact'])->name('contact');
  Route::post('contact', [HomeController::class, 'sendWelcomeEmail'])->name('contact.us');
  Route::get('project', [HomeController::class, 'project'])->name('project');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/dashboard/contacted', [AdminController::class, 'contacted'])->name('admin.contacted');
Route::get('admin/login', [AdminController::class, 'login']);
Route::post('admin/check', [AdminController::class, 'check'])->name('admin.login');
//logout
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/download/{file}', [FileController::class, 'download'])->name('file.download');

//download file
// Route::get('/download', function () {
//     // Specify the file path
//     $filePath = public_path('terms/terms.pdf');
    
//     // Check if the file exists
//     if (file_exists($filePath)) {
//         // Return the file as a download response
//         return response()->download($filePath);
//     } else {
//         // File not found, return an error response or redirect to an error page
//         abort(404);
//     }
// });
require __DIR__.'/auth.php';