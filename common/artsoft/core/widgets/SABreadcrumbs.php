<?php
namespace artsoft\widgets;

use yii\widgets\Breadcrumbs;

class SABreadcrumbs extends Breadcrumbs
{
    public $tag = 'ol';
    public $options = ['class' => 'breadcrumb page-breadcrumb'];
    public $itemTemplate = "<li class=\"breadcrumb-item\">{link}</li>\n";
    public $activeItemTemplate = "<li class=\" breadcrumb-item active\">{link}</li>\n";
}

