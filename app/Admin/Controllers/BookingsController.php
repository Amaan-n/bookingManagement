<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Bookings;
use \App\Models\Customer;
use \App\Models\Services;
use \App\Models\Worker;

class BookingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Bookings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Bookings());

        $grid->column('id', __('Id'));
        $grid->column('customers', __('Customers'));
        $grid->column('workers', __('Workers'));
        $grid->column('start_time', __('Start time'));
        $grid->column('end_time', __('End time'));
        $grid->column('services', __('Services'));
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
        $show = new Show(Bookings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customers', __('Customers'));
        $show->field('workers', __('Workers'));
        $show->field('start_time', __('Start time'));
        $show->field('end_time', __('End time'));
        $show->field('services', __('Services'));
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
        $form = new Form(new Bookings());

        $form->select('customers', __("Customers"))->options(Customer::all()->pluck('name', 'name'));
        $form->select('workers', __("Workers"))->options(Worker::all()->pluck('name', 'name'));
        $form->time('start_time', __('Start time'))->default(date('H:i:s'));
        $form->time('end_time', __('End time'))->default(date('H:i:s'));
        $form->select('services', __("Services"))->options(Services::all()->pluck('name', 'name'));

        return $form;
    }
}
