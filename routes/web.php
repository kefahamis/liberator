<?php

use App\Http\Controllers\CertController;
use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Lock;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Index;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Users;
use App\Http\Controllers\HomeController;

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

// Route::redirect('/', '/home');

Route::get('/register', Register::class)->name('register');
// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'landing']);
Route::get('/human-resource', [HomeController::class, 'hr']);
Route::get('/book', [HomeController::class, 'book']);
Route::get('/finance', [HomeController::class, 'finance']);
Route::get('/data-science-and-artificial-intelligence', [HomeController::class, 'dataScience']);
Route::get('/explore', [HomeController::class, 'explore']);
Route::get('/start', [HomeController::class, 'start']);
Route::get('/helpcentre', [HomeController::class, 'helpcenter']);
// Route::get('/start', [HomeController::class, 'start']);

Route::get('/login', Login::class)->name('login');
// Route::get('/');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/hr', 'HrController@index')->name('hr')->middleware('hr');
Route::get('/staff', 'StaffController@index')->name('staff')->middleware('staff');
// Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');
    // Route::get('/explore',[Dashboard::class, 'explore'])->name('explore');
Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/purchases', [HomeController::class, 'purchases']);
    Route::get('/updates', [HomeController::class, 'updates']);
    Route::get('/accomplishments', [HomeController::class, 'accomplishments']);
    Route::get('/payment', [HomeController::class, 'payment']);
    Route::get('/certificate', [CertController::class, 'index']);
    Route::get('/account', [HomeController::class, 'account']);

    Route::get('/enroll',[Dashboard::class, 'enroll'])->name('enroll');
    Route::get('/downloads',[Dashboard::class, 'download'])->name('downloads');

    Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    Route::get('/users', Users::class)->name('users');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');
});
