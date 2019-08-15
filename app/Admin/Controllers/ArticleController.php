<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '内容管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);
        $grid->expandFilter();
        $grid->disableExport();
        $grid->model()->where('site_id',session()->get('site_id'));
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
        
            $filter->column(1 / 3, function ($filter) {
                $filter->like('title', '标题');
            });
            $filter->column(1 / 3, function ($filter) {
                $filter->equal('category_id', '分类')->select(ArticleCategory::selectShow());
            });
    
            $filter->column(1 / 3, function ($filter) {
                $filter->like('created_at', '日期')->date();
            });
           
        });
        
        $grid->actions(function ($actions) {
            $actions->disableView();
        });
    
        $grid->column('id', __('编码'))->sortable();
        $grid->column('pic_url', __('缩略图片'))->image(env('APP_URL').'/uploads',50,50);
        $grid->column('title', __('图文标题'));
        $grid->column('author', __('文章作者'))->editable();
        $grid->column('hits', __('点击次数'))->sortable();
        $grid->column('sort', __('排序'))->sortable()->editable();
        $grid->column('created_at', __('创建时间'));

        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article);
        $form->disableViewCheck();
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });
        $form->hidden('site_id')->default(session()->get('site_id'));
        $form->select('category_id', __('所属分类'))->options(ArticleCategory::selectShow());
        $form->text('title', __('标题'));
        $form->text('color_val', __('标题颜色'))->default('#000000');
        $form->number('bold_val', __('加粗'))->default(0);
        $form->text('source', __('来源'));
        $form->text('author', __('作者'));
        $form->tags('keywords', __('关键词'));
        $form->textarea('description', __('摘要'));
        $form->UEditor('content', __('内容'));
        $form->image('pic_url', __('缩略图'));
        $form->multipleImage('pic_arr',__('组图'))->removable()->sortable();
        $form->number('hits', __('点击次数'))->default(0);
        $form->number('sort', __('排序'))->default(0);

        return $form;
    }
}
