<?php
/**
 * for smartadmin template
 * add to main.php
 * artsoft\widgets\SAMenuButton::widget();
 */

namespace artsoft\widgets;

use yii\base\Widget;

class SAMenuButton extends Widget {

    public $assetBundle;

    public function run() {

        return $this->render('sa_menubutton');
    }

}
