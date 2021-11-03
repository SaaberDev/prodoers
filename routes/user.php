<?php

    Route::name('client.')
        ->middleware([
            'auth', 'verified'
        ])
        ->group(function () {
        Route::get('/dashboard', function () {
            return 'User Dashboard';
        })->name('dashboard');
    });
