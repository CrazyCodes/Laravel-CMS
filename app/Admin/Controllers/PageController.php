<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\Page;
    use App\Models\PageCategory;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Show;
    use Illuminate\Support\Facades\Request;
    use James\Admin\Breadcrumb\BaseController;
    
    class PageController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '图文列表';
        
        
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new Page);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->model()->where('site_id', session()->get('site_id'));
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                
                $filter->column(1 / 3, function ($filter) {
                    $filter->like('title', '标题');
                });
                $filter->column(1 / 3, function ($filter) {
                    $filter->equal('category_id', '分类')->select(PageCategory::selectShow());
                });
                
                $filter->column(1 / 3, function ($filter) {
                    $filter->like('created_at', '日期')->date();
                });
                
            });
            $grid->actions(function ($actions) {
                $actions->disableView();
            });
            $grid->column('id', __('编码'))->sortable();
            $grid->column('pic_url', __('缩略图'))->image(env('APP_URL') . '/uploads', 50, 50);
            $grid->column('title', __('标题'))->editable();
            $grid->column('created_at', __('创建时间'))->sortable();
    
            return $grid;
        }
        
        
        /**
         * Make a form builder.
         *
         * @return Form
         */
        protected function form()
        {
            $form = new Form(new Page);
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->hidden('site_id', '')->default(session()->get('site_id'));
            $form->text('title', '标题')->required();
            $form->select('category_id', __('图文分类'))->options(PageCategory::selectShow());
            $form->image('pic_url', __('缩略图'));
            $form->UEditor('content', __('内容'));
            
            return $form;
        }
    }
