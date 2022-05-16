<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\User\DetailController as UserDetailController;
use App\Http\Controllers\Admin\User\EducationController as UserEducationController;
use App\Http\Controllers\Admin\User\ExperienceController as UserExperienceController;
use App\Http\Controllers\Admin\User\OrganizationController as UserOrganizationController;
use App\Http\Controllers\Admin\User\MovementController as UserMovementController;
use App\Http\Controllers\Admin\User\AchievementController as UserAchievementController;


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


# Basic Auth
Route::get('/login',[LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

# Authenticated User
Route::group(['middleware' => ['auth']], function(){
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');

    # Profile
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function(){
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
    });

    # Activity
    Route::group(['prefix' => 'activity', 'as' => 'activity.'], function(){
        Route::get('/{user?}', [ActivityController::class, 'index'])->name('index');
        Route::post('/', [ActivityController::class, 'store'])->name('store');
        Route::delete('/{activity}', [ActivityController::class, 'destroy'])->name('destroy');
        Route::get('{activity}/edit', [ActivityController::class, 'edit'])->name('edit');
        Route::put('{activity}', [ActivityController::class, 'update'])->name('update');
    });



    # User
    Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
        Route::group(['middleware' => 'superadmin'], function(){
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::post('/', [UserController::class, 'store'])->name('store');
            Route::put('/{user}', [UserController::class, 'update'])->name('update');
            Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
        });

        # Detail User
        Route::group(['prefix' => 'detail', 'as' => 'detail.'], function(){
            Route::get('/{user?}', [UserDetailController::class, 'index'])->name('index');
            Route::put('/{user}', [UserDetailController::class, 'update'])->name('update');
        });

        # Education User
        Route::group(['prefix' => 'education', 'as' => 'education.'], function(){
            Route::post('/', [UserEducationController::class, 'store'])->name('store');
            Route::delete('/{userEducation}', [UserEducationController::class, 'destroy'])->name('destroy');
        });

        # Experience User
        Route::group(['prefix' => 'experience', 'as' => 'experience.'], function(){
            Route::post('/', [UserExperienceController::class, 'store'])->name('store');
            Route::delete('/{userExperience}', [UserExperienceController::class, 'destroy'])->name('destroy');
        });

        # Organization User
        Route::group(['prefix' => 'organization', 'as' => 'organization.'], function(){
            Route::post('/', [UserOrganizationController::class, 'store'])->name('store');
            Route::delete('/{userOrganization}', [UserOrganizationController::class, 'destroy'])->name('destroy');
        });        

        # Movement User
        Route::group(['prefix' => 'movement', 'as' => 'movement.'], function(){
            Route::post('/', [UserMovementController::class, 'store'])->name('store');
            Route::delete('/{userMovement}', [UserMovementController::class, 'destroy'])->name('destroy');
        });

        # Achievement User
        Route::group(['prefix' => 'achievement', 'as' => 'achievement.'], function(){
            Route::post('/', [UserAchievementController::class, 'store'])->name('store');
            Route::delete('/{userAchievement}', [UserAchievementController::class, 'destroy'])->name('destroy');
        });        
    });

});

