<?php

use backend\assets\AppAsset;
use artsoft\assets\MetisMenuAsset;
use artsoft\assets\SmartAsset;
use artsoft\models\Menu;
use artsoft\widgets\LanguageSelector;
use artsoft\widgets\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

//AppAsset::register($this);
$assetBundle = SmartAsset::register($this);
//MetisMenuAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link id="mytheme" rel="stylesheet" media="screen, print" href="">
</head>
<body>
<?php $this->beginBody() ?>
<!-- BEGIN Body -->
<body class="mod-bg-1 ">
<!-- DOC: script to save and load page settings -->
<script>
    /**
     *	This script should be placed right after the body tag for fast execution
     *	Note: the script is written in pure javascript and does not depend on thirdparty library
     **/
    'use strict';

    var classHolder = document.getElementsByTagName("BODY")[0],
        /**
         * Load from localstorage
         **/
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    /**
     * Load theme options
     **/
    if (themeSettings.themeOptions)
    {
        classHolder.className = themeSettings.themeOptions;
        console.log("%c✔ Theme settings loaded", "color: #148f32");
    }
    else
    {
        console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
    }
    if (themeSettings.themeURL && !document.getElementById('mytheme'))
    {
        var cssfile = document.createElement('link');
        cssfile.id = 'mytheme';
        cssfile.rel = 'stylesheet';
        cssfile.href = themeURL;
        document.getElementsByTagName('head')[0].appendChild(cssfile);

    }
    else if (themeSettings.themeURL && document.getElementById('mytheme'))
    {
        document.getElementById('mytheme').href = themeSettings.themeURL;
    }
    /**
     * Save to localstorage
     **/
    var saveSettings = function()
    {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
        {
            return /^(nav|header|footer|mod|display)-/i.test(item);
        }).join(' ');
        if (document.getElementById('mytheme'))
        {
            themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
        };
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    /**
     * Reset settings
     **/
    var resetSettings = function()
    {
        localStorage.setItem("themeSettings", "");
    }

