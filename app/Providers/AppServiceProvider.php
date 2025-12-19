<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SiteInfo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $view->with('categories', Category::all());

            $viewName = $view->getName();
            if (!str_starts_with($viewName, 'admin.')) {
                // Option 1 : Tableau simple (recommandé)
                $view->with('siteInfos', SiteInfo::pluck('value', 'key')->toArray());
            }
        });
    }
}
