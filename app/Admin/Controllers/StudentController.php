<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Student;

class StudentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Student';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Student());

        $grid->column('id', __('Id'));
        $grid->column('School_id', __('School id'));
        $grid->column('FirstName', __('FirstName'));
        $grid->column('MiddleName', __('MiddleName'));
        $grid->column('LastName', __('LastName'));
        $grid->column('Course', __('Course'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Student::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('School_id', __('School id'));
        $show->field('FirstName', __('FirstName'));
        $show->field('MiddleName', __('MiddleName'));
        $show->field('LastName', __('LastName'));
        $show->field('Course', __('Course'));
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
        $form = new Form(new Student());

        $form->text('School_id', __('School id'));
        $form->text('FirstName', __('FirstName'));
        $form->text('MiddleName', __('MiddleName'));
        $form->text('LastName', __('LastName'));
        $form->text('Course', __('Course'));

        return $form;
    }
}
