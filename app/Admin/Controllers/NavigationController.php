<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\Navigation;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Layout\Column;
    use Encore\Admin\Layout\Content;
    use Encore\Admin\Layout\Row;
    use Encore\Admin\Show;
    use Encore\Admin\Tree;
    use Encore\Admin\Widgets\Box;
    
    class NavigationController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '网站菜单管理';
        
        public function index(Content $content)
        {
            return $content
                ->title('网站菜单管理')
                ->description('设置')
                ->row(function (Row $row) {
                    $row->column(4, $this->treeView()->render());
                    
                    $row->column(8, function (Column $column) {
                        $form = new \Encore\Admin\Widgets\Form();
                        $form->action(admin_base_path('navigations'));
                        
                        $form->select('parent_id', '父级菜单')->options(Navigation::selectOptions());
                        $form->text('name', '标题')->rules('required');
                        $form->text('link_url', __('跳转链接'))->required();
                        $form->select('target', __('跳转方式'))->options([
                            'self'=>'当前页跳转',
                            'block'=>'新页面跳转'
                        ])->default('self')->required();
                        $form->switch('status',__('状态'))->states([
                            'on'  => ['value' => 1, 'text' => '启用', 'color' => 'success'],
                            'off' => ['value' => 0, 'text' => '禁用', 'color' => 'danger'],
                        ])->default(1);
                        $form->hidden('site_id')->default(session()->get('site_id'));
                        $column->append((new Box('创建', $form)));
                    });
                });
        }
        
        protected function treeView()
        {
            return Navigation::tree(function (Tree $tree) {
                $tree->branch(function ($branch) {
                    $payload = "<strong>{$branch['name']}</strong>";
                    $uri = $branch['link_url'];
                    $payload .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"$uri\" class=\"dd-nodrag\">$uri</a>";
                    return $payload;
                });
            });
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
            $show = new Show(Navigation::findOrFail($id));
            
            $show->field('id', __('编码'));
            $show->field('parent_id', __('父级菜单'));
            $show->field('name', __('名称'));
            $show->field('link_url', __('跳转链接'));
            $show->field('target', __('跳转方式'));
            $show->field('sort', __('排序'));
            $show->field('status', __('状态'));
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
            $form = new Form(new Navigation);
    
            $form->hidden('site_id')->default(session()->get('site_id'));
            $form->select('parent_id', __('父级菜单'))->options(Navigation::selectOptions());
            $form->text('name', __('名称'))->required();
            $form->text('link_url', __('跳转链接'))->required();
            $form->select('target', __('跳转方式'))->options([
                'self'=>'当前页跳转',
                'block'=>'新页面跳转'
            ])->default('self')->required();
            $form->number('sort', __('排序'))->default(0);
            $form->switch('status',__('状态'))->states([
                'on'  => ['value' => '1', 'text' => '启用', 'color' => 'success'],
                'off' => ['value' => '0', 'text' => '禁用', 'color' => 'danger'],
            ])->default(1);

            return $form;
        }
    }
