<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\SystemConfigGroup;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Show;
    
    class SystemConfigGroupController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '网站信息群组';
        
        public function index(Content $content)
        {
            $content->breadcrumb(
                ['text' => '网站信息群组']
            );
            
            return parent::index($content); // TODO: Change the autogenerated stub
        }
        
        public function create(Content $content)
        {
            $content->breadcrumb(
                ['text' => '网站信息群组', 'url' => '/system-config-groups'],
                ['text' => '创建']
            );
            
            return parent::create($content); // TODO: Change the autogenerated stub
        }
        
        public function show($id, Content $content)
        {
            $content->breadcrumb(
                ['text' => '网站信息群组', 'url' => '/system-config-groups'],
                ['text' => '查看']
            );
            
            return parent::show($id, $content); // TODO: Change the autogenerated stub
        }
        
        public function edit($id, Content $content)
        {
            $content->breadcrumb(
                ['text' => '网站信息群组', 'url' => '/system-config-groups'],
                ['text' => '更新']
            );
            
            return parent::edit($id, $content); // TODO: Change the autogenerated stub
        }
    
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new SystemConfigGroup);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                $filter->like('group_name', '群组名称');
            });
            $grid->model()->where('site_id', session()->get('site_id'));
            $grid->column('id', __('编码'));
            $grid->column('group_name', __('群组名称'))->editable();
            $grid->column('sort', __('排序'))->sortable()->editable();
            $grid->column('created_at', __('创建时间'));
            
            return $grid;
        }
        
        /**
         * Make a show builder.
         *
         * @param mixed $id
         *
         * @return Show
         */
        protected function detail($id)
        {
            $show = new Show(SystemConfigGroup::findOrFail($id));
            
            $show->field('id', __('编码'));
            $show->field('group_name', __('群组名称'));
            $show->field('sort', __('排序'));
            $show->field('created_at', __('创建时间'));
            $show->field('updated_at', __('更新时间'));
            
            return $show;
        }
        
        /**
         * Make a form builder.
         *
         * @return Form
         */
        protected function form()
        {
            $form = new Form(new SystemConfigGroup);
            $form->hidden('site_id')->default(session()->get('site_id'));
            $form->text('group_name', __('群组名称'))->required();
            $form->text('sort', __('排序'))->default(0);
            
            return $form;
        }
    }
