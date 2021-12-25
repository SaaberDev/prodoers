<?php

    Route::name('client.')
        ->middleware([
            // 'auth', 'verified'
        ])
        ->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('client.index');
        })->name('dashboard');


        // Orders
        Route::prefix('/orders')->name('order.')->group(function () {
            Route::get('/', function () {
                return view('client.pages.orders.index');
            })->name('index');

            Route::get('/show', function () {
                return view('client.pages.orders.show');
            })->name('show');
        });

        //Settings
        Route::get('/settings',function () {
            return view("client.pages.settings.index");
        })->name('settings.index');

        //notifications
        Route::get('/notifications',function () {
            return view("client.pages.notifications.index");
        })->name('notifications.index');

    });
