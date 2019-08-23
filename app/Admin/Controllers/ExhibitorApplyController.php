<?php
    
    namespace App\Admin\Controllers;
    
    use App\Models\CityPackage;
    use App\Models\Exhibitor;
    use Encore\Admin\Controllers\AdminController;
    use Encore\Admin\Form;
    use Encore\Admin\Grid;
    use Encore\Admin\Show;
    
    class ExhibitorApplyController extends AdminController
    {
        /**
         * Title for current resource.
         *
         * @var string
         */
        protected $title = '展商报名列表';
        
        /**
         * Make a grid builder.
         *
         * @return Grid
         */
        protected function grid()
        {
            $grid = new Grid(new Exhibitor);
            
            $grid->expandFilter();
            $grid->disableExport();
            $grid->actions(function ($actions) {
                $actions->disableView();
            });
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                
                $filter->column(1 / 2, function ($filter) {
                    $filter->like('name', '展商姓名');
                });
                $filter->column(1 / 2, function ($filter) {
                    $filter->like('phone', '联系电话');
                });
                $filter->column(1 / 2, function ($filter) {
                    $filter->like('created_at', '申请日期')->date();
                });
                
                
                $filter->column(1 / 2, function ($filter) {
                    $filter->like('company', '公司名称');
                });
                
                $filter->column(1 / 2, function ($filter) {
                    $filter->equal('status', '审核状态')->select([
                        '-1' => '审核失败',
                        '0'  => '待审核',
                        '1'  => '审核成功',
                    ]);
                });
            });
            
            $grid->column('id', __('编码'));
            $grid->column('name', __('展商姓名'));
            $grid->column('appellation', __('称谓'));
            $grid->column('position', __('职位'))->hide();
            $grid->column('department', __('部门'))->hide();
            $grid->column('company', __('公司名称'));
            $grid->column('tel', __('联系电话'));
            $grid->column('phone', __('手机号码'));
            $grid->column('email', __('邮箱'));
            $grid->column('status', __('状态'))->using([
                '0'  => '未审核',
                '-1' => '审核失败',
                '1'  => '审核成功',
            ]);
            $grid->column('created_at', __('申请时间'));
            
            return $grid;
        }
        
    
        /**
         * Make a form builder.
         *
         * @return Form
         */
        protected function form()
        {
            $form = new Form(new Exhibitor);
            $form->disableViewCheck();
            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
            });
            $form->text('name', __('展商姓名'));
            $form->text('appellation', __('称谓'));
            $form->text('position', __('职位'));
            $form->text('department', __('部门'));
            $form->number('zip_code', __('邮编'));
            $form->text('company', __('公司名称'));
            $form->fieldset('所在城市', function (Form $form) {
                $form->select('prov', '省')->options(CityPackage::selectShow())->load('city',
                    '/admin/api/city');
        
                $form->select('city', '市')->options(function ($id) {
                    $parentId = CityPackage::where('serial_no', $id)->value('parent_id');
            
                    return CityPackage::selectShowChild($parentId);
                })->load('area',
                    '/admin/api/city');
        
                $form->select('area', '区')->options(function ($id) {
                    $parentId = CityPackage::where('serial_no', $id)->value('parent_id');
            
                    return CityPackage::selectShowChild($parentId);
                });
                $form->textarea('address', __('详细地址'));
    
            });
            $form->divider();
            $form->text('tel', __('座机电话'));
            $form->text('fax', __('传真'));
            $form->mobile('phone', __('手机号码'));
            $form->email('email', __('邮箱'));
            $form->text('website', __('公司网址'));
            $form->textarea('product', __('产品说明'));
            $form->text('select', __('展览方案'));
            $form->text('proportion', __('租用面积'));
            $form->textarea('other', __('留言'));
            $form->radio('status', __('状态'))->options([
                '-1'=>'审核失败',
                '1'=>'审核成功',
                '0'=>'待审核',
            ]);
            
            return $form;
        }
    }
