<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\ArticleCategory;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Show;
    
    class ArticleCategoryController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '分类管理';
        
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new ArticleCategory);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->actions(function ($actions) {
                $actions->disableView();
            });
    
            $grid->model()->where('site_id', session()->get('site_id'));
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                $filter->like('title', '标题');
            });
            $grid->column('id', __('编码'))->sortable();
            $grid->column('name', __('分类名称'))->editable();
            $grid->column('sort', __('排序'))->sortable();
            $grid->column('created_at', __('创建时间'));
            
            return $grid;
        }
        
       
        
        /**
         * Make a form builder.
         *
         * @return Form
         */
        protected function form()
        {
            $form = new Form(new ArticleCategory);
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->hidden('site_id')->default(session()->get('site_id'));
    
            $form->text('name', __('分类名称'));
            $form->image('pic_url', __('缩略图'));
            $form->number('sort', __('排序'))->default(0);
            
            return $form;
        }
    }
