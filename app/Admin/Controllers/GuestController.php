<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\Guest;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Show;
    
    class GuestController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '嘉宾设置';
        
        public function index(Content $content)
        {
            $content->breadcrumb(
                ['text' => '嘉宾列表']
            );
            
            return parent::index($content); // TODO: Change the autogenerated stub
        }
        
        public function create(Content $content)
        {
            $content->breadcrumb(
                ['text' => '嘉宾列表', 'url' => '/guests'],
                ['text' => '创建']
            );
            
            return parent::create($content); // TODO: Change the autogenerated stub
        }
        
        public function edit($id, Content $content)
        {
            $content->breadcrumb(
                ['text' => '嘉宾列表', 'url' => '/guests'],
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
            $grid = new Grid(new Guest);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
        
                $filter->column(1 / 2, function ($filter) {
                    $filter->like('name', '嘉宾名称');
                });
        
                $filter->column(1 / 2, function ($filter) {
                    $filter->like('company', '所在公司');
                });
        
            });
    
            $grid->actions(function ($actions) {
                $actions->disableView();
            });
            $grid->column('id', __('编码'));
            $grid->column('cover', __('缩略图片'))->image(env('APP_URL') . '/uploads', 50, 50);
            $grid->column('name', __('姓名'))->editable();
            $grid->column('appellation', __('职称'))->editable();
            $grid->column('company', __('公司'))->editable();
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
            $show = new Show(Guest::findOrFail($id));
            
            $show->field('id', __('Id'));
            $show->field('name', __('Name'));
            $show->field('appellation', __('Appellation'));
            $show->field('company', __('Company'));
            $show->field('cover', __('Cover'));
            $show->field('data', __('Data'));
            $show->field('created_at', __('Created at'));
            $show->field('updated_at', __('Updated at'));
            
            return $show;
        }
        
        /**
         * Make a form builder.
         *
         * @return Form
         */
        protected function form()
        {
            $form = new Form(new Guest);
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->text('name', __('姓名'));
            $form->text('appellation', __('职称'));
            $form->text('company', __('公司'));
            $form->image('cover', __('封面'));
            $form->textarea('data', __('其他信息'));
            
            return $form;
        }
    }
