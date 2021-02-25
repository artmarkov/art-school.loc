<?php
/**
 * for smartadmin template
 * add to main.php
 * artsoft\widgets\SAQuickMenuWidget::widget();
 */

namespace artsoft\widgets;

use yii\base\Widget;

class SAQuickMenuWidget extends Widget {

    public $assetBundle;

    public function run() {

        return $this->render('sa_quickmenu');
    }

}
