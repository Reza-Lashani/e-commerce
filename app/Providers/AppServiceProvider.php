<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Order;

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
        View::composer('layouts.layout', function ($view) {
            if (auth()->check()) {
                $userId = auth()->id();
                $activeOrdersNum = Order::where('user_id', $userId)
                    ->where('status', 'in_process')
                    ->count();
                $view->with('activeOrdersNum', $activeOrdersNum);
            }
        });
    }
}
