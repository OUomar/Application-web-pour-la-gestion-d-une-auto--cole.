<?php

use App\Http\Controllers\Moniteurauth\AuthenticatedSessionController;
use App\Http\Controllers\Moniteurauth\ConfirmablePasswordController;
use App\Http\Controllers\Moniteurauth\EmailVerificationNotificationController;
use App\Http\Controllers\Moniteurauth\EmailVerificationPromptController;
use App\Http\Controllers\Moniteurauth\NewPasswordController;
use App\Http\Controllers\Moniteurauth\PasswordController;
use App\Http\Controllers\Moniteurauth\PasswordResetLinkController;
use App\Http\Controllers\Moniteurauth\RegisteredUserController;
use App\Http\Controllers\Moniteurauth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>['guest:moniteur'],'prefix'=>'moniteur', 'as' =>'moniteur.'],function(){
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request2');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::group(['middleware' =>['auth:moniteur'],'prefix'=>'moniteur', 'as' =>'moniteur.'],function(){
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
