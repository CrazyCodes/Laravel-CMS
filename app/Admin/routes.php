<?php
    
    use Illuminate\Routing\Router;
    
    Admin::routes();
    
    Route::group([
        'prefix'     => config('admin.route.prefix'),
        'namespace'  => config('admin.route.namespace'),
        'middleware' => config('admin.route.middleware'),
    ], function (Router $router) {
        
        $router->get('/', 'HomeController@index')->name('admin.home');
        $router->any('system-configs-setting', 'SystemConfigController@setting');
        $router->resource('system-configs', SystemConfigController::class);
        $router->resource('system-config-groups', SystemConfigGroupController::class);
        $router->resource('articles', ArticleController::class);
        $router->resource('article-categories', ArticleCategoryController::class);
        $router->resource('pages', PageController::class);
        $router->resource('page-categories', PageCategoryController::class);
        $router->resource('adverts', AdvertController::class);
        $router->resource('advert-categories', AdvertCategoryController::class);
        $router->resource('sites', SiteController::class);
        $router->resource('links', LinkController::class);
        $router->resource('navigations', NavigationController::class);
//        $router->any('navigations', 'NavigationController@index');
    });
