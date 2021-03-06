<?php

namespace Celaraze\Chemex\Software\Http\Controllers;

use App\Admin\Grid\Displayers\RowActions;
use App\Support\Data;
use Celaraze\Chemex\Software\Actions\Grid\RowAction\SoftwareTrackDeleteAction;
use Celaraze\Chemex\Software\Repositories\SoftwareTrack;
use Celaraze\Chemex\Software\Support;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Alert;

/**
 * @property string deleted_at
 */
class SoftwareTrackController extends AdminController
{
    public function __construct()
    {
        $this->title = Support::trans('software-track.title');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new SoftwareTrack(['software', 'device']), function (Grid $grid) {
            $grid->column('id');
            $grid->column('software.name', Support::trans('software-track.software.name'));
            $grid->column('device.name', Support::trans('software-track.device.name'));
            $grid->column('created_at');
            $grid->column('updated_at');

            $grid->disableCreateButton();
            $grid->disableRowSelector();
            $grid->disableBatchActions();
            $grid->disableViewButton();
            $grid->disableEditButton();
            $grid->disableDeleteButton();

            $grid->actions(function (RowActions $actions) {
                if (Admin::user()->can('software.track.delete') && $this->deleted_at == null) {
                    $actions->append(new SoftwareTrackDeleteAction());
                }
            });

            $grid->quickSearch('id', 'software.name', 'device.name')
                ->placeholder('试着搜索一下')
                ->auto(false);

            $grid->filter(function (Grid\Filter $filter) {
                $filter->panel();
                $filter->scope('history', '查看历史归属记录')->onlyTrashed();
            });

            $grid->toolsWithOutline(false);
        });
    }

    /**
     * Make a show builder.
     *
     * @return Alert
     */
    protected function detail(): Alert
    {
        return Data::unsupportedOperationWarning();
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
