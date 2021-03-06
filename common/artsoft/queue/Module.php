<?php

namespace artsoft\queue;

/**
 * Module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'artsoft\queue\controllers';

    /**
     *
     * @var type 
     */
    public $cronRedexp = '/^(\*|([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])|\*\/([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])'
                                . '|(([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])\-([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9]))'
                                . '|(([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])\,([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9]))'
                                . '|(([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])\-([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9]))\/([0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9])) '
                        . '(\*|([0-9]|1[0-9]|2[0-3])|\*\/([0-9]|1[0-9]|2[0-3])'
                                . '|(([0-9]|1[0-9]|2[0-3])\-([0-9]|1[0-9]|2[0-3]))'
                                . '|(([0-9]|1[0-9]|2[0-3])\,([0-9]|1[0-9]|2[0-3]))'
                                . '|(([0-9]|1[0-9]|2[0-3])\-([0-9]|1[0-9]|2[0-3])\/([0-9]|1[0-9]|2[0-3]))) '
                        . '(\*|([1-9]|1[0-9]|2[0-9]|3[0-1])|\*\/([1-9]|1[0-9]|2[0-9]|3[0-1])|([1-9]|1[0-9]|2[0-9]|3[0-1])W) '
                        . '(\*|([1-9]|1[0-2])|\*\/([1-9]|1[0-2])) '
                        . '(\*|([0-7])|\*\/([0-7])|([0-7]#[0-5])|([0-7]L)|([0-7]\-[0-7])|([0-7]\,[0-7]))$/';
    /**
     * {@inheritdoc}
     */
     public function init()
    {
        parent::init();
    }
}
