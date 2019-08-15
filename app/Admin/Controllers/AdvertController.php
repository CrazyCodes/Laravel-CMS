<?php

namespace App\Admin\Controllers;

use App\Models\Advert;
use App\Models\AdvertCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdvertController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '广告管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Advert);
        $grid->expandFilter();
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->model()->where('site_id', session()->get('site_id'));
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
        
            $filter->column(1 / 3, function ($filter) {
                $filter->like('title', '标题');
            });
            $filter->column(1 / 3, function ($filter) {
                $filter->equal('category_id', '分类')->select(AdvertCategory::selectShow());
            });
        
            $filter->column(1 / 3, function ($filter) {
                $filter->like('created_at', '日期')->date();
            });
        
        });
        $grid->column('id', __('编码'))->sortable();
        $grid->column('title', __('标识'))->editable();
        $grid->column('link_url', __('跳转链接'))->editable();
        $grid->column('sort', __('排序'))->sortable()->editable();
        $grid->column('status', __('状态'))->using(['1' => '启用', '0' => '禁用']);
    
    
        return $grid;
    }

   

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Advert);
        $form->disableViewCheck();
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });
        $form->hidden('site_id')->default(session()->get('site_id'));
    
        $form->select('category_id', __('所属分类'))->options(AdvertCategory::selectShow());
        $form->text('title', __('标题'))->required();
//        $form->radio('mode', __('类型'))->options(['image' => '图片', 'text'=> '文字'])->default('image');
        $form->image('content', __('广告图'))->required();
        $form->text('link_url', __('链接地址'));
        $form->number('sort', __('排序'))->default(0);
        $form->switch('status', __('状态'))->states([
            'on'  => ['value' => '1', 'text' => '启用', 'color' => 'success'],
            'off' => ['value' => '0', 'text' => '禁用', 'color' => 'danger'],
        ])->default(1);

        return $form;
    }
}
