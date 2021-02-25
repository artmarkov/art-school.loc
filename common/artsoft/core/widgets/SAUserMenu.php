<?php
/**
 * for smartadmin template
 * add to main.php
 * artsoft\widgets\SAUserMenu::widget(['assetBundle' => $assetBundle]);
 */

namespace artsoft\widgets;

use yii\base\Widget;

class SAUserMenu extends Widget {

    public $assetBundle;

    public function run() {

        return $this->render('sa_usermenu', ['assetBundle' => $this->assetBundle]);
    }

}
