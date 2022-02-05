<?php

    use App\Http\Controllers\Auth\AuthenticatedSessionController;
    use App\Http\Controllers\Auth\ConfirmablePasswordController;
    use App\Http\Controllers\Auth\EmailVerificationNotificationController;
    use App\Http\Controllers\Auth\EmailVerificationPromptController;
    use App\Http\Controllers\Auth\NewPasswordController;
    use App\Http\Controllers\Auth\PasswordResetLinkController;
    use App\Http\Controllers\Auth\RegisteredUserController;
    use App\Http\Controllers\Auth\SocialiteAuthController;
    use App\Http\Controllers\Auth\VerifyEmailController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('/register')->middleware('guest')->group(function () {
        Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('/register', [RegisteredUserController::class, 'store']);
    });
    Route::prefix('/login')->middleware('guest')->group(function () {
        Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/', [AuthenticatedSessionController::class, 'store']);
        Route::post('/detect-current-auth-url', [AuthenticatedSessionController::class, 'detectCurrentAuthUrl'])->name('detectCurrentAuthUrl')->excludedMiddleware();

        Route::get('/livewire', [\App\Http\Livewire\Auth\LoginComponent::class, 'store']);
    });

    Route::prefix('/login')->name('socialite.')->middleware('guest')->group(function () {
        Route::get('/{provider}', [SocialiteAuthController::class, 'index'])->name('index');
        Route::get('/{provider}/redirect', [SocialiteAuthController::class, 'store'])->name('store');
    });

    Route::middleware('guest')->group(function () {
        Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    });
    Route::middleware('guest')->group(function () {
        Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
        Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
    });


    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->middleware('auth')
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');

    Route::middleware('auth')->group(function () {
        Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
        Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);
        Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });

