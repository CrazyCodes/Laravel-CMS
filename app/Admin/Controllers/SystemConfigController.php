<?php
    
    namespace App\Admin\Controllers;
    
    use App\Admin\Action\UpdateSystemConfig;
    use App\Admin\Module\Setting;
    use App\Models\SystemConfig;
    use App\Models\SystemConfigGroup;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Show;
    use Illuminate\Http\Request;
    
    class SystemConfigController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '基本信息设置';
        
        public function setting(Content $content, Setting $setting, Request $request)
        {
            if ($request->isMethod('POST')) {
                UpdateSystemConfig::execute($request->all());
            }
            
            $content->header('网站基本设置');
            $content->description('设置网站基本信息');
            $content->breadcrumb(
                ['text' => '网站基本设置']
            );
            $content->body($setting->init());
            
            return $content;
            
        }
        
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new SystemConfig);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();

//                $filter->column(1 / 3, function ($filter) {
                $filter->like('var_name', '标示');
//                });
//                $filter->column(1 / 3, function ($filter) {
                $filter->like('var_info', '标题');
//                });
//                $filter->column(1 / 3, function ($filter) {
                $filter->equal('var_group', '分组')->select(SystemConfigGroup::selectShow());
//                });
            });
            $grid->model()->where('site_id', site()->get());
            $grid->column('id', __('编码'));
            $grid->column('var_name', __('配置标示'))->copyable()->sortable();
            $grid->column('var_info', __('配置标题'))->editable();
            $grid->column('group.group_name', __('所属分组'));
            $grid->column('sort', __('排序'))->sortable()->editable();
            
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
            $show = new Show(SystemConfig::findOrFail($id));
            
            $show->field('id', __('编码'));
            $show->field('var_name', __('配置标示'));
            $show->field('var_info', __('配置标题'));
            $show->field('var_group', __('配置所属分组'));
            $show->field('var_value', __('配置值'));
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
            $form = new Form(new SystemConfig);
            $form->hidden('site_id')->default(site()->get());
            $form->text('var_name', __('配置标示'))->required();
            $form->text('var_info', __('配置标题'))->required();
            $form->select('var_group', __('配置所属分组'))->options(SystemConfigGroup::selectShow());
            $form->text('var_value', __('配置值'));
            $form->text('sort', __('排序'))->default(0);
            
            return $form;
        }
    }
