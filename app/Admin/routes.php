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
        $router->resource('users', UserController::class);
        $router->resource('users_team', UserTeamController::class);
        $router->get('users_team/member/id/{id}', 'UserTeamController@member');
        $router->post('users/creates', 'UserController@creates');
        $router->resource('industries', IndustryController::class);
        $router->resource('questionnaires', QuestionnaireController::class);
        $router->resource('guests', GuestController::class);
        $router->resource('exhibitors', ExhibitorController::class);
        $router->resource('exhibitors_apply', ExhibitorApplyController::class);
        
        $router->get('api/industry', 'Api\IndustryController@child');
        $router->get('api/city', 'Api\IndustryController@city');
//        $router->any('navigations', 'NavigationController@index');
    });
