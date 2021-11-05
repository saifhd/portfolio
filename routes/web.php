<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\PagesController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

// if(User::count()==0){
    Auth::routes();
// }

Auth::routes(['register' => false]);
Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::resource('career', CareerController::class);
    Route::resource('education', EducationController::class);
    Route::resource('skills', SkillController::class);
    Route::get('settings', [SettingsController::class,'index'])->name('settings.index');
    Route::put('settings/{id}', [SettingsController::class, 'update'])->name('settings.update');
    Route::resource('projects', ProjectController::class);
});

//frontend

Route::get('/', [PagesController::class,'index'])->name('main.page');
Route::get('/resume', [PagesController::class, 'getDownload'])->name('resume.download');


