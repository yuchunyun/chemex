<?php

namespace Celaraze\Chemex\Service\Http\Controllers;

use App\Admin\Grid\Displayers\RowActions;
use App\Support\Data;
use Celaraze\Chemex\Service\Actions\Grid\RowAction\ServiceIssueUpdateAction;
use Celaraze\Chemex\Service\Repositories\ServiceIssue;
use Celaraze\Chemex\Service\Support;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\Tools\Selector;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;
use Dcat\Admin\Widgets\Alert;

/**
 * @property int status
 */
class ServiceIssueController extends AdminController
{
    public function __construct()
    {
        $this->title = Support::trans('service-issue.title');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new ServiceIssue(['service']), function (Grid $grid) {

            $grid->model()->orderBy('status', 'ASC');

            $grid->column('id');
            $grid->column('service.name', Support::trans('service-issue.service.name'));
            $grid->column('issue', Support::trans('service-issue.issue'));
            $grid->column('status', Support::trans('service-issue.status'))->using(Data::serviceIssueStatus());
            $grid->column('start', Support::trans('service-issue.start'));
            $grid->column('end', Support::trans('service-issue.end'));

            $grid->actions(function (RowActions $actions) {
                if ($this->status == 1 && Admin::user()->can('service.issue.update')) {
                    $actions->append(new ServiceIssueUpdateAction());
                }
            });

            $grid->toolsWithOutline(false);

            $grid->disableCreateButton();
            $grid->disableRowSelector();
            $grid->disableBatchActions();
            $grid->disableViewButton();
            $grid->disableEditButton();
            $grid->disableDeleteButton();

            $grid->quickSearch('id', 'service.name', 'issue')
                ->placeholder('试着搜索一下')
                ->auto(false);

            $grid->selector(function (Selector $selector) {
                $selector->select('status', '状态', [
                    1 => '故障',
                    2 => '恢复'
                ]);
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
    protected function detail($id): Show
    {
        return Show::make($id, new ServiceIssue(['service']), function (Show $show) {
            $show->field('id');
            $show->field('service.name', Support::trans('service-issue.name'));
            $show->field('issue', Support::trans('service-issue.issue'));
            $show->field('status', Support::trans('service-issue.status'))->using(Data::serviceIssueStatus());
            $show->field('start', Support::trans('service-issue.start'));
            $show->field('end', Support::trans('service-issue.end'));
            $show->field('created_at');
            $show->field('updated_at');

            $show->disableDeleteButton();
            $show->disableEditButton();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Alert
     */
    protected function form(): Alert
    {
        return Data::unsupportedOperationWarning();
    }
}
