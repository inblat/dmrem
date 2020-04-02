<?php

namespace App\Providers;

use SleepingOwl\Admin\Navigation\Page;
use Illuminate\Routing\Router;
use SleepingOwl\Admin\Facades\Navigation;
use SleepingOwl\Admin\Facades\Admin;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\User::class => 'App\Http\Sections\Users',
        \App\Page::class => 'App\Http\Admin\Pages',
//        \App\Category::class => 'App\Http\Admin\Categories',
//        \App\SubCategory::class => 'App\Http\Admin\SubCategories',
//        \App\Property::class => 'App\Http\Admin\Properties',
//        \App\Product::class => 'App\Http\Admin\Products',
//        \App\Setting::class => 'App\Http\Admin\Settings',
//        \App\HomeSlider::class => 'App\Http\Admin\HomeSliders',
//        \App\Attribute::class => 'App\Http\Admin\Attributes',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
        //

        $this->app->call([$this, 'registerRoutes']);
        $this->app->call([$this, 'registerNavigation']);
        parent::boot($admin);
    }

    public function registerNavigation()
    {
        Navigation::setFromArray([
            [
                'title' => 'Dashboard',
                'icon'  => 'fa fa-dashboard',
                'url'   => route('admin.dashboard'),
                'priority' => 0
            ],
//
            (new Page(\App\Page::class))->setIcon('fa fa-file-text-o')->setPriority(5),
//            (new Page(\App\HomeSlider::class))->setIcon('fa fa-sliders')->setPriority(6),
//            (new Page(\App\Category::class))->setIcon('fa fa-map')->setPriority(10),
//            (new Page(\App\SubCategory::class))->setIcon('fa fa-map-o')->setPriority(11),
//            (new Page(\App\Property::class))->setIcon('fa fa-bar-chart-o')->setPriority(15),
//            (new Page(\App\Product::class))->setIcon('fa fa-suitcase')->setPriority(20),
//            (new Page(\App\Attribute::class))->setIcon('fa fa-suitcase')->setPriority(20),
            [
                'title' => 'Администрирование',
                'icon' => 'fa fa-group',
                'pages' => [
                    (new Page(\App\User::class))->setIcon('fa fa-user')->setPriority(10),
//                    (new Page(\App\Setting::class))->setIcon('fa fa-bar-chart-o')->setPriority(15),
                ]
            ]
        ]);
    }

    public function registerRoutes(){
        $this->app['router']->group(['prefix' => config('sleeping_owl.url_prefix'), 'middleware' => config('sleeping_owl.middleware')], function ($router) {

            $router->get('', ['as' => 'admin.dashboard', function () {
                $content = 'Define your dashboard here.';
                return Admin::view($content, 'Dashboard');
            }]);
        });
    }
    
}
