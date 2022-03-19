<?php


    use App\Http\Controllers\Client\ClientDashboardController;



    Route::name('client.')
        ->middleware([
            'auth', 'verified'
        ])
        ->group(function () {

        // Dashboard
        Route::get('/dashboard',[ClientDashboardController::class,'dashboard'] )->name('dashboard');

        // Orders
        Route::prefix('/orders')->name('order.')->group(function () {
            Route::get('/',[ClientDashboardController::class,'orders'] )->name('index');

            Route::get('/show/{order_id}',[ClientDashboardController::class,'show'] )->name('show');
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
