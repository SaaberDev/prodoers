<?php

    use App\Http\Controllers\admin_panel\chat\DesignwalaChatController;
    use App\Http\Controllers\admin_panel\chat\OrderChatController;
    use App\Http\Controllers\admin_panel\DashboardController;
    use App\Http\Controllers\admin_panel\order\OrderController;
    use App\Http\Controllers\admin_panel\order\PaymentController;
    use App\Http\Controllers\admin_panel\services\ServicesCategoryController;
    use App\Http\Controllers\admin_panel\services\ServicesController;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/dashboard')->name('dashboard.')->group( function (){
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});

// Services Route Section
Route::prefix('/services')->name('services.')->group(function (){
    // Services
    Route::prefix('/')->group(function (){
        Route::get('/', [ServicesController::class, 'index'])->name('index');
        Route::get('/add-service', [ServicesController::class, 'create'])->name('create');
        Route::get('/edit-service', [ServicesController::class, 'edit'])->name('edit');
    });
    // Service Categories
    Route::prefix('/')->group(function (){
        Route::get('/category', [ServicesCategoryController::class, 'index'])->name('category.index');
        Route::get('/category-create', [ServicesCategoryController::class, 'create'])->name('category.create');
        Route::get('/category-edit', [ServicesCategoryController::class, 'edit'])->name('category.edit');
    });
});

// Chat Route Section
Route::prefix('/chat')->name('chat.')->group(function (){
    Route::get('/designwala', [DesignwalaChatController::class, 'index'])->name('designwala.index');
    Route::get('/order', [OrderChatController::class, 'index'])->name('order.index');
});

// Order Route Section
Route::prefix('/orders')->name('order.')->group(function (){
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::get('/show', [OrderController::class, 'show'])->name('show');
    // Payments
    Route::prefix('/payments')->name('payment.')->group(function (){
        Route::get('/', [PaymentController::class, 'index'])->name('index');
        Route::get('/show', [PaymentController::class, 'show'])->name('show');
    });
});


/*
|--------------------------------------------------------------------------
| User Panel Routes
|--------------------------------------------------------------------------
*/
