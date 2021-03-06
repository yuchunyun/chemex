<?php

namespace Celaraze\Chemex\Software\Actions\Tree\ToolAction;

use Celaraze\Chemex\Software\Forms\SoftwareCategoryImportForm;
use Dcat\Admin\Tree\AbstractTool;
use Dcat\Admin\Widgets\Modal;

class SoftwareCategoryImportAction extends AbstractTool
{
    protected $title = '导入';

    /**
     * 渲染模态框
     * @return Modal|string
     */
    public function render()
    {

        return Modal::make()
            ->lg()
            ->body(new SoftwareCategoryImportForm())
            ->button("<a class='btn btn-sm btn-success' style='color: white;'><i class='feather icon-package'></i>&nbsp;$this->title</a>");
    }
}
