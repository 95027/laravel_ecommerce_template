<?php

namespace App\Providers;

use App\Models\SidebarSection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\Category\Models\Category;

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
        $data['categorys'] = Category::where('parentId', null)->with('media')->get();
        View::share('pageTitle', '');
        View::share('categorys', $data['categorys']);



        // $sidebarSections = SidebarSection::where('parentId', null)->get();
        //View::share('sidebarSections', $sidebarSections);
    }
}
