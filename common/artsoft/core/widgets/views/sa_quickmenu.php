<!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
<?php

?>
<nav class="shortcut-menu d-none d-sm-block">
    <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
    <label for="menu_open" class="menu-open-button ">
        <span class="app-shortcut-icon d-block"></span>
    </label>
    <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="<?= Yii::t('art/layout', 'Scroll Top')?>">
        <i class="fal fa-arrow-up"></i>
    </a>
    <a href="page_login.html" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="<?= Yii::t('art/layout', 'Logout')?>">
        <i class="fal fa-sign-out"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="<?= Yii::t('art/layout', 'Full Screen')?>">
        <i class="fal fa-expand"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="<?= Yii::t('art/layout', 'Print page')?>">
        <i class="fal fa-print"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left" title="<?= Yii::t('art/layout', 'Voice command')?>">
        <i class="fal fa-microphone"></i>
    </a>
</nav>