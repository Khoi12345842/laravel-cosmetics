<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use Illuminate\Support\Facades\View; // Import View facade
use App\Models\Order; // Import Order model
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Dữ liệu cần chia sẻ với tất cả các view
    View::composer('*', function ($view) {
        $pendingOrders = Order::where('status', 2)->orderBy('created_at', 'desc')->get();
        $view->with('pendingOrders', $pendingOrders);
    });
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
