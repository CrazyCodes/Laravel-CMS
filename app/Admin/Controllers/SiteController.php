<?php

namespace App\Admin\Controllers;

use App\Models\Site;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SiteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '站点设置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Site);
        $grid->expandFilter();
        $grid->disableExport();
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('name', '站点名称');
        });
        $grid->column('id', __('编码'))->sortable();
        $grid->column('name', __('名称'))->editable();
        $grid->column('key', __('标识'))->editable();
        $grid->column('lang', __('语言'))->editable();
        $grid->column('created_at', __('创建时间'))->sortable();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Site::findOrFail($id));

        $show->field('id', __('编码'));
        $show->field('name', __('名称'));
        $show->field('key', __('标识'));
        $show->field('lang', __('语言'));
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
        $form = new Form(new Site);

        $form->text('name', __('站点名称'))->required();
        $form->text('key', __('站点标示'))->required();
        $form->text('lang', __('站点语言'))->required();

        return $form;
    }
}