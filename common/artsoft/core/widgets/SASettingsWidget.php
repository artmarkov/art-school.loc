<?php
/**
 * for smartadmin template
 * add to main.php
 * artsoft\widgets\SASettingsWidget::widget(['assetBundle' => $assetBundle]);
 */

namespace artsoft\widgets;

use yii\base\Widget;

class SASettingsWidget extends Widget {

    public $assetBundle;

    public function run() {

        return $this->render('sa_settings', ['assetBundle' => $this->assetBundle]);
    }

}
