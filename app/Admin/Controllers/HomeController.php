<?php
    
    namespace App\Admin\Controllers;
    
    use App\Http\Controllers\Controller;
    use Encore\Admin\Controllers\Dashboard;
    use Encore\Admin\Layout\Column;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Layout\Row;
    use Encore\Admin\Widgets\Box;
    use Encore\Admin\Widgets\InfoBox;
    
    class HomeController extends Controller
    {
        public function index(Content $content)
        {
            return $content
                ->row(function (Row $row) {
                    $article = new InfoBox('文章', 'align-left', 'aqua', '/admin/users', '1024');
                    $page    = new InfoBox('单页', 'adjust', 'green', '/admin/users', '1024');
                    $link    = new InfoBox('链接', 'link', 'yellow', '/admin/users', '1024');
                    $advert  = new InfoBox('广告', 'adn', 'red', '/admin/users', '1024');
                    
                    $row->column(3, $article);
                    $row->column(3, $page);
                    $row->column(3, $link);
                    $row->column(3, $advert);
                })
                ->title('控制台')
                ->description('欢迎使用Laravel CMS')
                ->row(function (Row $row) {
                    $row->column(12, new Box('Bar chart', view('admin.defined.chartjs')));
                })
                ->row(function (Row $row) {
                    
                    $row->column(6, function (Column $column) {
                        $column->append(Dashboard::environment());
                    });
                    
                    $row->column(6, function (Column $column) {
                        $column->append(Dashboard::environment());
                    });
                });
        }
    }
