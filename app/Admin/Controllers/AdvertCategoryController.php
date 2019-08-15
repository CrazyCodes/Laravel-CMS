<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\AdvertCategory;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Show;
    
    class AdvertCategoryController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '广告分类';
        
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new AdvertCategory);
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
            $grid->column('name', __('名称'))->editable();
            $grid->column('width', __('高度'))->editable();
            $grid->column('height', __('宽度'))->editable();
            $grid->column('sort', __('排序'))->sortable();
            $grid->column('status', __('状态'))->using(['1' => '启用', '0' => '禁用']);
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
            $form = new Form(new AdvertCategory);
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->hidden('site_id')->default(session()->get('site_id'));
            
            $form->text('name', __('名称'));
            $form->text('width', __('宽度'));
            $form->text('height', __('高度'));
            $form->number('sort', __('排序'))->default(0);
            $form->switch('status', __('状态'))->states([
                'on'  => ['value' => '1', 'text' => '启用', 'color' => 'success'],
                'off' => ['value' => '0', 'text' => '禁用', 'color' => 'danger'],
            ])->default(1);
            
            return $form;
        }
    }
