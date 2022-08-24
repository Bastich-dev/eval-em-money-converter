<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $data_categories = Category::all()->toArray();
        $default_categories = [
            ['id' => 0, 'name' => 'Soldes', 'slug' => 'soldes'],
        ];

        View::share('categories',  array_merge($data_categories, $default_categories));
    }
}
