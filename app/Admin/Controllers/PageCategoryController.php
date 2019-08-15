<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\PageCategory;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Show;
    
    class PageCategoryController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '类目管理';
        
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new PageCategory);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                $filter->like('title', '标题');
            });
            $grid->actions(function ($actions) {
                $actions->disableView();
            });
            $grid->model()->where('site_id', session()->get('site_id'));
            $grid->column('id', __('编码'))->sortable();
            $grid->column('name', __('名称'))->editable();
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
            $form = new Form(new PageCategory);
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->hidden('site_id', '')->default(session()->get('site_id'));
//            $form->number('parent_id', __('Parent id'));
            $form->text('name', __('名称'))->required();
//            $form->text('pic_url', __('Pic url'));
            $form->text('seo_title', __('SEO标题'));
            $form->text('keywords', __('关键词'));
            $form->text('description', __('描述'));
            $form->number('sort', __('排序'))->default(0);
            
            return $form;
        }
    }
