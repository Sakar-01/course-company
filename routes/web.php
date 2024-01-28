<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::post('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'sendmail']);

Route::get('/success', [App\Http\Controllers\Frontend\FrontendController::class, 'success']);
Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::get('/about', [App\Http\Controllers\Frontend\FrontendController::class, 'about']);
Route::get('/courses', [App\Http\Controllers\Frontend\FrontendController::class, 'courses']);
Route::get('/course/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'singleCourse']);


Route::get('/career', [App\Http\Controllers\Frontend\FrontendController::class, 'career']);


Route::middleware(['auth'])->group(function () {
    // Route::post('/home', [App\Http\Controllers\Frontend\FrontendController::class, 'myAccount']);

    Route::post('/approval/add', [App\Http\Controllers\Frontend\ApprovalController::class, 'sendApproval']);
    Route::put('/approval/update/{id}', 'Admin\ApprovalController@update');
});
Route::group(['middleware' => ['auth', 'isAdmin']], function () {

    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('/admin/approval', 'Admin\ApprovalController@index');


});
