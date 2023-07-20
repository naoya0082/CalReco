<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;


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
        // 最初に呼ばれるメソッド
        view()->composer('*', function($view) {
            // ユーザー情報を取得
            $user = Auth::user();
        
            // 各情報をviewに渡す
            $view->with('user', $user);
        });
    }
}