</script>
<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
    <div class="page-inner">
        <!-- BEGIN Left Aside -->
        <aside class="page-sidebar">
            <div class="page-logo">
                <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                    <img src="<?= $assetBundle->baseUrl ?>/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1"><?= Yii::t('art', 'Control Panel')?></span>
                    <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <!-- BEGIN PRIMARY NAVIGATION -->
            <?= $this->render('left.php')?>
            <!-- END PRIMARY NAVIGATION -->
            <!-- NAV FOOTER -->
            <div class="nav-footer shadow-top">
                <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                    <i class="ni ni-chevron-right"></i>
                    <i class="ni ni-chevron-right"></i>
                </a>
                <ul class="list-table m-auto nav-footer-buttons">
                    <li>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                            <i class="fal fa-comments"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                            <i class="fal fa-life-ring"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                            <i class="fal fa-phone"></i>
                        </a>
                    </li>
                </ul>
            </div> <!-- END NAV FOOTER -->
        </aside>
        <!-- END Left Aside -->
        <div class="page-content-wrapper">
            <!-- BEGIN Page Header -->
            <header class="page-header" role="banner">
                <!-- we need this logo when user switches to nav-function-top -->
                <div class="page-logo">
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                        <img src="<?= $assetBundle->baseUrl ?>/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                        <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <!-- DOC: nav menu layout change shortcut -->
               <?= artsoft\widgets\SAMenuButton::widget();?>

                <div class="ml-auto d-flex">
                    <!-- app settings -->
                    <div class="hidden-md-down">
                        <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                            <i class="fal fa-cog"></i>
                        </a>
                    </div>
                    <!-- app notification -->
                    <?= artsoft\widgets\SAUserNotification::widget(['assetBundle' => $assetBundle]);?>
                    <!-- app user menu -->
                    <?= artsoft\widgets\SAUserMenu::widget(['assetBundle' => $assetBundle]);?>
                </div>
            </header>
            <!-- END Page Header -->
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">
                <?= \artsoft\widgets\SABreadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]) ?>
                <?= $content ?>
            </main>
            <!-- this overlay is activated only when mobile menu is triggered -->
            <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700"><?= date('Y') ?> &copy; <?= Html::encode(Yii::$app->settings->get('general.title', 'Art Site', Yii::$app->language)) ?>&nbsp;<?= Yii::powered() ?>, <?= artsoft\Art::powered() ?></span>
                </div>
                <div>
                    <ul class="list-table m-0">
                        <li><a href="intel_introduction.html" class="text-secondary fw-700">About</a></li>
                        <li class="pl-3"><a href="info_app_licensing.html" class="text-secondary fw-700">License</a></li>
                        <li class="pl-3"><a href="info_app_docs.html" class="text-secondary fw-700">Documentation</a></li>
                        <li class="pl-3 fs-xl"><a href="" class="text-secondary" target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </footer>
            <!-- END Page Footer -->
            <!-- BEGIN Shortcuts -->
            <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <ul class="app-list w-auto h-auto p-0 text-left">
                                <li>
                                    <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                            <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                                    Home
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                            <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                            <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                                    Inbox
                                                </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                            <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                                    Add More
                                                </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Shortcuts -->
            <!-- BEGIN Color profile -->
            <!-- this area is hidden and will not be seen on screens or screen readers -->
            <!-- we use this only for CSS color refernce for JS stuff -->
            <p id="js-color-profile" class="d-none">
                <span class="color-primary-50"></span>
                <span class="color-primary-100"></span>
                <span class="color-primary-200"></span>
                <span class="color-primary-300"></span>
                <span class="color-primary-400"></span>
                <span class="color-primary-500"></span>
                <span class="color-primary-600"></span>
                <span class="color-primary-700"></span>
                <span class="color-primary-800"></span>
                <span class="color-primary-900"></span>
                <span class="color-info-50"></span>
                <span class="color-info-100"></span>
                <span class="color-info-200"></span>
                <span class="color-info-300"></span>
                <span class="color-info-400"></span>
                <span class="color-info-500"></span>
                <span class="color-info-600"></span>
                <span class="color-info-700"></span>
                <span class="color-info-800"></span>
                <span class="color-info-900"></span>
                <span class="color-danger-50"></span>
                <span class="color-danger-100"></span>
                <span class="color-danger-200"></span>
                <span class="color-danger-300"></span>
                <span class="color-danger-400"></span>
                <span class="color-danger-500"></span>
                <span class="color-danger-600"></span>
                <span class="color-danger-700"></span>
                <span class="color-danger-800"></span>
                <span class="color-danger-900"></span>
                <span class="color-warning-50"></span>
                <span class="color-warning-100"></span>
                <span class="color-warning-200"></span>
                <span class="color-warning-300"></span>
                <span class="color-warning-400"></span>
                <span class="color-warning-500"></span>
                <span class="color-warning-600"></span>
                <span class="color-warning-700"></span>
                <span class="color-warning-800"></span>
                <span class="color-warning-900"></span>
                <span class="color-success-50"></span>
                <span class="color-success-100"></span>
                <span class="color-success-200"></span>
                <span class="color-success-300"></span>
                <span class="color-success-400"></span>
                <span class="color-success-500"></span>
                <span class="color-success-600"></span>
                <span class="color-success-700"></span>
                <span class="color-success-800"></span>
                <span class="color-success-900"></span>
                <span class="color-fusion-50"></span>
                <span class="color-fusion-100"></span>
                <span class="color-fusion-200"></span>
                <span class="color-fusion-300"></span>
                <span class="color-fusion-400"></span>
                <span class="color-fusion-500"></span>
                <span class="color-fusion-600"></span>
                <span class="color-fusion-700"></span>
                <span class="color-fusion-800"></span>
                <span class="color-fusion-900"></span>
            </p>
            <!-- END Color profile -->
        </div>
    </div>
</div>
<!-- END Page Wrapper -->
<!-- BEGIN Quick Menu -->
<?= artsoft\widgets\SAQuickMenuWidget::widget();?>
<!-- END Quick Menu -->

<!-- BEGIN Page Settings -->
<?= artsoft\widgets\SASettingsWidget::widget(['assetBundle' => $assetBundle]);?>
<!-- END Page Settings -->
<!-- END Body -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
