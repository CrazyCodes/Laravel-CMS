<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\Questionnaire;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Show;
    
    class QuestionnaireController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '问卷列表';
        
        public function index(Content $content)
        {
            $content->breadcrumb(
                ['text' => '问卷列表']
            );
            
            return parent::index($content); // TODO: Change the autogenerated stub
        }
        
        public function create(Content $content)
        {
            $content->breadcrumb(
                ['text' => '问卷列表', 'url' => '/questionnaires'],
                ['text' => '创建']
            );
            
            return parent::create($content); // TODO: Change the autogenerated stub
        }
        
        public function edit($id, Content $content)
        {
            $content->breadcrumb(
                ['text' => '问卷列表', 'url' => '/questionnaires'],
                ['text' => '创建']
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
            $grid = new Grid(new Questionnaire);
            $grid->expandFilter();
            $grid->disableExport();
            $grid->model()->where('site_id', site()->get());
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                
                $filter->like('name', '名称');
            });
            $grid->actions(function ($actions) {
                $actions->disableView();
            });
            
            $grid->column('id', __('编码'))->sortable();
            $grid->column('name', __('名称'))->editable();
            $grid->column('sort', __('排序'))->editable()->sortable();
            $grid->column('created_at', __('创建时间'))->sortable();
            
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
            $show = new Show(Questionnaire::findOrFail($id));
            
            $show->field('id', __('Id'));
            $show->field('site_id', __('Site id'));
            $show->field('name', __('Name'));
            $show->field('data', __('Data'));
            $show->field('sort', __('Sort'));
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
            $form = new Form(new Questionnaire);
            
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->hidden('site_id')->default(site()->get());
            $form->text('name', __('名称'))->required();
            
            $form->number('sort', __('排序'))->default(0);
            $form->table('data', '选项', function ($table) {
                $table->text('名称');
                $table->select('类型')->options([
                    'checkbox' => '多选',
                    'radio'    => '单选',
                    'input'    => '单行输入',
                    'textarea' => '多行输入',
                ]);
            });
            
            return $form;
        }
    }
