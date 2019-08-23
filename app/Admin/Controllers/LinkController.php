<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\Link;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Show;
    
    class LinkController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '友情链接';
        
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new Link);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->actions(function ($actions) {
                $actions->disableView();
            });
            $grid->model()->where('site_id', site()->get());
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                
                $filter->like('name', '标题');
                $filter->like('created_at', '日期')->date();
                
            });
            $grid->column('id', __('编码'))->sortable();
            $grid->column('name', __('网站名称'))->editable();
            $grid->column('link_url', __('跳转链接'))->editable();
            $grid->column('sort', __('排序'))->sortable();
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
            $form = new Form(new Link);
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->hidden('site_id')->default(site()->get());
            $form->text('name', __('网站名称'))->required();
            $form->text('note', __('网站描述'));
            $form->image('pic_url', __('图片'));
            $form->text('link_url', __('跳转链接'));
            $form->number('sort', __('排序'))->default(0);
            
            return $form;
        }
    }
